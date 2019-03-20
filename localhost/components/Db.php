<?php
class Db
{
    public  $host = 'localhost';
	public  $dbname = 'mvc_site';
	public  $user = 'root';
	public  $password = '';
	public  $db = '';
	 
	function __construct(){

    $this->connect();  
	}	



    function connect(){

    

        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        


    

       
   

    }
 
}
?>