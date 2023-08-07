<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bill';

    protected $fillable = ['mabill', 'nameuser', 'phoneuser', 'addressuser', 'ngayhoadon', 'tongtien'];

    public function getMaBill($mabill)
    {
        return $mabill;
    }
    public function setMaBill($mabill)
    {
        $this->attributes['mabill'] = ($mabill);
    }

    public function getNameUser($nameuser)
    {
        return $nameuser;
    }
    public function setNameUser($nameuser)
    {
        $this->attributes['nameuser'] = ($nameuser);
    }

    public function getPhoneUser($phoneuser)
    {
        return $phoneuser;
    }
    public function setPhoneUser($phoneuser)
    {
        $this->attributes['phoneuser'] = ($phoneuser);
    }

    public function getAddressUser($addressuser)
    {
        return $addressuser;
    }
    public function setAddressUser($addressuser)
    {
        $this->attributes['addressuser'] = ($addressuser);
    }

    public function getNgayHoaDon($ngayhoadon)
    {
        return $ngayhoadon;
    }
    public function setNgayHoaDon($ngayhoadon)
    {
        $this->attributes['ngayhoadon'] = ($ngayhoadon);
    }

    public function getTongTien($tongtien)
    {
        return $tongtien;
    }
    public function setTongTien($tongtien)
    {
        $this->attributes['tongtien'] = ($tongtien);
    }
}
