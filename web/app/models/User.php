<?php

trait User
{
    use Model;
    protected $table = 'users';

    protected $allowedColums = [
        'first_name',
        'last_name',
        'email',
        'password',
        'status'
    ];
}
