<?php
class User {
	private var $id		= null;
	public var $name	= "";
	public var $email	= "";
	public var $team_id	= null;
	public var $rbl_id	= null;
	
	private var $permissions	= array();
	public var $settings		= array();
	
	/*
	macht es sinn alle user gleich am anfang zu laden oder sollten nur spezifische user je nach aktion ausgesucht werden zum initialisieren?
	*/
	$cached_users = array();	
	public static function loadUsers(){
		$db = $GLOBALS["db"];
		global $cached_users;
		$sql_get_all_users = "SELECT * FROM `kickit_users`";
		$get_all_users = $db->sql($sql_get_all_users);
		while($all_users = mysql_fetch_array($get_all_users)){
			array_push($cached_users, new User($all_users["id"]));
		}
	}
	
	function __construct($user_id=null){
		if($user_id != null){
			$this->id = $user_id;
			$this->db = $GLOBALS["db"];
			$this->initUser();
			$this->initPermissions();
			$this->initSettings();
		}
	}
	
	private function initUser(){		
		$sql_get_user = "SELECT * FROM `kickit_users` WHERE `id` = '".$this->id."' LIMIT 1";
		$get_user = $this->db->sql($sql_get_user);
		$user = mysql_fetch_array($get_user);
		
		$this->name		= $user["name"];
		$this->email	= $user["email"];
		$this->team_id	= $user["team_id"];
		$this->rbl_id	= $user["rbl_id"];
	}
	
	private function initPermissions(){
		$sql_get_permissions = "
			SELECT up.*, p.`name` permission FROM `kickit_user_permissions` up
			JOIN `kickit_permissions` p ON up.`permission_id` = p.`id`
			WHERE up.`user_id` = '".$this->id."'
		";
		$get_permissions = $this->db->sql($sql_get_permissions);
		while($permissions = mysql_fetch_array($get_permissions)){
			array_push($this->permissions, $permission["permission"]);
		}
	}
	
	private function initSettings(){
		$sql_get_settings = "
			SELECT us.*, s.`setting_name` setting FROM `kickit_user_settings` us
			JOIN `kickit_settings` s ON us.`setting_id` = s.`id`
			WHERE us.`user_id` = '".$this->id."'
		";
		$get_settings = $this->db->sql($sql_get_settings);
		while($settings = mysql_fetch_array($get_settings)){
			array_push($this->settings, $settings["setting"]);
		}
	}
	
	public function hasPermission($permission=""){
		$has_permission = false;
		if($permission != ""){
			if(in_array($permission, $this->permissions)){
				$has_permission = true;
			}
		}
		return $has_permission;
	}
}
?>