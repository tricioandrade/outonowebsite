<?php

namespace app\controller\routes;

use app\controller\access\rules;

abstract class controller extends attributes
{
    protected array $url;
    protected string $pageInclude;
    protected function parseURL(){
        $this->setNamespace($this->getDefaultNamespace());
        if (!empty(url)):
            $this->url = explode('/',rtrim(url, '/'));
            if(is_array($this->url)):
                $i = 0;
                while(array_key_exists($i, $this->url)){
                    $this->setController(strtolower($controller = $i == 0 ? $this->url[$i] : ''));
                    $this->setMethod(strtolower($method = $i == 1 ? $this->url[$i] : ''));
                    $this->setParam(strtolower($param = $i == 2 ? $this->url[$i] : ''));
                    $i++;
                }
            endif;
        else:
            $this->_default(); 
        endif;
    }

    public function _default()
    {
        $this->setController($this->getDefaultController());
        $this->setClass('_blank');  
        $this->setMethod('blank');
    }

}
