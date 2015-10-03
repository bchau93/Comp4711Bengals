<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contents extends CI_Model {

    var $data = array(
        array('id' => '1', 'what' => 'In 1937, a team known as the Cincinnati Bengals was formed as a member 
            of the American Football League. The 1937 Bengals finished with a 2-4-2 
            record in their first year, but the AFL folded after the season. The 
            Bengals continued as an independent team in 1938, and in 1939 joined a 
            new AFL, finishing in second place with a 6-2 record. But again, the 
            league folded after the season. <br><br>Once again in 1940, another new AFL emerged, and again the Bengals 
            joined. But that AFL suffered the fate of the two AFLs before it, 
            folding after the 1941 season as the United States entered World World 
            II, and the Bengals folded along with it. Pro football returned to 
            Cincinnati 26 years later in 1967 when Paul Brown headed an ownership 
            group that landed an expansion franchise in the modern-era American 
            Football League. Brown, a Pro Football Hall of Famer who founded and 
            coached the Cleveland Browns from 1946-62, picked the name Bengals for 
            the new team "to give it a link with past professional football in 
            Cincinnati.'),
       
        array('id' => '2', 'what' => 'This site is for academic and learning purposes.
            Any use of names or media falls under the Fair use guidelines.')
       );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    public function homepage() {
        return $this->data[0];
    }

    public function about() {
        return $this->data[1];
    }
    
}