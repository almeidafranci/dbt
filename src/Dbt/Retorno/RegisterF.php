<?php

namespace Dbt\Retorno;

use Dbt\Register;

/**
* 
*/
class RegisterF extends Register
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
        return $this->fields['F02']->getValue();
    }

    public function getAgencia()
    {
        return $this->fields['F03']->getValue();
    }

    public function getIdClienteBanco()
    {
        return $this->fields['F04']->getValue();
    }

    public function getData()
    {
        $date = $this->fields['F05']->getValue();
        return substr($date, 6, 2).'/'.substr($date, 4, 2).'/'.substr($date, 0, 4);
    }

    public function getValor()
    {
        return $this->fields['F06']->getValue();
    }

    public function getCodigoRetorno()
    {
        return $this->fields['F07']->getValue();
    }

    public function getUsoEmpresa()
    {
        return $this->fields['F08']->getValue();
    }

    public function getCodigoMovimento()
    {
        return $this->fields['F10']->getValue();
    }
}