<?php


namespace App\Controllers;




class IndexController extends AbstractController
{
    public function defaultAction(){
       $smarty = $this->smarty();

       $smarty->assign('default',\App\Models\index::default());

       $smarty->display($this->view());
    }
    public function addAction(){
        $this->view();
    }

}