<?php

class Database {
   
    private $dbName;
    private $user;
    private $pass;
    private $host;
    private $driver;
    private $connString;
    function __construct($dbName,$host,$user,$pass,$driver) {
        $this->setDbName($dbName);
        $this->setHost($host);
        $this->setUser($user);
        $this->setPass($pass);
        $this->setDriver($driver);
        $this->setConnString();
        
    }
    
    /*** Getters and Setters *****************************************************/
    
    private function setDbName($name){
        $this->dbName = $name;
    }
    
    private function setUser($user){
        $this->user = $user;
    }
    private function setPass($pass){
        $this->pass = $pass;
    }
    
    private function setHost($host){
        $this->host = $host;
    }
    
    private function setDriver($driver){
        $this->driver = $driver;
    }
    
    private function setConnString()
    {
        $this->connString = $this->driver.':host='.$this->host.';dbname='.$this->dbName;
    }
    
    /******** create db object*******************/
    
    public function queryDb($sql)
    {
       try{
           $db = new PDO($this->connString,$this->user,$this->pass);
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $result = $db->query($sql);
           
           
      
        
        }
        catch (Exception $ex)
        {
           return $ex->getMessage();
     
        }
        
        return $result;
        
    }
    
    public function execDb($sql)
    {
        try{
           $db = new PDO($this->connString,$this->user,$this->pass);
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $res = $db->exec($sql);
           
      
        
        }
        catch (Exception $ex)
        {
           return $ex->getMessage();
     
        }
        
        return $res;
    }
}
