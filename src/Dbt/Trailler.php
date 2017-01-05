<?php

namespace Dbt;

class Trailler extends Register
{
    public static function loadByLine($line, $layout)
    {
        $instance = new self();
        $instance->loadProperties($line, $layout);
        $instance->process();
        return $instance;
    }

    public function getTotalRegistros()
    {
        return $this->fields['Z02']->getValue();
    }

    public function getValorRegistros()
    {
        return $this->fields['Z03']->getValue();
    }
}