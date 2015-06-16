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
include 'server.php';

class Display {
    
    
    
   public function displayNav($navItems)
   {
       $output="<div id='nav'>";
       
       for($i = 0;$i < count($navItems);$i++)
       {
           
           
           if(isset($navItems[$i][2])&&$navItems[$i][2]=1 && isset($navItems[$i][3]))
           {
               $output.="<div class='navButton' onClick='".$navItems[$i][3]."'>".$navItems[$i][0]."</div>";
           }
           else{
               $output.="<a class='navLink' href='".$navItems[$i][1]."'><div class='navDiv'>".$navItems[$i][0]."</div></a>";
           }
       }
       
       $output.="</div>";
       
       return $output;
   }
   
   public function displayMenu($menuItems)
   {
       $output="<div id='adZoneMenu'>";
       for($i = 0; $i <count($menuItems); $i++)
       {
           $output.="<div id='".$menuItems[$i][2]."' onclick='".$menuItems[$i][1]."' class='menuItem'>";
                $output.="<span class='menuItemText'>".$menuItems[$i][0]."</span>";
           $output.="</div>";
           if(isset($menuItems[$i][3]))
           {
               $output.="<div id='in".$menuItems[$i][2]."'>";
                    for($j=0; $j < 6;$j++)
                    {
                        $output.="<div id='".$menuItems[$i][3][$j]['ad_Name']."' onclick='showInnEdit(this.id)'>";
                            $output.=$menuItems[$i][3][$j]['ad_Name'];
                        $output.="</div>";
                    }
                    
                    $output.='<div id="main_pic_'.$menuItems[$i][3][6]['zone'].'">';
                    $output.=$menuItems[$i][3][6]['zone'].'_Main_Pic';
                    $output.='</div>';
                    $output.='<div id="btm_lft'.$menuItems[$i][3][7]['zone'].'">';
                    $output.=$menuItems[$i][3][7]['zone'].'_btm_lft';
                    $output.='</div>';
                    $output.='<div id="btm_rght'.$menuItems[$i][3][8]['zone'].'">';
                    $output.=$menuItems[$i][3][8]['zone'].'_btm_rght';
                    $output.='</div>'; 
               $output.="</div>";
           }
       }
       $output.="</div>";
       
       return $output;
   }
   
   public function fillContentMessageZones($zoneID)
   {
      $db = new Database('Sals_Dollar','localhost','root','root','mysql');
      
      $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID =:zoneID';
      $result = $db->queryDb($sql,$zoneID,':zoneID');
      
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
       
      $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID =:zoneID';
      $result = $db->queryDb($sql,$zoneID,':zoneID');
      
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
      
      if(!isset($option['style']))
      {
       $output='<div id="'.$zoneID.'" class="advertZone">';
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
            $output.='<div class="link">';
                $output.='<a class="linkContent" href="'.$row['linkTarget'].'">';
                    $output.=$row['linkMessage'];
                $output.='</a>';
            $output.='</div>';
        $output.='</div>';
        $output.='<div class="imageZone">';
            $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"/>';
        $output.='</div>';
      $output.='</div>';
      }
        else if(isset($option['style']) && $option['style']==1)
        {
            $output='<div id="'.$zoneID.'" class="advertZone2">';
                $output.='<div class="titleText2">';
                    $output.='<span class="titleContent2">';
                        $output.=$row['title'];
                    $output.='</span>';
                $output.='</div>';
                $output.='<div class="imageZone2">';
                    $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"/>';
                $output.='</div>';
                $output.='<div class="descText2">';
                    $output.='<span class="descContent2">';
                        $output.=$row['description'];
                    $output.='</span>';
                $output.='</div>';
                $output.='<div class="link2">';
                    $output.='<a class="linkContent2" href="'.$row['linkTarget'].'">';
                        $output.=$row['linkMessage'];
                    $output.='</a>';
                $output.='</div>';
            $output.='</div>';
        }
        else if(isset($option['style']) && $option['style']==2)
        {
            $output='<div id="'.$zoneID.'" class="advertZone3">';
        $output.='<div class="textZone3">';
            $output.='<div class="textDiv3">';
                $output.='<div class="titleText3">';
                    $output.='<span class="titleContent3">';
                        $output.=$row['title'];
                    $output.='</span>';
                $output.='</div>';
                $output.='<div class="descText3">';
                    $output.='<span class="descContent3">';
                        $output.=$row['description'];
                    $output.='</span>';
                $output.='</div>';
            $output.='</div>';   
            $output.='<div class="imageZone3">';
                 $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"/>';
            $output.='</div>';              
        $output.='</div>';
        $output.='<div class="link3">';
            $output.='<a class="linkContent3" href="'.$row['linkTarget'].'">';
                $output.=$row['linkMessage'];
            $output.='</a>';
        $output.='</div>';    
      $output.='</div>';
        }
        else{
            $output = 'ERROR';
        }
        
        return $output;
   }
   
