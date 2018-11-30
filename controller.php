<?php
require_once('model.php');

// Select Country Controller
if(isset($_GET['country'])){
$data = $obj->select_country('country');
	echo '<option value="0">Select Country</option>';
foreach ($data as $row) {
	echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
}
}

// Select State Controller
if (isset($_POST['state'])) {
	$where = ['country_id'=>$_POST['code']];
	$data = $obj->select_state('state',$where);
	echo '<option value="">Select State</option>';
	foreach ($data as $row) {
		echo '<option value="'.$row['state_name'].'">'.$row['state_name'].'</option>';
	}
}