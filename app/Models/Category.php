<?php

namespace App\Models;

use App\ModelHelpers\Fields\EnumField;
use Illuminate\Database\Eloquent\Model;
use App\ModelHelpers\Fields\StringField;
use App\ModelHelpers\Fields\IntegerField;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillables = [
        'name',
        'status',
        'created_by'
    ];

    public function saveableFields()
    {
        return array(
            'name'  => StringField::new(),
            'status'=> EnumField::new()->setEnums(['pending','active','inactive','suspended']),
            'created_by' => IntegerField::new()
        );
    }
}
