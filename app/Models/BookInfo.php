<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInfo extends Model
{
  use HasFactory;
  protected $fillable = [
    'isbn',
    'title'
  ];

  //リレーション
  public function books()
  {
    return $this->hasMany(Book::class);
  }
}
