<?php
    class Pages extends controller{
        public function __construct(){

        }

        public function index(){
            $data = [
                'title'=> 'welcome'
            ];

            $this->view('pages/index',$data);
        }

        public function about(){
            $this->view('pages/about');
        }
    }