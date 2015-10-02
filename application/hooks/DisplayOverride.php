<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DisplayOverride  {
    
   // Bolds all capital letters that appear inside a paragraph tag with the Lead Attribute
   function OverrideDisplay(){
       $CI =& get_instance();
       $output = $CI->output->get_output();     
       //Regex pattern for the lead attribute
       $lead = '/<p class="lead">(.*)<\/p>/';
       //Array for matches
       $matches = array();
       //If there is a match in $output with Lead Pattern
       if(preg_match($lead, $output, $matches)){
            //Split up matches with delimiter " " into $quote array
            $quote = explode(" ", $matches[0]);
            //Replace the lead tag with empty string for first word in quote
            $quote[1] = preg_replace('/(class="lead">)/', '', $quote[1]);
            /*
             * For each word in $quote array, if the word begins with a capital
             * letter, bold it.
             */
            for($i = 0; $i < count($quote); ++$i){     
                $word = $quote[$i];
                if(ctype_upper($word[0])){
                    $word = "<strong>" . $word . "</strong>";
                }
                $quote[$i] = $word;
            }
            //Add the lead attribute back to first word in quote
            $quote[1] = 'class="lead">' . $quote[1]; 
            //put the words in $quote array back into a single string in new Matches index 0
            $newMatches[0] = implode(" ",$quote);
            //Create new buffer with newMatches 
            $newOutput = str_replace($matches[0], $newMatches[0], $output);
            $CI->output->set_output($newOutput);
       }else{
            $CI->output->set_output($output);
       }
       $CI->output->_display();  
   }
   
   
}