   public function fillBtmSliderZones($zoneID, $options=null)
   {
       $db = new Database('Sals_Dollar','localhost','root','root','mysql');
       
       $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID =:zoneID';
       $result = $db->queryDb($sql,$zoneID,':zoneID');
       
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
       
       $output='<div id="'.$zoneID.'Div">';
            $output.='<div class="sliderImgDiv">';
                $output.='<img alt="'.$zoneID.' image" src="'.$row['imgSrc'].'"/>';
            $output.='</div>';
            $output.='<div class="sliderTitleDiv">';
                $output.='<a class="linkContent3" href="'.$row['linkTarget'].'">';
                    $output.=$row['linkMessage'];
                $output.='</a>';
            $output.='</div>';
            
       $output.='</div>';
       
       return $output;
   }
   
   public function getAdZoneInfo($zoneID)
   {
       $db = new Database('Sals_Dollar','localhost','root','root','mysql');
       
       $sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID =:zoneID';
       $result = $db->queryDb($sql,$zoneID,':zoneID');
       
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
      
      return $row;
   }
   
   public function displayImgFrmSrvr()
   {
       $svr = new server();
       
       $res = $svr->getFolderContents('./img/');
       
       $output ='<div id="imgGalDiv">';
       
       for($i =0; $i < count($res);$i++)
       {
           $output.="<div class='galImgHolder' onClick='setNewPicture(\"pic".$i."\")'>";
                $output.='<img id="pic'.$i.'" src="'.$res[$i].'" alt="pic'.$i.'">';
           $output.='</div>';
       }
       
       $output.='</div>';
       
       return $output;
   }
   
   public function getInnerPageInfo($id)
   {
       $db = new Database('Sals_Dollar','localhost','root','root','mysql');
       
       $sql='SELECT * FROM Inner_Page WHERE Inner_Page.page_ID =:pageID';
       $result = $db->queryDb($sql,$id,':pageID');
       
       if(is_string($result))
      {
          return $result;
      }
      else if($result->rowCount() > 1)
      {
          return 'ERROR TO MANY ROWS RETURNED FROM '.$id;
      }
      else if($result->rowCount() <= 0)
      {
          return 'ERROR NO ROWS RETURNED FROM '.$id;
      }
      
      $page = $result->fetch();
      
      $sideTopAd = $this->getInnerAdInfo($page['Side_Top_Ad_Name']);
      if(is_string($sideTopAd))
      {
          return $sideTopAd;
      }
      
      $sideBtmAd = $this->getInnerAdInfo($page['Side_Btm_Ad_Name']);
      if(is_string($sideBtmAd))
      {
          return $sideBtmAd;
      }
      
      $slotOne = $this->getInnerAdInfo($page['Slot_1_Ad_Name']);
      if(is_string($slotOne))
      {
          return $slotOne;
      }
      
      $slotTwo = $this->getInnerAdInfo($page['Slot_2_Ad_Name']);
      if(is_string($slotTwo))
      {
          return $slotTwo;
      }
      
      $slotThree = $this->getInnerAdInfo($page['Slot_3_Ad_Name']);
      if(is_string($slotThree))
      {
          return $slotThree;
      }
      
      $slotFour = $this->getInnerAdInfo($page['Slot_4_Ad_Name']);
      if(is_string($slotFour))
      {
          return $slotFour;
      }
      
      $retAry= array(
          'title'=>$page['title'],
          'page_ID'=>$page['page_ID'],
          'mainPic'=>$page['mainPic'],
          'side_top_ad'=>$sideTopAd,
          'side_btm_ad'=>$sideBtmAd,
          'slotOne'=>$slotOne,
          'slotTwo'=>$slotTwo,
          'slotThree'=>$slotThree,
          'slotFour'=>$slotFour,
          'bottom_left_pic'=>$page['Bottom_Left_Ad_Name'],
          'bottom_right_pic'=>$page['Bottom_Right_Ad_Name'],
          'desc'=>$page['description']);
      
      return $retAry;
       
   }
   
   private function getInnerAdInfo($adName)
   {
       $db = new Database('Sals_Dollar','localhost','root','root','mysql');
       
       $sql='SELECT * FROM Inner_Page_Ad WHERE Inner_Page_Ad.ad_Name =:adName';
       $result = $db->queryDb($sql,$adName,':adName');
       
       if(is_string($result))
      {
          return $result;
      }
      else if($result->rowCount() > 1)
      {
          return 'ERROR TO MANY ROWS RETURNED FROM '.$adName;
      }
      else if($result->rowCount() <= 0)
      {
          return 'ERROR NO ROWS RETURNED FROM'.$adName;
      }
      
      $ad = $result->fetch();
      
      return $ad;
       
   }
   
}
