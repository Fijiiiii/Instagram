<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image)? $this->image :'profile/zi0hWlwaf6WrZr5hq9WdDjKfbpiNbjN2xcKyXa5H.jpg';
        return '/storage/' . $imagePath;
    }

    public function following(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
