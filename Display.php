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
      
      if(is_string($result))
      {
          return $result;
      }
      else if($result->rowCount() > 1)
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
   
   public function fillContentAdZones($zoneID,$option=null)
   {
      $db = new Database('Sals_Dollar','localhost','root','root','mysql');
       
      $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID ="'.$zoneID.'";';
      $result = $db->queryDb($sql);
      
      if(is_string($result))
      {
          return $result;
      }
      else if($result->rowCount() > 1)
      {
          return 'ERROR TO MANY ROWS RETURNED';
      }
      else if($result->rowCount() <= 0)
      {
          return 'ERROR NO ROWS RETURNED';
      }
      
      $row = $result->fetch();
      
      $output='<div id="'.$zoneID.'" class="adZone">';
        $output.='<div class="textZone">';
            $output.='<div class="titleText">';
                $output.='<span class="titleContent">';
                    $output.=$row['title'];
                $output.='</span>';
            $output.='</div>';
            $output.='<div class="descText">';
                $output.='<span class="descContent">';
                    $output.=$row['description'];
                $output.='</span>';
            $output.='</div>';
            $output.='<div class="link"';
                $output.='<a class="linkContent" href="'.$row['linkTarget'].'">';
                    $output.=$row['linkMessage'];
                $output.='</a>';
            $output.='</div>';
        $output.='</div>';
        $output.='<div class="imageZone">';
            $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"';
        $output.='</div>';
        $output.='</div>';
        
        if(isset($option['style2']) && $option['style2']==1)
        {
            $output='<div id="'.$zoneID.'" class="adZone2">';
                $output.='<div class="titleText2">';
                    $output.='<span class="titleContent2">';
                        $output.=$row['title'];
                    $output.='</span>';
                $output.='</div>';
                $output.='<div class="imageZone2">';
                    $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"';
                $output.='</div>';
                $output.='<div class="descText2">';
                    $output.='<span class="descContent2">';
                        $output.=$row['description'];
                    $output.='</span>';
                $output.='</div>';
                $output.='<div class="link2"';
                    $output.='<a class="linkContent2" href="'.$row['linkTarget'].'">';
                        $output.=$row['linkMessage'];
                    $output.='</a>';
                $output.='</div>';
            $output.='</div>';
        }
        
        return $output;
   }
}
