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
class Rosters extends CI_Model {
    
    //'where' => '/sleep' route
    var $data = [array('id' => '1', 'playerName' => 'Russell Bodine', 'number' => '61', 'position'=>'C'),
        array('id' => '2', 'playerName' => 'T.J. Johnson', 'number' => '60', 'position'=>'C'),
        array('id' => '3', 'playerName' => 'Darqueze Dennard', 'number' => '21', 'position'=>'CB'),
        array('id' => '4', 'playerName' => 'Leon Hall', 'number' => '29', 'position'=>'CB'),
        array('id' => '5', 'playerName' => 'Adam Jones', 'number' => '24', 'position'=>'CB'),
        array('id' => '6', 'playerName' => 'Dre Kirkpatrick', 'number' => '27', 'position'=>'CB'),
        array('id' => '7', 'playerName' => 'Chris Lewis-Harris', 'number' => '37', 'position'=>'CB'),
        array('id' => '8', 'playerName' => 'Josh Shaw', 'number' => '26', 'position'=>'CB'),
        array('id' => '9', 'playerName' => 'Will Clarke', 'number' => '93', 'position'=>'DE')
       ];
    
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single quote
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }
    
}
