<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DatabaseController
 *
 * @author Sonx
 */
class DatabaseController {
    
    private $dbname;
    private $dbhost;
    private $dbuser;
    private $dbpass;
    
    private $db;

    
    
    public function DatabaseController()
    {
        $ini_array = parse_ini_file("dbconfig.ini");
        
        $this->dbname = $ini_array["dbname"];
        $this->dbhost = $ini_array["dbhost"];
        $this->dbuser = $ini_array["dbuser"];
        $this->dbpass = $ini_array["dbpass"];
        
        $this->db = new mysqli();
        
        $this->db->connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);           
    }
    
    public function userExists($username,$password)
    {
        $query = "SELECT * FROM  `user` WHERE username='$username' AND password='$password'";
        $result = $this->db->query($query);

        if ($result->num_rows == 1)
            return 1;
        else 
            return 0;   
    }
    
    public function getDataforUser($username)
    {
       ; 
    }
    
    public function imageExists($imagename)
    {
       $query = "SELECT * FROM  `image` WHERE image_path='$imagename'";
        $result = $this->db->query($query);

        if ($result->num_rows == 1)
            return 1;
        else 
            return 0;  
    }
    
    public function registerImage($imagename,$album,$owner)
    {
        $query = "INSERT INTO image VALUES (null,'$imagename','$owner','$album')";
        $result = $this->db->query($query);
    }
    
    
    
}

?>
