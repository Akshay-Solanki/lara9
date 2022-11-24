<?php

namespace App\Models;

use App\ModelHelpers\StringField;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;


    protected $fillables = [
        'name',
        'status',
        'created_by'
    ];

    public function saveablesFields(): array
    {
        return array(
            'name'  => StringField::new(),
            'status'=> EnumField::new()
        );
    }

}
