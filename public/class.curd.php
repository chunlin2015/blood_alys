<?php

class crud
{
 private $db;
 
 function __construct($DB_con)
 {
  $this->db = $DB_con;
 }

public function create($S_CAT,$CAT1,$CAT2) {
 try
  {
   $stmt = $this->db->prepare("INSERT INTO statements(S_CAT,CAT1,CAT2) VALUES(:S_CAT, :CAT1, :CAT2)");
   $stmt->bindparam(":S_CAT",$S_CAT);
   $stmt->bindparam(":CAT1",$CAT1);
   $stmt->bindparam(":CAT2",$CAT2);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
}
public function getID($SID){
  $stmt = $this->db->prepare("SELECT * FROM statements WHERE SID=:SID");
  $stmt->execute(array(":SID"=>$SID));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }

public function update($SID,$S_CAT,$CAT1,$CAT2)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE statements SET S_CAT=:S_CAT, CAT1=:CAT1,  CAT2=:CAT2, WHERE SID=:SID ");
   $stmt->bindparam(":S_CAT",$S_CAT);
   $stmt->bindparam(":CAT1",$CAT1);
   $stmt->bindparam(":CAT2",$CAT2);
   $stmt->bindparam(":SID",$SID);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
public function delete($SID)
 {
  $stmt = $this->db->prepare("DELETE FROM statements WHERE SID=:SID");
  $stmt->bindparam(":SID",$SID);
  $stmt->execute();
  return true;
 }
 
  
 
}