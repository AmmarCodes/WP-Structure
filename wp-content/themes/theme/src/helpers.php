<?php

function dd($param)
{
    echo '<pre dir="ltr">';
    if(is_array($param))
        print_r($param);
    else
        var_dump($param);
    echo '</pre>';
    die();
}

