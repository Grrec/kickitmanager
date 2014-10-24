<?php
class Match {
	private var $id= null;
	public var $match_type= "";
	public var $match_date= "";
	public var $match_time= "";
	
	
	function __construct($match_id=null){
		if($match_id != null){
			$this->id = $match_id;
			$this->db = $GLOBALS["db"];
			$this->initMatch();
		}
	}
	
	private function initMatch(){
		$sql_get_match = "SELECT * FROM `kickit_match_day` WHERE `id`='".$this->id."' LIMIT 1";
		$get_match = $this->db->sql($sql_get_match);
		$match = mysql_fetch_array($get_match);
		
		$this->match_type = $match["type"];
		$this->match_date = $match["date"];
		$this->match_time = $match["time"];
	}
}
?>