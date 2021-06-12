<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'videoUrl', 
        'author_id', 
    ]; 

    public function author(){
        return $this->belongsTo(Author::class); 
    }

    public function categories(){
        return $this->belongsToMany(Category::class); 
    }

    public function users(){
        return $this->belongsToMany(User::class); 
    }
}
