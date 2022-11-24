<?php

namespace App\ModelHelpers;

use App\ModelHelpers\Fields\Field;
use Illuminate\Database\Eloquent\Model;

class SaveModel {

    public function __construct(private Model $model,private array $data)
    {}

    public function execute(): Model
    {
        foreach($this->data as $column => $value){
            
            $this->model->{$column} = $this
                ->saveableFields($column)
                ->setValue($value)
                ->execute();
            
        }

        $this->model->save();
        
        return $this->model;
    }

    public function saveableFields($column) :Field
    {
        return $this->model->saveableFields()[$column];
    }

}