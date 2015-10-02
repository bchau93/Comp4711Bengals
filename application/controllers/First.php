
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        //Gets quote with id 1
        $source = $this->quotes->get(1);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
    
    function gimmie($number) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        //Gets quote on number passed in url
        $source = $this->quotes->get($number);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
}
