<?php

namespace app\controller\layout;

abstract class view extends attributes
{
    public function view()
    {   $this->parseURL();
        if(file_exists(self::rootpages.$this->getMethod().'.php')): 
            $this->setInclude(self::rootpages.strtolower($this->getMethod()));
        else:
            return $this->setInclude(self::notapage);
        endif;
    }

    public function setInclude(string $rootpage){
        $this->header();
        $this->page($rootpage);
        $this->footer();
    }

    public function page(string $rootpage): string{
        return include $rootpage.'.php';
    }

    public function header(): string {   
        return include parent::header();
    }

    public function footer(): string{
        return include parent::footer();
    }

}