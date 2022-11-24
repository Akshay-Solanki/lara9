<?php

namespace App\ModelHelpers;


class EnumField extends Field {

    public string $value;

    public array $enums;

    public function setValue($value)
    {
        if(! in_array($this->value, $this->enums)) {
            throw new \Exception('Invalid valid value set in '. get_class($this). '');  
        }

        $this->value = $value;
        
        return $this;
    }

    public function setEnums($enums): self
    {
        $this->enums = $enums;

        return $this;
    }
    
    public function execute() :string
    {
        return $this->value;
    }

}