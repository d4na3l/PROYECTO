<?php

class ClientInformation
{
    use Client;

    public function clientInf()
    {
        $client = $this->first(['user_id' => $_SESSION['user_id']]);
        return $client;
    }
}
