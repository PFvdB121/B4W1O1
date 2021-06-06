<?php

function getAllhorses() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horses ORDER BY name";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getAllRiders(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM riders ORDER BY name";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getAllOrders(){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM orders ORDER BY day, clock';
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getHorse($id){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM horses WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db=null;

	return $query->fetch();
}
function getRider($id){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM riders WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db=null;

	return $query->fetch();
}
function getOrder($id){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM orders WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db=null;

	return $query->fetch();
}
function insertHorse($name, $age, $race, $height, $available){
	$db = openDatabaseConnection();
	$sql = "INSERT INTO horses (name, age, race, height, available) VALUES (:name, :age, :race, :height, :available)";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':age', $age);
	$query->bindParam(':race', $race);
	$query->bindParam(':height', $height);
	$query->bindParam(':available', $available);
	$query->execute();

	$db = null;
}
function updateHorse($name, $age, $race, $height, $available, $id){
	$db = openDatabaseConnection();
	$sql = 'UPDATE horses SET name=:name, age=:age, race=:race, height=:height, available=:available WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':age', $age);
	$query->bindParam(':race', $race);
	$query->bindParam(':height', $height);
	$query->bindParam(':available', $available);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function deleteHorse($id){
	$db = openDatabaseConnection();
	$sql = 'DELETE FROM horses WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function insertRider($name, $age, $gender, $city, $street, $housenumber, $telephone){
	$db = openDatabaseConnection();
	$sql = 'INSERT INTO riders (name, age, gender, city, street, housenumber, telephone) VALUES (:name, :age, :gender, :city, :street, :housenumber, :telephone)';
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':age', $age);
	$query->bindParam(':gender', $gender);
	$query->bindParam(':city', $city);
	$query->bindParam(':street', $street);
	$query->bindParam(':housenumber', $housenumber);
	$query->bindParam(':telephone', $telephone);
	$query->execute();

	$db = null;
}
function updateRider($name, $age, $gender, $city, $street, $housenumber, $telephone, $id){
	$db = openDatabaseConnection();
	$sql = 'UPDATE riders SET name=:name, age=:age, gender=:gender, city=:city, street=:street, housenumber=:housenumber, telephone=:telephone WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':age', $age);
	$query->bindParam(':gender', $gender);
	$query->bindParam(':city', $city);
	$query->bindParam(':street', $street);
	$query->bindParam(':housenumber', $housenumber);
	$query->bindParam(':telephone', $telephone);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function deleteRider($id){
	$db = openDatabaseConnection();
	$sql = 'DELETE FROM riders WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function insertOrder($day, $clock, $hours, $horse, $rider){
	$db = openDatabaseConnection();
	$sql = 'INSERT INTO orders (day, clock, hours, horse, rider) VALUES (:day, :clock, :hours, :horse, :rider)';
	$query = $db->prepare($sql);
	$query->bindParam(':day', $day);
	$query->bindParam(':clock', $clock);
	$query->bindParam(':hours', $hours);
	$query->bindParam(':horse', $horse);
	$query->bindParam(':rider', $rider);
	$query->execute();

	$db = null;
}
function updateOrder($day, $clock, $hours, $horse, $rider, $id){
	$db = openDatabaseConnection();
	$sql = 'UPDATE orders SET day=:day, clock=:clock, hours=:hours, horse=:horse, rider=:rider WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':day', $day);
	$query->bindParam(':clock', $clock);
	$query->bindParam(':hours', $hours);
	$query->bindParam(':horse', $horse);
	$query->bindParam(':rider', $rider);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function deleteOrder($id){
	$db=openDatabaseConnection();
	$sql = 'DELETE FROM orders WHERE id=:id';
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;
}
function addHours($clock, $hours){
	$db = openDatabaseConnection();
	$time = "SELECT ADDTIME('" . $clock . "', '" . $hours . ":00:00')";
	$query = $db->prepare($time);
	$query->execute();

	$db = null;

	return $query->fetch();
}
function ordersHorse($horse){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM orders WHERE horse=:horse';
	$query = $db->prepare($sql);
	$query->bindParam(':horse', $horse);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function ordersRider($rider){
	$db = openDatabaseConnection();
	$sql = 'SELECT * FROM orders WHERE rider=:rider';
	$query = $db->prepare($sql);
	$query->bindParam(':rider', $rider);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function deleteOrderHorse($horse){
	$db = openDatabaseConnection();
	$sql = 'DELETE FROM orders WHERE horse=:horse';
	$query = $db->prepare($sql);
	$query->bindParam(':horse', $horse);
	$query->execute();

	$db = null;
}
function deleteOrderRider($rider){
	$db = openDatabaseConnection();
	$sql = 'DELETE FROM orders WHERE rider=:rider';
	$query = $db->prepare($sql);
	$query->bindParam(':rider', $rider);
	$query->execute();

	$db = null;
}