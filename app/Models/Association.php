<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $fillable = ['association_name', 'association_number_of_employees', 'association_email', 'association_type','association_logo'];

    
    public function dons()
    {
        return $this->belongsToMany(Don::class);
    }
}
