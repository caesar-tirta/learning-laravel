<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name, email, phone_number'];
    protected $table = 'view_contact';
    protected $namespace;

    public function __construct()
    {
        $this->namespace = 'App\Models\\';
    }
    
    public function scopeSearch($query, $request)
    {
        dd($request);
    }

}
