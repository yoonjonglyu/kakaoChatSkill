<?php
function GetWeb($url)
{
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $web = curl_exec($ch);
    
    curl_close($ch);
    
    return $web;
}// rss parse function
?>