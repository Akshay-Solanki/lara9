<?php
namespace App\ModelHelpers\Fields;

class Field {
    
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public static function new(): static{
        return new static();
    }
}