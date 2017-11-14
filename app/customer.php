<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = 'customers';
    protected $fillable = [
        'fName',
        'lName',
        'comp_name',
        'phone_number',
        'city',
        'state',
        'postal',
        'address1',
        'address2',
        'zip',
        'email_add',
        'username',
        'password'
    ];
}
