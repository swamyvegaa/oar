<?php

$base_url = 'http://localhost/onantiquerow/';

function url_rewite($url) {
    //$test = "Hi   & Hel &     lo";
    $q = preg_replace('/[^a-zA-Z0-9]+/', ' ', $url);
    $space = preg_replace("/\s+/", " ", $q);
    $rewrite_url = str_replace(" ", "-", $space);
    return $rewrite_url;
}

?>