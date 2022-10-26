<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veloL extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'etat',
        'description',
        'addresse',
        'prix',
        'start_date',
        'end_date',
        'user_id',
        'image'

    ];
    public  function user(){
        return $this->belongsTo(User::class);
    }
    public function reclamation(){
        return $this->hasMany(reclamation::class,foreignKey: 'veloL_id');
    }

}
