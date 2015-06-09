<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of server
 *
 * @author SirJared
 */
class server {
    
    public function getFolderContents($folderDir)
    {
        $images = glob($folderDir."*");


    
        return $images;
    }

}
