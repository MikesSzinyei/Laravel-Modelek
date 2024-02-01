<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        "package"
    ];

    public $timestamps = false;
    public function drink() {

        return $this->hasMany(Drink::class);
    }
}
