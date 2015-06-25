<?php

class IndexController extends BaseController {


        public $restful = true;

        public function index()
        {
                return View::make('index');
        }
}

