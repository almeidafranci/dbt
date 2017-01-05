<?php

namespace Dbt\Retorno;

use Dbt\Register;

/**
* 
*/
class RegisterH extends Register
{
    public static function loadByLine($line, $layout)
    {
        $instance = new self();
        $instance->loadProperties($line, $layout);
        $instance->process();
        return $instance;
    }

    public function getIdClienteEmpresaAnterior()
    {
        return $this->fields['H02']->getValue();
    }

    public function getAgencia()
    {
        return $this->fields['H03']->getValue();
    }

    public function getIdClienteBanco()
    {
        return $this->fields['H04']->getValue();
    }

    public function getIdClienteEmpresaAtual()
    {
        return $this->fields['H05']->getValue();
    }

    public function getOcorrencia()
    {
        return $this->fields['H06']->getValue();
    }

    public function getCodigoMovimento()
    {
        return $this->fields['H08']->getValue();
    }
}