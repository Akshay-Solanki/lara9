<?php

namespace App\ModelHelpers;


class StringField extends Field {

    public string $value;

    public function setValue($value)
    {
        $this->value;

        return $this;
    }
    
    public function execute() :string
    {
        return $this->value;
    }

}