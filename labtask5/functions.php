<?php
require_once 'db_connect.php';
function showInfo($id){
 $conn = db_conn();
 $selectQuery = "SELECT * FROM `products` where id = ?";
 try {
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([$id]);
 } catch (PDOException $e) {
 echo $e->getMessage();
 }
 $row = $stmt->fetch(PDO::FETCH_ASSOC);
 return $row;
}
function addAccount($data){
 $conn = db_conn();
 $selectQuery = "INSERT into products (fname, lname, email, password, phone)
VALUES (:fname, :lname, :email, :password, :phone)";
 try{
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([
 ':fname' => $data['fname'],
 ':lname' => $data['lname'],
 ':email' => $data['email'],
 ':password' => $data['password'],
 ':phone' => $data['phone']
 ]);
 }catch(PDOException $e){
 echo $e->getMessage();
 }

 $conn = null;
 return true; 
}
function updateAccount($id, $data){
 $conn = db_conn();
 $selectQuery = "UPDATE products set fname = ?, lname = ?, email = ?, password = ?, phone = ? where id = ?";
 try{
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([
 $data['fname'], $data['lname'], $data['email'], $data['password'], $data['phone'], $id]);
 }catch(PDOException $e){
 echo $e->getMessage();
 }
 $conn = null;
 return true;
}
function checkAccount($data){
 $conn = db_conn();
 $selectQuery = "SELECT count(*) FROM `products` where email = ? and password = ?";
 try{
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([
 $data['email'], $data['password']]);
 }catch(PDOException $e){
 echo $e->getMessage();
 }
 $rows = $stmt->fetchColumn();
 $conn = null;
 if($rows == 1)
 {
 return true;
 }
 else
 return false;
}
function checkid($data){
 $conn = db_conn();
 $selectQuery = "SELECT id FROM `products` where email = ? and password = ?";
 try{
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([
 $data['email'], $data['password']]);
 }catch(PDOException $e){
 echo $e->getMessage(); 
 }
 $row = $stmt->fetch(PDO::FETCH_ASSOC);
 $conn = null;
 return $row;
}
function deleteAccount($id){
 $conn = db_conn();
 $selectQuery = "DELETE FROM `products` WHERE `ID` = ?";
 try{
 $stmt = $conn->prepare($selectQuery);
 $stmt->execute([$id]);
 }catch(PDOException $e){
 echo $e->getMessage();
 }
 $conn = null;
 return true;
} 
