<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
      'category_name'
    ];
}
