<?php

namespace app\controller\layout;
 
use app\controller\routes\controller;

class attributes extends controller
{

    public object $includes;
    public object $css;
    public object $script; 
    const server = 'http://localhost/outono/'; 
    const rootpages = 'app/view/html/pages/';
    const notapage = 'app/view/html/404/error';

    public function setIncludes()
    {
        $this->css = new \ArrayObject([], \ArrayObject::STD_PROP_LIST);
             #css
             $this->css[] = self::server.'app/view/css/style.css';
             $this->css[] = self::server.'app/view/fonts/fonts.css';
             $this->css[] = self::server.'vendor/boxicons/css/boxicons.min.css';
             $this->css[] = self::server.'vendor/bootstrap/css/bootstrap.min.css';
             $this->css[] = self::server.'vendor/fontawesome/css/all.min.css';
             $this->css[] = self::server.'vendor/icofont/icofont.min.css';
             $this->css[] = self::server.'vendor/venobox/venobox.min.css';
             

        #user
            #html
        $this->includes = new \ArrayObject([], \ArrayObject::STD_PROP_LIST);
        $this->includes->header = 'app/view/html/headers/header.php';
        $this->includes->footer = 'app/view/html/footers/footer.php';
       
        #vendor
            #script
        $this->script   = new \ArrayObject([], \ArrayObject::STD_PROP_LIST);
        $this->script[] =   self::server.'vendor/jquery/jquery-3.2.1.min.js'; 
        $this->script[] =   self::server.'vendor/jquery.easing/jquery.easing.min.js';
        $this->script[] =   self::server.'vendor/fontawesome/js/all.min.js';
        $this->script[] =   self::server.'vendor/bootstrap/js/bootstrap.min.js'; 
        $this->script[] =   self::server.'vendor/venobox/venobox.min.js'; 
        $this->script[] =   self::server.'vendor/js/main.js'; 
    }

    public function getIncludes():object{
        return $this->includes;
    }

    public function header(){
        $this->setIncludes();
        return $this->includes->header;
    }

    public function footer(){
        $this->setIncludes();
        return $this->includes->footer;
    }

    public function getcss(){
        return $this->css();
    }

    public function css(){
        $this->setIncludes(); 
        foreach ($this->css as $key => $value):
            echo "<link rel='stylesheet' href='".$value."'>";
        endforeach;
    }

    public function script()
    {
        $this->setIncludes(); 
        foreach ($this->script as $key => $value):
            echo "<script type='application/x-javascript' src='".$value."'></script>\n";
        endforeach;
    }
}