<?php
class Users extends Dbconnection {
	var $name;
	var $db;
	var $invitee_obj;
	var $msg = '';
	var $tablename = "users";

	// Create Db Connection for this class operations

	function __construct() {
		parent::__construct();
		$this->db = new Dbconnection();
	}

	function ajaxLogin() {

		$username = $this->db->getpost('username');
		$password = md5($this->db->getpost('password'));
		$value = "logged";
		if ($username && $password != '') {
			$sql = "select * from " . $this->tablename . " where (email='" . $username . "') and login_password='" . $password . "'";
			$result = $this->db->GetResultsArray($sql);
			if (count($result) > 0) {
				$_SESSION['username'] = $result[0]['name'];
				$_SESSION['email'] = $result[0]['email'];
				$_SESSION['uid'] = $result[0]['id'];
				$_SESSION['type'] = $result[0]['type'];
				$_SESSION['shop_id'] = $result[0]['shop_id'];
				// $_SESSION['lab_id'] = $result[0]['shop_id'];

				if ($result[0]['branch_id'] != '' && $result[0]['branch_id'] != 0) {
					$_SESSION['branch_id'] = $result[0]['branch_id'];
				} else {
					$_SESSION['branch_id'] = 0;

				}
				$sql1 = "select * from shops where id='" . $result[0]['shop_id'] . "'";
				$result1 = $this->getAsIsArray($sql1);
				$_SESSION['logo'] = $result1['shop_logo'];
				$_SESSION['barcode'] = $result1['barcode'];
				$_SESSION['Common_fee'] = $result1['Common_fee'];
				return ["status" => "success", "username" => $_SESSION['username'], "email" => $_SESSION['email']];
			} else {
				return ["status" => "failed", "msg" => "EmailID or Password Incorrect"];
			}
		}
	}
	public function checkUser($Fuid, $fname, $lname, $gender, $email, $fullname, $fblink, $dp, $referal) {

		$value = "logged";
		$_SESSION["login_error"] = "";
		$sql = "select * from " . $this->tablename . " where email='" . $email . "'";
		$result = $this->db->GetResultsArray($sql);
		count($result);
		if (count($result) > 0):
			$_SESSION['username'] = $result[0]['name'];
			$_SESSION['email'] = $result[0]['email'];
			$_SESSION['uid'] = $result[0]['id'];
			$_SESSION['type'] = $result[0]['business_type'];
			$_SESSION['signature'] = $result[0]['signature'];
			$_SESSION['shop_id'] = $result[0]['shop_id'];
			$_SESSION['branch_id'] = $result[0]['branch_id'];

			return true;

		else:
			return false;
		endif;
	}
	function add_users() {

		// $sql = "select * from users where shop_id='" . $_SESSION['shop_id'] . "' and email='" . $this->db->getpost('email_id') . "' or contact_no='" . $this->db->getpost('mobile_no') . "'";
		// $result = $this->db->GetResultsArray($sql);
		// if (count($result) == 0) {
		$users = array();
		$users['name'] = $this->db->getpost('userName');
		$users['designation'] = $this->db->getpost('designation');
		$users['shop_id'] = $_SESSION['shop_id'];
		$users['email'] = $this->db->getpost('email_id');
		$users['contact_no'] = $this->db->getpost('mobile_no');
		$users['address'] = $this->db->getpost('address');
		$users['refered_by'] = 0;
		$pass = md5($this->db->getpost('password'));
		$users['password'] = md5(1234);
		$users['login_password'] = $pass;
		$users['status'] = 'ACTIVE';
		$users['type'] = $this->db->getpost('usertype');
		$sql1 = "select name from shops where id='" . $_SESSION['shop_id'] . "'";
		$labName = $this->db->getAsIsArray($sql1);
		$users['branch_id'] = $this->db->getpost('branch');
		$users['username'] = $this->db->getpost('login_username');
		$users['created_by'] = 1;
		$userId = $this->db->mysql_insert($this->tablename, $users);
		if (!$userId) {
			return ["status" => "failed", "msg" => "This User Allready Created"];
		}
		// $users['username'] = $this->db->getpost('username');
		// $users['created_by'] = $_SESSION['uid'];
		// $userId = $this->db->mysql_insert($this->tablename, $users);
		$sql = "select * from users " . $this->tablename . " where shop_id=" . $_SESSION['shop_id'] . " and id=" . $userId;
		$result = $this->db->GetResultsArray($sql);
		if (count($result) > 0) {
			return ["status" => "success", "msg" => "User Created Successfully", "name" => $result[0]['name'], "mobile_no" => $result[0]['contact_no'], "email_id" => $result[0]['email'], "type" => $result[0]['type'], 'id' => $result[0]['id']];
		}
		// } else {
		// 	return ["status" => "faild", "msg" => "This User Already Created"];
		// }

	}
	function getUserData() {
		$sql = " select * from " . $this->tablename . " where shop_id=" . $_SESSION['shop_id'] . " and branch_id =" . $_SESSION['branch_id'];
		$result = $this->db->GetResultsArray($sql);
		return $result;
	}

