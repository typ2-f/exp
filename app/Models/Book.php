<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'isbn',
        'title',
    ];

    //リレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }
    public function storageBookLogs()
    {
        return $this->hasMany(StorageBookLog::class);
    }

}
