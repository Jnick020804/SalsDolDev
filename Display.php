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
include 'Database.php';

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
   
   public function fillContentMessageZones($zoneID)
   {
      $db = new Database('Sals_Dollar','localhost','root','root','mysql');
      
      $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID ="'.$zoneID.'";';
      $result = $db->queryDb($sql);
      
      if($result->rowCount() > 1)
      {
          return 'ERROR TO MANY ROWS RETURNED';
      }
      else if($result->rowCount() <= 0)
      {
          return 'ERROR NO ROWS RETURNED';
      }
      
      $row = $result->fetch();
      
      $output ='<div id="'.$zoneID.'" class="messageZone">';
      $output.='<img class="messageImage" alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"/>';
      $output.='<div class="messageLinkDiv">';
      $output.='<a class="messageLink" href="'.$row['linkTarget'].'">'.$row['linkMessage'].'</a>';
      $output.='</div>';
      $output.='</div>';
      
      return $output;
   }
}
