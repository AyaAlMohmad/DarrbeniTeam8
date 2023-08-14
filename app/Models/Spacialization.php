<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spacialization extends Model
{
    use HasFactory ,HasUuids;
    protected $fillable=['name','collage_id'];


    public function collage()
    {
        return $this->belongsTo(Collage::class);
    }
}
