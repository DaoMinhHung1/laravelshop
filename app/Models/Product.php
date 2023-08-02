<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['maproduct', 'nameproduct', 'priceproduct', 'imgproduct', 'desproduct'];


    public function getMaProduct($maproduct)
    {
        return $maproduct;
    }
    public function setMaProduct($maproduct)
    {
        $this->attributes['maproduct'] = ($maproduct);
    }

    public function getNameProduct($nameproduct)
    {
        return $nameproduct;
    }
    public function setNameProduct($nameproduct)
    {
        $this->attributes['nameproduct'] = ($nameproduct);
    }

    public function getPriceProduct($priceproduct)
    {
        return $priceproduct;
    }
    public function setPriceProduct($priceproduct)
    {
        $this->attributes['priceproduct'] = ($priceproduct);
    }

    public function getImgProduct($imgproduct)
    {
        return $imgproduct;
    }
    public function setImgProduct($imgproduct)
    {
        $this->attributes['imgproduct'] = ($imgproduct);
    }

    public function getDesProduct($desproduct)
    {
        return $desproduct;
    }
    public function setDesProduct($desproduct)
    {
        $this->attributes['desproduct'] = ($desproduct);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}