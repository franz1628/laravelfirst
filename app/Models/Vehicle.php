<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicle';
    protected $fillable = ['idBrand','idDesign','idPerson','km','state'];

    public function idBrand(){
        $this->belongsTo(Brand::class,'idBrand');
    }

    public function idDesign(){
        $this->belongsTo(Design::class,'idDesign');
    }

    public function idPerson(){
        $this->belongsTo(Person::class,'idPerson');
    }


}
