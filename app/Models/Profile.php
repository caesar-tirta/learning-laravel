<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $namespace;
    public function __construct()
    {
        $this->namespace = 'App\Models\\';
    }
    public function contact()
    {
        return $this->belongsTo($this->namespace.'Contact');
    }
}
