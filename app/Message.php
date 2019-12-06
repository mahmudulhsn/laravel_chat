<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $filalble = [
        'from', 'to', 'message', 'is_read'
    ];
}
