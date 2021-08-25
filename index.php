<?php
 
use app\controller\global\consts;
use app\controller\routes\app as RoutesApp;

#For Xampp on Ubuntu
#___i ni_set('allow_url_include', 'On');
#___ ini_set('display_errors',1);
#___ error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';
session_start();

const __host = 'localhost:3308';
const __user = 'root';
const __database = 'outono';
const __password = '';
const __charset = 'utf8';
 
 
consts::_defined();

new RoutesApp();