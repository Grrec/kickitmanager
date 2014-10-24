<?php
class Team {
	private var $id= null;
	public var $name= "";
	public var $info= "";
	public var $founding_date= "";
	
	$cached_teams = array();
	public static loadTeams(){
		$db = $GLOBALS["db"];
		global $cached_teams;
		$sql_get_all_teams = "SELECT * FROM `kickit_teams`";
		$get_all_teams = $db->sql($sql_get_all_teams);
		while($all_teams = mysql_fetch_array($get_all_teams)){
			array_push($cached_teams, new Team($all_teams["id"]));
		}
	}
	
	function __construct($team_id=null){
		if($team_id != null){
			$this->id = $team_id;
			$this->db = $GLOBALS["db"];
			$this->initTeam();
		}
	}
	
	private function initTeam(){
		$sql_get_team = "SELECT * FROM `kickit_teams` WHERE `id`='".$this->id."' LIMIT 1";
		$get_team = $this->db->sql($sql_get_team);
		$team = mysql_fetch_array($get_team);
		
		$this->name = $team["name"];
		$this->info = $team["info"];
		$this->founding_date = date("d.m.Y", strtotime($team["founding_date"]));
	}
}
?>