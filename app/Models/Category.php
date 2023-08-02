<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function getName($name)
    {
        return $name;
    }
    public function setName($name)
    {
        $this->attributes['name'] = ($name);
    }
}
