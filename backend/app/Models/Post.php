<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
      'user_id', 'category_id', 'content', 'title'
    ];

    public function category()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo(User::class, 'user_id');
    }
}
