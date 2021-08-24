<?php

namespace app\controller\routes;
 

abstract class attributes
{
    private object $class;
    private string $controller;
    private  $method;
    private  $param = [];

    private string $namespace;
    private string $defaultNamespace = "app\\controller\\domain\\";
    private string $defaultRoute = "app/controller/domain/";
    private string $defaultController = "_blank";
    private string $defaultClass  = "app\\controller\\domain\\_blank";
    private string $defaultMethod = "blank";

    protected array $dir = array(
        ''
    );
    
    protected function setClass(string $className){
        $class = $this->getNamespace().$className; 
        $this->class = new $class;
    }
    protected function setNamespace(string $namespace){    
        $this->namespace = $namespace;
    }

    protected function getClass(): object{             return $this->class;}
    protected function getNamespace(): string{         return $this->namespace;}

    protected function getDefaultRoute():string{       return $this->defaultRoute;}
    protected function getDefaultClass(): object{      $this->setClass($this->defaultClass); return $this->getClass();}
    protected function getDefaultController(): string{ return $this->defaultController;}
    protected function getDefaultMethod():string{      return $this->defaultMethod;}
    protected function getDefaultNamespace(): string{  return $this->defaultNamespace;}

    protected function setController($controller): void{$this->controller = $controller;}
    protected function setMethod($method): void{        $this->method = $method;}
    protected function setParam($param): void{          $this->param[] = $param;}
    
    protected function getController(){ return $this->controller;}
    protected function getMethod(){     return $this->method;}
    protected function getParam(){      return $this->param;}
}