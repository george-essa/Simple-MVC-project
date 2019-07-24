<?php


namespace App\Controllers;


abstract class AbstractController
{
    public $_controller;
    public $_action ;
    public $_params;


    public function notfoundAction(){
        $this->view();
    }

    public function setController($controller){
        $this->_controller = $controller;
    }

    public function setAction($action){
        $this->_action= $action;
    }

    public function setparams($params){
        $this->_params= $params;
    }

    public function smarty(){
        return new \Smarty();
    }

    public function view(){
        $view = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR .'Views/' . $this->_controller . DIRECTORY_SEPARATOR . $this->_action .'.view.tpl';
        if($this->_action == 'notfoundAction'){
            require '../app/Views/notfound/notfound.view.tpl';

        }else {

            if(file_exists($view)){
                return $view;

            } else {
                require '../app/Views/notfound/nofound.view.tpl';
            }
        }

    }

}