	function getNameList() {
		$sql = "select * from " . $this->tablename . " where type='LA' and shop_id=" . $_SESSION['shop_id'];
		$result = $this->db->GetResultsArray($sql);
		return $result;
	}
	function getNameListCustomer($id) {
		$sql = "select * from " . $this->tablename . " where id='" . $id . "'";
		$result = $this->db->GetAsIsArray($sql);
		return $result;
	}
	function getName($id) {
		$sql = 'Select * from ' . $this->tablename . " where id='" . $id . "' and shop_id=" . $_SESSION['shop_id'];
		$result = $this->db->GetAsIsArray($sql);
		return $result;
	}
	function uploadSignature($fileName, $staffDetail) {
		$upload = array();
		//print_r($_POST);
		$upload['signature'] = $fileName;
		$this->db->mysql_update($this->tablename, $upload, 'id=' . $staffDetail);
		return ['status' => 'done'];
	}
	function adminVerify() {
		$sql = "select * from " . $this->tablename . " where shop_id='" . $_SESSION['shop_id'] . "' and id='" . $this->db->getpost('prepareBy') . "'";
		$result = $this->db->GetResultsArray($sql);
		if ($result[0]['password'] == md5($this->db->getpost('password'))) {
			$id = $result[0]['id'];
			$photo = $result[0]['signature'];
			return ["status" => "success", "id" => $id, "photo" => $photo];
		} else {
			return ["status" => "failed"];
		}
	}
	function getStaffName($id) {
		$sql = "select * from " . $this->tablename . " where id=" . $id;
		$result = $this->db->getAsIsArray($sql);
		return $result;
	}
	function getStaffUpdate() {
		$sql = "select * from " . $this->tablename . " where id=" . $this->db->getpost('id');
		$result = $this->db->GetResultsArray($sql);
		return $result;
	}

	function users_signup() {
		$users = array();
		$users['name'] = $this->db->getpost('name');
		$users['username'] = $this->db->getpost('username');
		$users['contact_no'] = $this->db->getpost('mobile_no');
		$users['email'] = $this->db->getpost('email');
		$users['shop_id'] = 0;
		$users['address'] = $this->db->getpost('area');
		$users['refered_by'] = 0;
		$pass = md5($this->db->getpost('password'));
		$users['password'] = md5(1234);
		$users['login_password'] = $pass;
		$users['type'] = $this->db->getpost('type');
		$users['status'] = 'Active';
		$users['created_at'] = date('Y-m-d h:i:s');
		$insertId = $this->db->mysql_insert($this->tablename, $users);
		return $insertId;
	}

