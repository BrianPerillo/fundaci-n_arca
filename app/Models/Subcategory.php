<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Text;
use App\Models\Slider;

class Subcategory extends Model
{
    use HasFactory;

    //Relación 1:N - Una Subcategory puede pertenecer a una categoría y una categoría puede tener muchas subcats
    public function category(){                
        return $this->belongsTo(Category::class);
    }

    //Relación 1:N - Una subcat puede tener muchos sliders y un slider pertenecer a una subcat
    public function sliders(){                
        return $this->hasMany(Slider::class);
    }

    //Relación 1:N - Una subcat puede tener muchos texts y un text pertenecer a una subcat
    public function texts(){                
        return $this->hasMany(Text::class);
    }            

}
