<?php
namespace App\ModelHelpers\Fields;

class Field {
    public static function new(): static{
        return new static();
    }
}