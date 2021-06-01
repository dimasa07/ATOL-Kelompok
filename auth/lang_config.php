<?php
require "db_config.php";

// set session bahasa
if(isset($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

// mengambil teks dari database 
$txt_sign_caption = getTxt("sign_caption");
$txt_register_caption = getTxt("register_caption");
$txt_register = getTxt("register");
$txt_sign = getTxt("sign");
$txt_have_account = getTxt("have_account?");
$txt_fullname = getTxt("fullname");
$txt_confirm = getTxt("confirm");
$txt_lang = getTxt("lang");
$txt_success_register = getTxt("success_register");
$txt_alert_failed_login = getTxt("alert_failed_login"); 
$txt_alert_empty = getTxt("alert_empty"); 
$txt_logout = getTxt("logout"); 
$txt_account = getTxt("account");
$txt_order_history = getTxt("order_history"); 
$txt_train_list = getTxt("train_list");
$txt_order_ticket = getTxt("order_ticket");   
$txt_train_list = getTxt("train_list");
$txt_username_registered = getTxt("username_registered");
$txt_incorrect_password_confirm = getTxt("incorrect_password_confirm");
$txt_dashboard = getTxt("dashboard");
$txt_train_scheduling = getTxt("train_scheduling");
$txt_transaction_list = getTxt("transaction_list");
$txt_login_admin = getTxt("login_admin");
$txt_login_user = getTxt("login_user");
$txt_history_list = getTxt("history_list");
$txt_success_delete_history = getTxt("success_delete_history");
$txt_booking_kode = getTxt("booking_kode");
$txt_buyer_name = getTxt("buyer_name");
$txt_date = getTxt("date");
$txt_price = getTxt("price");
$txt_no_data = getTxt("no_data");
$txt_history_detail = getTxt("history_detail");
$txt_train_name = getTxt("train_name");
$txt_from = getTxt("from");
$txt_to = getTxt("to");
$txt_back = getTxt("back");
$txt_trains_number = getTxt("trains_number");
$txt_train = getTxt("trains");
$txt_schedules_number = getTxt("schedules_number");
$txt_schedules = getTxt("schedules");
$txt_buyers_number = getTxt("buyers_number");
$txt_buyers = getTxt("buyers");
$txt_tickets = getTxt("tickets");
$txt_ticket_list = getTxt("ticket_list");
$txt_success_order = getTxt("success_order");
$txt_schedule_list = getTxt("schedule_list");
$txt_add = getTxt("add");
$txt_success_delete_schedule = getTxt("success_delete_schedule");
$txt_success_add_schedule = getTxt("success_add_schedule");
$txt_add_schedule = getTxt("add_schedule");
$txt_alert_empty_form = getTxt("alert_empty_form");
$txt_select_train = getTxt("select_train");
$txt_departure_time = getTxt("departure_time");
$txt_arrives_time = getTxt("arrives_time");
$txt_save = getTxt("save");
$txt_success_delete = getTxt("success_delete");
$txt_success_add_train = getTxt("success_add_train");
$txt_action = getTxt("action");
$txt_duration = getTxt("duration");
$txt_buy = getTxt("buy");
$txt_sure_delete = getTxt("sure_delete");
$txt_alert_registered_no_train = getTxt("alert_registered_no_train");
$txt_alert_registered_name_train = getTxt("alert_registered_name_train");
$txt_alert_number_character = getTxt("alert_number_character");
$txt_transactions = getTxt("transactions");
$txt_hour = getTxt("hour");
$txt_about = getTxt("about");
$txt_sure_order = getTxt("sure_order");
$txt_delete = getTxt("delete");
$txt_identity = getTxt("identity");
$txt_address = getTxt("address");
$txt_phone_number = getTxt("phone_number");
$txt_passenger_type = getTxt("passenger_type");
$txt_passenger_hint = getTxt("passenger_hint");
$txt_cancel = getTxt("cancel");
$txt_purchase_form = getTxt("purchase_form");

function getTxt($nama_teks){
	global $mysqli; //membuat variable mysqli menjadi global
	$q = mysqli_query($mysqli,"SELECT * FROM bahasa WHERE text='$nama_teks'");
	
	$row = mysqli_num_rows($q);
	if($row > 0){
		$res = mysqli_fetch_assoc($q);
		$teks = $res[$_SESSION['lang']];
	}else{
		$teks = "";
	}
	return $teks;
}
?>