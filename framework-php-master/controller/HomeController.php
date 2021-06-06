<?php
require(ROOT . 'model/horseModel.php');


function index(){
	render("home/index");	
}
function orders(){
	render('home/orders');
}
function riders(){
	render('home/riders');
}
function horse($id){
	$horse = getHorse($id);
	render('home/horse', $horse);
}
function order($id){
	$order = getOrder($id);
	render('home/order', $order);
}
function rider($id){
	$rider = getRider($id);
	render('home/rider', $rider);
}
function addHorse(){
	render('home/addHorse');
}
function horseAdded(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/addHorse', [$_POST, $error]);
	}
	else{
		if ($_POST['height']<147.5) {
			$_POST['available']='Nee';
		}
		insertHorse($_POST['name'], $_POST['age'], $_POST['race'], $_POST['height'], $_POST['available']);
		header('Location: ' . URL . 'home/index');
	}
}
function editHorse($id){
	$horse = getHorse($id);
	render('home/editHorse', [$horse]);
}
function horseEdited(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/editHorse', [$_POST, $error]);
	}
	else{
		if ($_POST['height']<147.5) {
			$_POST['available']='Nee';
		}
		updateHorse($_POST['name'], $_POST['age'], $_POST['race'], $_POST['height'], $_POST['available'], $_POST['id']);
		header('Location: ' . URL . 'home/horse/' . $_POST['id']);
	}
}
function destroyHorse($id){
	$horse = getHorse($id);
	render('home/deleteHorse', $horse);
}
function horseDestroyed(){
	deleteHorse($_POST['id']);
	deleteOrderHorse($_POST['id']);
	header('Location: ' . URL . 'home/index');
}
function addRider(){
	render('home/addRider');
}
function riderAdded(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/addRider', [$_POST, $error]);
	}
	else{
		insertRider($_POST['name'], $_POST['age'], $_POST['gender'], $_POST['city'], $_POST['street'], $_POST['housenumber'], $_POST['telephone']);
		header('Location: ' . URL . 'home/riders');
	}
}
function editRider($id){
	$rider = getRider($id);
	render('home/editRider', [$rider]);
}
function riderEdited(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/editRider', [$_POST, $error]);
	}
	else{
		updateRider($_POST['name'], $_POST['age'], $_POST['gender'], $_POST['city'], $_POST['street'], $_POST['housenumber'], $_POST['telephone'], $_POST['id']);
		header('Location: ' . URL . 'home/rider/' . $_POST['id']);
	}
}
function destroyRider($id){
	$rider = getRider($id);
	render('home/deleteRider', $rider);
}
function riderDestroyed(){
	deleteRider($_POST['id']);
	deleteOrderRider($_POST['id']);
	header('Location: ' . URL . 'home/riders');
}
function addOrder($id){
	$horse = getHorse($id);
	$horse = ['horse'=>$horse['id']];
	render('home/addOrder', [$horse]);
}
function orderAdded(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/addOrder', [$_POST, $error]);
	}
	else{
		insertOrder($_POST['day'], $_POST['clock'], $_POST['hours'], $_POST['horse'], $_POST['rider']);
		header('Location: ' . URL . 'home/horse/' . $_POST['horse']);
	}
}
function editOrder($id){
	$order = getOrder($id);
	render('home/editOrder', [$order]);
}
function orderEdited(){
	foreach ($_POST as $key => $p) {
		if (empty($p)) {
			$error[$key]='deze waarde is verplicht';
		}
	}
	if (is_array($error)) {
		render('home/editOrder', [$_POST, $error]);
	}
	else{
		updateOrder($_POST['day'], $_POST['clock'], $_POST['hours'], $_POST['horse'], $_POST['rider'], $_POST['id']);
		header('Location: ' . URL . 'home/order/' . $_POST['id']);
	}
}
function destroyOrder($id){
	$order = getOrder($id);
	render('home/deleteOrder', $order);
}
function orderDestroyed(){
	deleteOrder($_POST['id']);
	header('Location: ' . URL . 'home/orders');
}