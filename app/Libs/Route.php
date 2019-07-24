<?php


namespace App\Libs;


class Route
{
    public $_controller = 'index';
    public $_action     = 'default';
    public $_params     =[];

    public function __construct()
    {
        $this->parseUrl();
    }
    private function parseUrl(){
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
        $url = explode('/', $url);

        if(isset($url[0])&& !empty($url[0])){
            $this->_controller = $url[0];
        }
        if(isset($url[1])&& !empty($url[1])){
            $this->_action = $url[1];
        }
        if(isset($url[2]) && !empty($url[2])){
            $this->_params = explode('/',$url[2]);
        }
    }
    public function dispatcher() {
        $controllerName = 'App\Controllers\\' . ucfirst($this->_controller) . 'Controller';
        if(!class_exists($controllerName)){
            $controllerName = $this->_controller = 'App\Controllers\NotfoundController';
        }
        $controller = new $controllerName;
        $actionName = $this->_action . 'Action';
        if(!method_exists($controller,$actionName)){
            $actionName = $this->_action='notfoundAction';
        }
        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->$actionName();

    }
}