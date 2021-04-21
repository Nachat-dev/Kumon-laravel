<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table                = 'studentdata';
    protected $allowedFields        = [
        'stdNameTH', 'stdNameEN', 'user', 'password', 'centreID', 'centreTH', 'centreEN', 'phone', 'surnameTH', 'surnameEN'
    ];
}
