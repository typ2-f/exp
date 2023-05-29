<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'address',
    ];

    //リレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function storageBookLogs()
    {
        return $this->hasMany(StorageBookLog::class);
    }
}
