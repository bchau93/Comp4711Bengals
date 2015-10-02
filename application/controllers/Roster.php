<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roster
 *
 * @author Lawrence
 */
class Roster extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $this->data['pagebody'] = 'roster';
        
        $source = $this->rosters->all();
        $players = array();
        foreach ($source as $record) {
            $players[] = array('playerName' => $record['playerName'], 'number' => $record['number'], 'position' => $record['position']);
        }
        $this->data['players'] = $players;

        $this->render();
    }
    
}