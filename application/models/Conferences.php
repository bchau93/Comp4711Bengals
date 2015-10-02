<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conferences extends CI_Model {

    var $data = array(
        array('id' => '1', 'who' => 'Cincinati Bengals', 'wins' => '3', 'losses'=>'0',
            'ties' => '0', 'home'=> '1-0', 'road'=>'2-0', 'streak'=> '3W'),
        array('id' => '2', 'who' => 'Pittsburgh Steelers', 'wins' => '2', 'losses'=>'2',
            'ties' => '0', 'home'=> '1-1', 'road'=>'1-1', 'streak'=> '1L'),
        array('id' => '3', 'who' => 'Cleveland Browns', 'wins' => '1', 'losses'=>'2',
            'ties' => '0', 'home'=> '1-1', 'road'=>'0-1', 'streak'=> '1L'),
        array('id' => '4', 'who' => 'Baltimore Ravens', 'wins' => '1', 'losses'=>'3',
            'ties' => '0', 'home'=> '0-1', 'road'=>'1-2', 'streak'=> '1W'),
        );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

}

