<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message',
        'is_read',
        'type',
        'receive_by',
        'sent_by',
    ];

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receive_by');
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }
}
