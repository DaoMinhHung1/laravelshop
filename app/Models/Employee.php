<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = ['nameemploy', 'imgemloy', 'ageemploy', 'phoneemploy', 'emailemploy', 'addressemploy', 'jobemploy'];


    public function getMaEmploy($nameemploy)
    {
        return $nameemploy;
    }
    public function setMaEmploy($nameemploy)
    {
        $this->attributes['nameemploy'] = ($nameemploy);
    }


    public function getImgEmploy($imgemloy)
    {
        return $imgemloy;
    }
    public function setImgEmploy($imgemloy)
    {
        $this->attributes['imgemloy'] = ($imgemloy);
    }


    public function getAgeEmploy($ageemploy)
    {
        return $ageemploy;
    }
    public function setAgeEmploy($ageemploy)
    {
        $this->attributes['ageemploy'] = ($ageemploy);
    }

    
    public function getPhoneEmploy($phoneemploy)
    {
        return $phoneemploy;
    }
    public function setPhoneEmploy($phoneemploy)
    {
        $this->attributes['phoneemploy'] = ($phoneemploy);
    }


    public function getEhoneEmploy($emailemploy)
    {
        return $emailemploy;
    }
    public function setEhoneEmploy($emailemploy)
    {
        $this->attributes['emailemploy'] = ($emailemploy);
    }


    public function getAddressEmploy($addressemploy)
    {
        return $addressemploy;
    }
    public function setAddressEmploy($addressemploy)
    {
        $this->attributes['addressemploy'] = ($addressemploy);
    }


    public function getJobEmploy($jobemploy)
    {
        return $jobemploy;
    }
    public function setJobEmploy($jobemploy)
    {
        $this->attributes['jobemploy'] = ($jobemploy);
    }
}
