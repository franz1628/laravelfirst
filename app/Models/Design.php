<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Design extends Model
{
    use HasFactory;
    protected $table = 'design';
    protected $fillable = ['description','idBrand','state'];

    public function brand(): BelongsTo{
        return $this->belongsTo(Brand::class,'idBrand'); 
    }

}
