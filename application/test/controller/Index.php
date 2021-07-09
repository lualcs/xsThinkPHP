<?php
namespace app\test\controller;

use think\Controller;

use app\test\module\Index as OModule;

class Index extends Controller
{
    public function index()
    {
        return json(OModule::select());//$this->view->fetch();;
    }
}

