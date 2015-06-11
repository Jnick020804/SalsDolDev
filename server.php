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
    
    public function upload($ToDir,$file)
    {
        $target=$ToDir.basename($file['name']);
        $uploadOK=1;
        $type=pathinfo($target,PATHINFO_EXTENSION);
        
        if(file_exists($target))
        {
            return 2;
            
        }
        else if(move_uploaded_file($file['tmp_name'],$target))
        {  
            return 0;
        }
        else
        {
            return 1;
        }
    }

}
