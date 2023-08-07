<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';

    protected $fillable = ['name', 'phone', 'email', 'title', 'des'];

    public function getName($name)
    {
        return $name;
    }
    public function setName($name)
    {
        $this->attributes['name'] = ($name);
    }

    public function getPhone($phone)
    {
        return $phone;
    }
    public function setPhone($phone)
    {
        $this->attributes['phone'] = ($phone);
    }

    public function getEmail($email)
    {
        return $email;
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = ($email);
    }

    public function getTitle($title)
    {
        return $title;
    }
    public function setTile($title)
    {
        $this->attributes['title'] = ($title);
    }

    public function getDes($des)
    {
        return $des;
    }
    public function setDes($des)
    {
        $this->attributes['des'] = ($des);
    }
}
