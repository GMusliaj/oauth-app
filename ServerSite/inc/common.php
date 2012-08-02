<?php

require_once 'DatabaseController.php';

function genImageString()
{
    $chars = "qwertyuiplkjhgfdsazxvnmPOIUYTREWSDFGHKLMNVX3098308562356";
    
    $size = strlen($chars);
    $str = "i_";
    for ($i = 0; $i < 20 ; $i++)
        $str .= $chars[rand (0, $size - 1)];
    
    return $str . ".jpg";
}

?>
