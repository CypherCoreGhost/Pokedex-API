<?php

namespace App\Helpers;

class Response
{
    public function json($message)
    {
        header('Content-Type: application/json');

        echo json_encode($message);
        exit;
    }
}


