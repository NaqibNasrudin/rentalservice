<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;

    public function vehicle(){
        return $this->hasMany(Vehicle::class);
    }
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'f_name', 'l_name','phone_number',
    ];
}