	function get_mailid() {
		$email = $this->db->getpost('email');
		$sql = "select * from " . $this->tablename . " where email='" . $email . "'";
		$result = $this->db->GetResultsArray($sql);
		//return $result;
		count($result);
		if (count($result) > 0):
			//$_SESSION['username'] = $result[0]['name'];
			$_SESSION['email'] = $result[0]['email'];
			return ["status" => "success", "email" => $_SESSION['email'], "msg" => "Email already exists. Try with another"];
		else:
			return ["status" => "failed"];
		endif;

	}
	function get_username() {
		$username = $this->db->getpost('email');
		$sql = "select * from " . $this->tablename . " where email='" . $username . "'";
		$result = $this->db->GetResultsArray($sql);
		//return $result;
		count($result);
		if (count($result) > 0):
			$_SESSION['email'] = $result[0]['email'];
			//$_SESSION['email'] = $result[0]['email'];
			return ["status" => "success", "username" => $_SESSION['email'], "msg" => "EmailID already exists. Try with another EmailID"];
		else:
			return ["status" => "failed"];
		endif;

	}
	function getAdminSignCount() {
		$sql = "select count(id) from " . $this->tablename . " where signature!='' and shop_id=" . $_SESSION['shop_id'];
		$result = $this->db->GetAsIsArray($sql);
		return $result['count(id)'];
	}
	function updateStaff() {
		$id = $this->db->getpost('id');
		$updateStaff = array();
		$updateStaff['name'] = $this->db->getpost('name');
		$updateStaff['contact_no'] = $this->db->getpost('contact_no');
		$updateStaff['email'] = $this->db->getpost('email');
		$updateStaff['type'] = $this->db->getpost('type');
		$this->db->mysql_update($this->tablename, $updateStaff, "id=" . $this->db->getpost('id'));
		$sql = "select * from " . $this->tablename . " where id=" . $id;
		$result = $this->db->GetResultsArray($sql);

		return ["status" => "success", "name" => $result[0]['name'], "contact_no" => $result[0]['contact_no'], "email" => $result[0]['email'], "type" => $result[0]['type'], 'id' => $result[0]['id']];
	}
	public function SetSessionIDSignUP($shop_id, $user_id) {
		$shops = array();
		$shops['shop_id'] = $shop_id;
		$result = $this->db->mysql_update($this->tablename, $shops, "id=" . $user_id);
		if ($result) {
			$sql = "select * from " . $this->tablename . " where id ='" . $user_id . "'";
			$result = $this->db->GetResultsArray($sql);
			if (count($result) > 0):
				$_SESSION['username'] = $result[0]['name'];
				$_SESSION['email'] = $result[0]['email'];
				$_SESSION['uid'] = $result[0]['id'];
				$_SESSION['shop_id'] = $result[0]['shop_id'];
				if ($result[0]['branch_id'] != '' && $result[0]['branch_id'] != 0) {
					$_SESSION['branch_id'] = $result[0]['branch_id'];
				} else {
					$_SESSION['branch_id'] = 0;

				}

				$sql1 = "select * from shops  where id='" . $result[0]['shop_id'] . "'";
				$result1 = $this->getAsIsArray($sql1);
				$_SESSION['barcode'] = $result1['barcode'];
				$_SESSION['expired_date'] = $result1['expired_date'];
				$_SESSION['plan'] = $result1['plan'];
				$_SESSION['type'] = $result[0]['type'];
			endif;
			$config['shop_id'] = $_SESSION['shop_id'];
			$config['created_by'] = $_SESSION['uid'];
			$config['updated_by'] = $_SESSION['uid'];
			$insertShop_config = $this->db->mysql_insert('shop_config', $config);
			return ["status" => "success"];

		} else {
			return ["status" => "failed"];
		}

	}
	public function forgot_password() {

		$sql = "select * from " . $this->tablename . " where contact_no='" . $this->db->getpost('mobile_no') . "'";
		$result = $this->db->GetResultsArray($sql);
		//print_r($result);
		$r = count($result);
		//echo $r;
		if (count($result) > 0) {
			$pass = rand(111111, 999999);
			//return $pass;
			$update = array();
			$update['login_password'] = md5($pass);
			$userId = $this->db->mysql_update($this->tablename, $update, "id='" . $result[0]['id'] . "'");
			if ($userId) {
				$to_number = "91" . $result[0]['contact_no'];
				$obj = new Sms($to_number);
				$obj->sendCusOtpSms($result[0]['id'], $result[0]['shop_id'], $pass);
				return ['status' => 'Success', 'msg' => 'Password  Send to your registerd mobile no'];
			}
		} else {
			return ['status' => 'faild', 'msg' => "Mobile Number Not Match"];
		}
	}
	public function getVerifyPass() {
		$sql = "select login_password from " . $this->tablename . " where id=" . $_SESSION['uid'];
		$result = $this->GetResultsArray($sql);
		return $result;
	}
	public function updateLoginPassword() {
		$password = array();
		$password['login_password'] = md5($this->db->getpost('confirm_password'));
		$result = $this->db->mysql_update($this->tablename, $password, 'id=' . $_SESSION['uid']);
		if ($result) {
			return ["status" => "success"];
		} else {
			return ["status" => "unsuccess"];
		}
	}
	function get_search_email() {
		$username = $this->db->getpost('email');
		$sql = "select * from " . $this->tablename . " where email='" . $username . "'";
		$result = $this->db->GetResultsArray($sql);
		//return $result;
		count($result);
		if (count($result) > 0):
			$_SESSION['email'] = $result[0]['email'];
			//$_SESSION['email'] = $result[0]['email'];
			return ["status" => "success", "username" => $_SESSION['email'], "msg" => "EmailID already exists. Try with another EmailID"];
		else:
			return ["status" => "failed"];
		endif;

	}
	public function getDoctorData() {
		$term = $this->db->getpost('term');

		$sql = "select * from " . $this->tablename . " where type='Doctor' and name LIKE '" . $term . "%'";

		$result = $this->db->GetResultsArray($sql);

		return $result;

	}
	public function getDoctorAuto() {
		$term = $this->db->getpost('term');

		$sql = "select * from " . $this->tablename . " where type='Doctor' and name LIKE '" . $term . "%'";

		$result = $this->db->GetResultsArray($sql);

		return $result;

	}

}
?>