<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable=['title','description','id_categorie'];

    public function Categorie()
    {
        return $this->hasone(CategoriePost::class, 'id','id_categorie');
    }
}
