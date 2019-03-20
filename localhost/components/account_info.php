<?php 

class account_info extends Db{


function getAccountInfo(){

    $acc_info = $this->db->prepare("SELECT * FROM account_info");
   // $acc_info->execute();

   // $result = $acc_info->setFetchMode(PDO::FETCH_ASSOC);

   // foreach ($result as $key) {
     //   $result->owner_firstname;

    }
      


}

?>

