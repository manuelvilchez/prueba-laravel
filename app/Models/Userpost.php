<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpost extends Model
{
    use HasFactory;

   

    protected $fillable = ['name', 'username', 'email', 'street','suite','city', 'zipcode', 'lat', 'lng',
        'phone', 'website', 'company_name', 'company_catchPhrase', 'bs'];
        
}
