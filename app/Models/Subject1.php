<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject1 extends Model
{
    use HasFactory;
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
