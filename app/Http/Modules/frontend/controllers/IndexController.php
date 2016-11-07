<?php

namespace App\Modules\Frontend\Controllers;

//use Modules\Models\Services\Services;
use Phalcon\Http\Response;


class IndexController extends ControllerBase
{
    public function indexAction()
    {
        return new Response("hello there");

//        try {
//            $this->view->users = Services::getService('User')->getLast();
//        } catch (\Exception $e) {
//            $this->flash->error($e->getMessage());
//        }
    }
}
