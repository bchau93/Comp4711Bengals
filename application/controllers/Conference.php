<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conference extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'conference';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->conferences->all();
        $teams = array();
        foreach ($source as $record) {
            $teams[] =  array('id' => $record['id'], 'who' => $record['who'], 'wins' => $record['wins'],
                'losses'=>$record['losses'],'ties' => $record['ties'],
                'home'=> $record['home'], 'road'=>$record['road'], 'streak'=> $record['streak']);
            
        }
        $this->data['teams'] = $teams;

        $this->render();
    }


}