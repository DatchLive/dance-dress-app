<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
  protected $table = 'dresses';

  protected $primaryKey = 'd_id';

  protected $fillable = [
    'name',
    'genre',
    'color',
  ];

  public function InsertDress($request)
  {

    return $this->create(
      [
        'name' => $request -> name,
        'genre' => $request -> genre,
        'color' => $request -> color,
      ]
    );
  }
}
