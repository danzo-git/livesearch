<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriePost extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;


    
    protected $fillable=['nom_categorie'];
    public function Post(){
        return $this->hasMany(Post::class,'post', );
    }
}
