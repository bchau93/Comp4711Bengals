<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        //Gets quote with id 5
        $source = $this->quotes->get(5);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
  
    function wisdom(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        //Gets quote with id 6
        $source = $this->quotes->get(6);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
}
