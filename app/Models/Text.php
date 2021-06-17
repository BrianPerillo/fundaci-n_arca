<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subcategory;

class Text extends Model
{
    use HasFactory;

    //Relación 1:N - Un texto puede tener una categoría y una categoría pertenecer a muchos textos
    public function subcategory(){                
        return $this->belongsTo(Subcategory::class);
    }

}
