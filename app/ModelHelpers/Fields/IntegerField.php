<?php

namespace App\ModelHelpers\Fields;


class IntegerField extends Field {

    public string $value;

    public function execute():int
    {
        return $this->value;
    }

}