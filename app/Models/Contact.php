<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name, email, phone_number'];
    protected $table = 'view_contact';
    
    public function scopeSearch($query, $request)
    {
        dd($request);
    }

    public function scope($value='')
    {
        # code...
    }

}
