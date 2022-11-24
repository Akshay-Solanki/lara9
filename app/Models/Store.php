<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\ModelHelpers\Fields\EnumField;
use App\ModelHelpers\Fields\StringField;
use App\ModelHelpers\Fields\IntegerField;

class Store extends Model
{
    use HasFactory;


    protected $fillables = [
        'name',
        'status',
        'created_by'
    ];

    public function saveableFields(): array
    {
        return array(
            'name'  => StringField::new(),
            'status'=> EnumField::new()->setEnums(['pending','active','inactive','suspended']),
            'created_by' => IntegerField::new()
        );
    }

}
