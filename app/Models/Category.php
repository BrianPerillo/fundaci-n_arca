<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subcategory;

class Category extends Model
{
    use HasFactory;

    //Relación 1:N - Una category puede tener muchas subcategories y una subcategory pertenecer a una category
    public function subcategories(){                
        return $this->hasMany(Subcategory::class);
    }    

}
