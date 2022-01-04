<?php

    function is_connected()
    {
        $connected = @fsockopen("google.com", 80, $errno, $errstr, 20/*Timeout*/);
        if ($connected){
            $is_conn = true; 
            fclose($connected);
        }else{
            $is_conn = false;
        }
        return $is_conn;

    }
