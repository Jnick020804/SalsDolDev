<?php
ob_start();
session_start();
include 'Database.php';

$db = new Database('Sals_Dollar','localhost','root','root','mysql');
$userName = strtolower($_POST['usr']);
$pswd = $_POST['pswd'];
$attempt=1;
$loginDest='';


try{
                
                $sql='SELECT * FROM USER WHERE USER.UsrName ="'.$userName.'";';
                $result=$db->queryDb($sql);
                
                
               
                if($result->rowCount() == 0)
                {
                    
                    header('Location: admin_Login.html?attempt='.$attempt);
                    
                    
                }
                
                While($row = $result->fetch())
                {
                    if($row['Password']==$pswd)
                    {
                        session_regenerate_id();
                        $_SESSION['sess_user_id'] = $row['UsrID'];
                        $_SESSION['sess_username'] = $row['UsrName'];
                        session_write_close();
                        header('Location: '.$loginDest);
                        
                    }
                    else
                    {
                        header('Location: admin_Login.html?attempt='.$attempt);
                        
                    }
                }
                
            } catch (Exception $ex) {
                
                echo($e->getMessage());

            }

