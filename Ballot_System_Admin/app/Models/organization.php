<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;

    protected $table = 'organization';

    protected $fillable = [
        'organization_id',
        'name',
        'acronym',
    ];
}