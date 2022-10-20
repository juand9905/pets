<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory;

    protected $appends = ['email_hashed'];

    protected function emailHashed(): Attribute
    {
        return Attribute::make(
            get: fn () => md5(strtolower(trim($this->email))),
        );
    }

    public function pets(){
        return $this->belongsTo(Pet::class);
    }

}
