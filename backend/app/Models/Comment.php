<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
      'user_id', 'post_id', 'comment'
    ];
}
