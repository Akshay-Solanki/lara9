<?php

namespace App\ModelHelpers\Fields;


class StringField extends Field {

    public string $value;

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
    
    public function execute() :string
    {
        return $this->value;
    }

}