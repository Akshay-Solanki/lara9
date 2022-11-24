<?php

namespace App\ModelHelpers;

use App\ModelHelpers\Fields\Field;

class SaveModel {

    public function __construct(private Model $model,private array $data)
    {}

    public function execute()
    {
        foreach($this->data as $column => $value){
            
            $this->model->{$column} = $this
                ->saveableField($column)
                ->setValue($value)
                ->execute();
            
        }

        return $this->model->save();
    }

    public function saveableField($column) :Field
    {
        return $this->model->savebleFields()[$column];
    }

}