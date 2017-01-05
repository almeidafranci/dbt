<?php

namespace Dbt;

use Dbt\LoadRegister;

class Header extends Register
{
    public function getCodigoConvenio()
    {
        return $this->fields['A03']->getValue();
    }
    
    public function getNomeEmpresa()
    {
        return $this->fields['A04']->getValue();
    }
    
    public function getCodigoBanco()
    {
        return $this->fields['A05']->getValue();
    }
    
    public function getNomeBanco()
    {
        return $this->fields['A06']->getValue();
    }
    
    public function getDataGeracao()
    {
        $date = $this->fields['A07']->getValue();
        return substr($date, 6, 2).'/'.substr($date, 4, 2).'/'.substr($date, 0, 4);
    }
    
    public function getNSA()
    {
        return $this->fields['A08']->getValue();
    }
    
    public function getVersaoLayout()
    {
        return $this->fields['A09']->getValue();
    }
    
    public function getServico()
    {
        return $this->fields['A10']->getValue();
    }
}