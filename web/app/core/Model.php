<?php

class Model
{
    use Database;

    function test()
    {
        $query = 'SELECT * FROM "User" LIMIT 50;';
        $result = $this->query($query);
        show($result);
    }
}
