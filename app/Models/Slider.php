<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;
use App\Models\Subcategory;

class Slider extends Model
{
    use HasFactory;

    //Relación 1:N - Un slider puede pertenecer a una subcat y una subcat tener muchos sliders
    public function subcategory(){                
        return $this->belongsTo(Subcategory::class);
    }

    //Relación N:N - Un slider puede tener muchas imágenes y una imágen pertenecer a muchos sliders
    public function images(){                
        return $this->belongsToMany(Image::class);
    }
    

}
