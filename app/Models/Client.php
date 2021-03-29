<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['type_document', 'number_document', 'firstname', 'lastname', 'sex', 'direction', 'phone', 'occupation'];
}
