<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "user_id",
        "veloL_id"
    ];
    public  function user(){
        return $this->belongsTo(User::class);
    }
    public  function veloL(){
        return $this->belongsTo(veloL::class);
    }}
