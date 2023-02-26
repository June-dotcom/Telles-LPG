<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_profiles extends Model
{
    use HasFactory;
    protected $table = 'users_profile';
    public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'houseNum',
        'barangay',
        'town_city',
        'phone_number',
    ];
}
