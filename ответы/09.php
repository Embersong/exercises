<?php
$request_uri = '/news'; // page=news, action="", id=""
$request_uri = '/news/1';   // page=news, action="", id=1
$request_uri = '/news/edit/1'; // page=news, action=edit, id=1

$url_array = explode("/", $request_uri);

$page = "";
$action = "";
$id = "";
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
    if (!$url_array[2]=="") {
        if (is_numeric($url_array[2])) {
            $id = $url_array[2];
        } else {
            $action = $url_array[2];
            if (is_numeric($url_array[3])) {
                $id = $url_array[3];
            }
        }
    }
}

var_dump($page);
var_dump($action);
var_dump($id);
