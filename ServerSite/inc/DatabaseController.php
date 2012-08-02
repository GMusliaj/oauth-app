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
        print_r($ini_array);
        
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
    
}

?>
