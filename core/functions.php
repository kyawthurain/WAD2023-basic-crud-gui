<?php

// Die Dump
function dd(mixed $data,$showType = false):void
{
    echo "<pre style='background-color: #1d1d1d;color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px; line-height: 1.2rem;'>";
        if($showType){
            var_dump($data);
        }else{
            print_r($data);
        }
    echo "</pre>";
    die();
}

// Url generator
function url(string $fileName):string
{
    $path = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $path .= "://";
    $path .= $_SERVER["HTTP_HOST"];
    $path .= "/";
    $path .= $fileName;
    return $path;
}

// Bootstrap Alert
function alert(string $message, string $color ='success'):string
{
    return "<div class=' alert alert-$color' >$message</div>";
}


// Show Time
function showTime(string $timestamp,string $format="j M Y"):string
{
    return date($format,strtotime($timestamp));
}
