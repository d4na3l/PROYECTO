<?php

class User
{
    use Model;
    protected $table = 'User';

    protected $allowedColums = [
        'ci',
        'name',
        'last_name',
        'email',
        'password',
    ];
}
