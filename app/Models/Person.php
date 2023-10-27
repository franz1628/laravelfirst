<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'person';
    protected $fillable = ['name','firstsurname','secondsurname','document','idTypeDocument','idRole','birth','state'];

    public function typeDocument(){
        return $this->belongsTo(TypeDocument::class,'idTypeDocument');
    }

    public function role(){
        return $this->belongsTo(Role::class,'idRole');
    }
}
