<?php

namespace Dbt;

use Dbt\Header;
use Dbt\Register;
use Dbt\Retorno\RegisterB;
use Dbt\Retorno\RegisterF;
use Dbt\Retorno\RegisterH;
use Dbt\Trailler;

class Remessa
{
    private $header;
    private $details = [];
    private $trailler;
    private $layout;
    private $ready = false;

    function __construct($attributes, $layout)
    {
        $this->layout = $layout;
        $this->setHeader($attributes);
        $this->trailler = null;
    }

    protected function setHeader(Array $attributes)
    {
        $this->header = Header::loadByAttributes($attributes, $this->layout);
    }

    protected function setTrailler(Array $attributes)
    {
        $this->trailler = Trailler::loadByAttributes($attributes, $this->layout);
    }

    protected function insetrDetail(Register $register)
    {
        switch ($register->getType()) {
            case 'C':
            case 'D':
            case 'E':
            case 'I':
            case 'J':
            case 'L':
                $this->details[] = $register;
                break;
            default:
                throw new Exception("Invalid register type.");
                break;
        }
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

    public function finish()
    {
        $this->setTrailler($this->prepareTrailler());
        $this->ready = true;
    }

    protected function prepareTrailler()
    {
        $totalValue = 0;
        foreach ($this->details as $detail) {
            if ($detail->getType() == 'E') {
                $totalValue += $detail->valor;
            }
        }
        return [
                'registro' => 'Z',
                'total_registros' => sizeof($this->details)+2,
                'valor_total' => $totalValue
            ];
    }

    public function getText()
    {
        if ($this->ready) {
            $text = $this->header->getText()."\r\n";
            foreach ($this->details as $detail) {
                $text .= $detail->getText()."\r\n";
            }
            $text .= $this->trailler->getText()."\r\n";

            return $text;
        }
        return null;
    }
}