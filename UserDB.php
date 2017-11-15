<?php
include('Database.php');
include('User.php');
class UserDB {

 public static function add($u) {
        $db = Database::getDB();
        $u_id = $u->getUserID();
        $u_mail = $u->getUserEmail();
        $uf_name = $u->getUserFname();
        $ul_name = $u->getUserLname();
        $u_phn = $u->getUserPhone();
        $u_bith = $u->getUserBirthday();
        $u_gen = $u->getUserGender();
        $u_p = $u->getUserPassword();
        
        $mysqlquery = 'INSERT INTO accounts (id, email, fname, lname, phone, birthday, gender, password) VALUES (:u_id, :u_mail, :uf_name, :ul_name, :u_phn, :u_bith, :u_gen, :u_p)';
        $t = $db->prepare($mysqlquery);
        $t->bindValue(':u_id', $u_id);
        $t->bindValue(':u_mail', $u_mail);
        $t->bindValue(':uf_name', $uf_name);
        $t->bindValue(':ul_name', $ul_name);
        $t->bindValue(':u_phn', $u_phn);
        $t->bindValue(':u_bith', $u_bith);
        $t->bindValue(':u_gen', $u_gen);
        $t->bindValue(':u_p', $u_p);
        $t->execute();
        $t->closeCursor();
    }
 public static function delete($u_id) {
        $db = Database::getDB();
        $mysqlquery = 'DELETE FROM accounts
                  WHERE id = :u_Id';
        $t = $db->prepare($mysqlquery);
        $t->bindValue(':u_Id', $u_id);
        $t->execute();
        $t->closeCursor();
    }
    
 public static function update($u) {
        $db = Database::getDB();
        $u_id = $u->getUserId();
        $u_p = $u->getUserPassword();
        
        $mysqlquery = 'UPDATE accounts SET password= :u_p WHERE id = :u_id';
        $t = $db->prepare($query);
        $t->bindValue(':u_id', $u_id);
        $t->bindValue(':u_pa', $u_p);
        $t->execute();
        $t->closeCursor();
 }
public static function getUsers(){
  
        $db = Database::getDB();
        echo "<table border = '1'>";
        echo "<tr><th>id</th>";
        echo "<th>email</th>";
        echo "<th>fname</th>";
        echo "<th>lname</th>";
        echo "<th>phone</th>";
        echo "<th>birthday</th>";
        echo "<th>gender</th>";
        echo "<th>password</th></tr>";

        $mysqlquery = "select*from accounts";
        $t = $db->prepare($mysqlquery);        
        $t->execute();
        $r = $t->fetchAll();
        $t->closeCursor();
        foreach($r as $r1){
        $u = new User($r1['id'],$r1['email'],$r1['fname'],$r1['lname'],$r1['phone'],$r1['birthday'],$r1['gender'],$r1['password']);
        $u->setUserId($r1['id']);
        $u->setUserEmail($r1['email']);
        $u->setUserFname($r1['fname']);
        $u->setUserLname($r1['lname']);
        $u->setUserPhone($r1['phone']);
        $u->setUserBirthday($r1['birthday']);
        $u->setUserGender($r1['gender']);
        $u->setUserPassword($r1['password']);
        $u->display();
        }
        echo "</table>";
 }
}
UserDB::getUsers();

?>