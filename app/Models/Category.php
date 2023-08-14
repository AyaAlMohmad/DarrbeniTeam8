<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory ,HasUuids;


    protected $fillable=['name','image'];


    public function collages()
    {
        return $this->HasToMany(Collage::class);
    }
   
}
