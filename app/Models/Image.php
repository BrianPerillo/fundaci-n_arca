<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Slider;

class Image extends Model
{
    use HasFactory;

    //Relación N:N - Un slider puede tener muchas imágenes y una imágen pertenecer a muchos sliders
    public function sliders(){                
        return $this->belongsToMany(Slider::class);
    }
    

}
