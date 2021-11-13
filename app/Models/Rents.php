<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rents extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'book_id',
        'user_id',
        'rented_at',
        ];
    public function rented(){
        return $this->hasOne(Library::class,'Bl_record_id','book_id');
    }
    public function renter(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
