<?php
class User{

private $u_id;
private $u_mail;
private $uf_name;
private $ul_name;
private $u_phn;
private $u_bith;
private $u_gen;
private $u_p;

public function _construct($i,$e,$f,$l,$p,$b,$g,$p) {
  $this->u_id = $i;
  $this->u_mail = $e;
  $this->uf_name = $f;
  $this->ul_name = $l;
  $this->u_phn = $p;
  $this->u_bith = $b;
  $this->u_gen = $g;
  $this->u_p = $p;
} 
public function getUserId(){
  return $this->u_id;
  }
  
public function setUserId($i){
    $this->u_id = $i;
}

public function getUserEmail(){
  return $this->u_mail;
  }
  
public function setUserEmail($e){
    $this->u_mail = $e;
}

public function getUserFname(){
  return $this->uf_name;
  }
  
public function setUserFname($f){
    $this->uf_name = $f;
}

public function getUserLname(){
  return $this->ul_name;
  }
  
public function setUserLname($l){
    $this->ul_name = $l;
}

public function getUserPhone(){
  return $this->u_phn;
  }
  
public function setUserPhone($p){
    $this->u_phn = $p;
}

public function getUserBirthday(){
  return $this->u_bith;
  }
  
public function setUserBirthday($b){
    $this->u_bith = $b;
}

public function getUserGender(){
  return $this->u_gen;
  } 

public function setUserGender($g){
    $this->u_gen = $g;
}

public function getUserPassword(){
  return $this->u_p;
  } 

public function setUserPassword($p){
    $this->u_p = $p;
}

public function display(){

echo "<tr><td>".self::getUserId()."</td>";
echo "<td>".self::getUserEmail()."</td>";
echo "<td>".self::getUserFname()."</td>";
echo "<td>".self::getUserLname()."</td>";
echo "<td>".self::getUserPhone()."</td>";
echo "<td>".self::getUserBirthday()."</td>";
echo "<td>".self::getUserGender()."</td>";
echo "<td>".self::getUserPassword()."</td></tr>";
  }
}
?>