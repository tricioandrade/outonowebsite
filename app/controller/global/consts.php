<?php
namespace app\controller\global;

class consts extends cleaner
{
    const url = 'url';
    const author = 'Patrício Andrdae';
    const app = 'Outono';
    const icon = 'app/view/img/icon/outono.png';
    const server = 'http://localhost/outono/'; 

    public static function _defined(): void
    {
        define('url', cleaner::filter(cleaner::get, self::url, cleaner::sanitize_url));
        define('author', 'Patrício Andrade');
        define('loginlink', self::server.'_blank/login/');
        define('outonologo', self::server.'app/view/img/icon/outonologo.png');
        define('server', self::server);
    }
}