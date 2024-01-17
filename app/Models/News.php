<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
      // Define the fillable fields including 'party'
      protected $fillable = ['title', 'content', 'party'];
      
    use HasFactory;

    // Your model code here
}
