<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    protected $fillable = [
        'platform',
        'link',
        'uid',
    ];
    
    public function linkOf()
        {
            return $this->belongsTo(User::class, 'uid');
        }
}

