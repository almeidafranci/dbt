<?php

namespace Dbt;

class Register
{
    protected $text;
    protected $type;
    protected $configs;
    protected $attributes;
    protected $fields;

    protected function __construct(String $layout, String $text = null, Array $attributes = null)
    {
        $this->text = $text ?: str_repeat("#",150);
        $this->type = isset($attributes['registro']) ? $attributes['registro'] : str_split($this->text)[0];
        $this->configs = $this->getConfigs($layout);
        $this->attributes = $attributes;
        $this->process();
    }

    public static function loadByText($text, $layout)
    {
        return new static($layout, $text);
    }

    public static function loadByAttributes(Array $attributes, String $layout)
    {
        return new static($layout, null, $attributes);
    }

    protected function process()
    {
        if($this->attributes){
            $this->processAttributes();
        }else{
            $this->processText();
        }
    }

    protected function getConfigs($layout)
    {
        return Layout::getFieldConfigs($this->type, $layout);
    }

    public function processText()
    {
        foreach ($this->configs as $field => $config) {
            $this->fields[$config['nome']] = Field::loadByText($this->text, $config);
        }
    }

    public function processAttributes()
    {
        foreach ($this->configs as $field => $config) {
            if($config['nome'] == 'futuro'){
                $this->fields[$config['nome']] = Field::loadByValue('', $config);
                $this->text = $this->fields[$config['nome']]->loadToText($this->text, $config['inicio']-1);
            }elseif(isset($this->attributes[$config['nome']])){
                $this->fields[$config['nome']] = Field::loadByValue($this->attributes[$config['nome']], $config);
                $this->text = $this->fields[$config['nome']]->loadToText($this->text, $config['inicio']-1);
            }else{
                $this->fields[$config['nome']] = null;
            }
        }
    }

    public function __get($name)
    {
        return isset($this->fields[$name]) ? $this->fields[$name]->getValue() : null;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getText()
    {
        return $this->text;
    }
}