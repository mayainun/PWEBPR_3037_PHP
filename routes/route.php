<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

$routes['GET']['/'] = 'AuthController@index';
$routes['POST']['/login'] = 'AuthController@login';
$routes['GET']['/register'] = 'AuthController@register';
$routes['POST']['/register'] = 'UserController@register';

// Rute untuk member
$routes['GET']['/member'] = 'MemberController@index';
$routes['GET']['/membercreate'] = 'MemberController@formcreate';
$routes['GET']['/memberupdate/{id}'] = 'MemberController@formupdate';
$routes['POST']['/createmember'] = 'MemberController@create';
$routes['POST']['/updatemember/{id}'] = 'MemberController@update';
$routes['GET']['/deletemember/{id}'] = 'MemberController@delete';


?>