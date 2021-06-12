<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'imageUrl', 
        'biography'
    ]; 

    public function classrooms(){
        return $this->hasMany(Classroom::class); 
    }
}
