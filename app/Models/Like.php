<?php

namespace App\Models;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tweets()
    {
        return $this->belongsToMany(Tweet::class);
    }
}
