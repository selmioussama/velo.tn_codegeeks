<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;
    protected $fillable = ['don_destination', 'don_amount', 'don_description', 'don_type'];

    public function associations()
    {
        return $this->belongsToMany(Association::class);
    }
}
