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
                 array('id' => '5', 'playerName' => 'Will Clarke', 'number' => '93', 'position'=>'DE'),
                 array('id' => '6', 'playerName' => 'Carlos Dunlap', 'number' => '96', 'position'=>'DE'),
                 array('id' => '7', 'playerName' => 'Geno Atkins', 'number' => '97', 'position'=>'DT'),
                 array('id' => '8', 'playerName' => 'Marcus Hardison', 'number' => '91', 'position'=>'DT'),
                 array('id' => '9', 'playerName' => 'Clint Boling', 'number' => '65', 'position'=>'G'),
                 array('id' => '9', 'playerName' => 'Kevin Zeitler  ', 'number' => '68', 'position'=>'G'),
                 array('id' => '9', 'playerName' => 'Giovani Bernard', 'number' => '25', 'position'=>'HB'),
                 array('id' => '9', 'playerName' => 'Rex Burkhead', 'number' => '33', 'position'=>'HB'),
                 array('id' => '9', 'playerName' => 'Mike Nugent', 'number' => '2', 'position'=>'K'),
                 array('id' => '9', 'playerName' => 'Chris Carter', 'number' => '51', 'position'=>'LB'),
                 array('id' => '9', 'playerName' => 'P.J. Dawson', 'number' => '47', 'position'=>'LB'),
                 array('id' => '9', 'playerName' => 'Jake Fisher', 'number' => '74', 'position'=>'OT'),
                 array('id' => '9', 'playerName' => 'Andre Smith', 'number' => '71', 'position'=>'OT'),
                 array('id' => '9', 'playerName' => 'Andy Dalton', 'number' => '14', 'position'=>'QB'),
                 array('id' => '9', 'playerName' => 'AJ McCarron', 'number' => '5', 'position'=>'QB'),
                 array('id' => '9', 'playerName' => 'Mario Alford', 'number' => '15', 'position'=>'WR')
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
