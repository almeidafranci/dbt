<?php

namespace Dbt;

class Field
{
    protected $name;
    protected $value;

    public static function loadByText(String $text, Array $config)
    {
        $instance = new self();
        $instance->loadProperties($text, $config);
        return $instance;
    }

    public static function loadByValue(String $value, Array $config)
    {
        $instance = new self();
        $instance->name = $config['nome'];
        $instance->validateValue($value, $config['tipo'], $config['tamanho']);
        $instance->value = $instance->prepareValue($value, $config['tipo'], $config['tamanho']);
        return $instance;
    }

    public function loadToText(String $text, Int $start)
    {
        return substr_replace($text, $this->value, $start, strlen($this->value));
    }

    protected function validateValue($value, $type, $size)
    {
        if(strlen($value) > $size){
            throw new Exception("Value size greater than supported size.");
        }
        if ($type == '9') {
            if (!is_numeric($value)) {
                throw new Exception("Value must be numeric.");
            }
        }
    }

    protected function prepareValue($value, $type, $size)
    {
        switch ($type) {
            case '9':
                return str_repeat('0', ($size - strlen($value))).$value;
                break;
            case 'X':
                return strtoupper($value).str_repeat(' ', ($size - strlen($value)));
                break;
        }
    }

    protected function loadProperties($text, $config)
    {
        $this->name = $config['nome'];
        $this->value = substr($text, $config['inicio']-1, $config['tamanho']);
    }

    public function getValue()
    {
        return $this->value;
    }
}