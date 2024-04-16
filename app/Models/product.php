<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $appends=['full_name'];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ucfirst($value);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getFullNameAttribute()
    {
        return 'asdasd-'.ucfirst($this->name);
    }
}