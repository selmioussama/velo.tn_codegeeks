<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

     protected $fillable = [
            'title',
            'description',
            'place',
            'start_date',
            'end_date',

        ];

       public function feedbacks(){
      return $this->hasMany(Feedback::class);
      }
}
