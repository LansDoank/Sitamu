<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = ['name']; 
    // protected $with = ['user'];

    // public function user() : BelongsTo {
    //     return $this->belongsTo(Role::class);
    // }
}
