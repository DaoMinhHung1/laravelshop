<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['maproduct', 'nameproduct', 'imgproduct' , 'imgproduct1', 'imgproduct2', 'imgproduct2' ,'priceproduct','desproduct', 'quantityproduct',  'substance'];


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

    public function getImgProduct1($imgproduct1)
    {
        return $imgproduct1;
    }
    public function setImgProduct1($imgproduct1)
    {
        $this->attributes['imgproduct1'] = ($imgproduct1);
    }

    
    public function getImgProduct2($imgproduct2)
    {
        return $imgproduct2;
    }
    public function setImgProduct2($imgproduct2)
    {
        $this->attributes['imgproduct2'] = ($imgproduct2);
    }

    
    public function getImgProduct3($imgproduct3)
    {
        return $imgproduct3;
    }
    public function setImgProduct3($imgproduct3)
    {
        $this->attributes['imgproduct3'] = ($imgproduct3);
    }


    public function getDesProduct($desproduct)
    {
        return $desproduct;
    }
    public function setDesProduct($desproduct)
    {
        $this->attributes['desproduct'] = ($desproduct);
    }


    public function getQuantity($quantityproduct)
    {
        return $quantityproduct;
    }
    public function setQuantity($quantityproduct)
    {
        $this->attributes['quantityproduct'] = ($quantityproduct);
    }

    
    public function getSubstance($substance)
    {
        return $substance;
    }
    public function setSubstance($substance)
    {
        $this->attributes['substance'] = ($substance);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}