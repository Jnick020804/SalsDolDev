<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Display
 *
 * @author SirJared
 */
class Display {
    
    
   public function displayNav($navItems)
   {
       $output="<div id='nav'>";
       
       for($i = 0;$i < count($navItems);$i++)
       {
           $output.="<a class='navLink'><div class='navDiv'>".$navItems[$i]."</div></a>";
       }
       
       $output.="</div>";
       
       return $output;
   }
}
