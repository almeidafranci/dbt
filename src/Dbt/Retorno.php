<?php

namespace Dbt;

use Dbt\Header;
use Dbt\Register;
use Dbt\Retorno\RegisterB;
use Dbt\Retorno\RegisterF;
use Dbt\Retorno\RegisterH;
use Dbt\Trailler;

class Retorno
{
    private $header;
    private $details = [];
    private $trailler;
    private $layout;

    function __construct($fileName, $layout)
    {
        $this->layout = $layout;
        $this->load($fileName);
    }

    protected function load($fileName)
    {
        $file = fopen($fileName,"r");

        while(! feof($file)){
            $line = fgets($file);
            if (strlen($line) >= 150) {
                $type = $this->identifyType($line);

                switch ($type) {
                    case 'A':
                        $this->header = Header::loadByText($line, $this->layout);
                        break;
                    case 'B':
                        $this->details[] = RegisterB::loadByText($line, $this->layout);
                        break;
                    case 'F':
                        $this->details[] = RegisterF::loadByText($line, $this->layout);
                        break;
                    case 'H':
                        $this->details[] = RegisterH::loadByText($line, $this->layout);
                        break;
                    case 'Z':
                        $this->trailler = Trailler::loadByText($line, $this->layout);
                        break;
                    default:
                        throw new Exception("Invalid register type.");
                        break;
                }
            }
        }

        fclose($file);
    }

    protected function identifyType($line)
    {
        return substr($line, 0, 1);
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function getTrailler()
    {
        return $this->trailler;
    }
}