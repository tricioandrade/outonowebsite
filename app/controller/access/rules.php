<?php
namespace app\controller\access;



class rules
{
    const fromdb = '';
    const fromtest = '';
    const byappTest = true;
    public static array $cookiename = array(
        'user' => 'outonouser',
        'app' => 'localpage',
        'map' => 'map',
        'page' => 'page'
    );

    public static function createSession()
    {
        return self::byappTest;
    } 

    public static function createCookie($name, $value, $expire, $path = null, $domain = null)
    {
        switch($name):
            case 'page': 
                if(!isset($_COOKIE[$name])):
                    setcookie($name, $value, $expire);
                else: 
                    $_COOKIE[$name] = $value;
                endif;
                break;
            default:
                setcookie('outono', 'active', time()*10);
                var_dump($_COOKIE[$name]);
                break;    
        endswitch;
    }

    public function changeCookie($cookiename, $value)
    {
        return $_COOKIE[$cookiename] = $value;
    }
}