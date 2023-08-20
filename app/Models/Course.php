<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // ,HasUuids
    protected $fillable=['name','spacialization_id','uuid'];




    public function specialization()
    {
        return $this->belongsTo(Spacialization::class);
    }
  
    
    public function questions()
    {
        return $this->HasMany(CourseOuestion::class);
    }
}
