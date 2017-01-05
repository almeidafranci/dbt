<?php

namespace Dbt\Retorno;

use Dbt\Register;

/**
* 
*/
class RegisterB extends Register
{
    public static function loadByLine($line, $layout)
    {
        $instance = new self();
        $instance->loadProperties($line, $layout);
        $instance->process();
        return $instance;
    }

    public function getIdClienteEmpresa()
    {
        return $this->fields['B02']->getValue();
    }

    public function getAgencia()
    {
        return $this->fields['B03']->getValue();
    }

    public function getIdClienteBanco()
    {
        return $this->fields['B04']->getValue();
    }

    public function getData()
    {
        $date = $this->fields['B05']->getValue();
        return substr($date, 6, 2).'/'.substr($date, 4, 2).'/'.substr($date, 0, 4);
    }

    public function getCodigoMovimento()
    {
        return $this->fields['B07']->getValue();
    }
}