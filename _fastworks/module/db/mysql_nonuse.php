<?PHP
	/*
	*		db class
	*		project hakusan
	*
	*		- is template of pension homepage
	*		- is developed
	*		-- on 2010. 7. 30
	*		-- by sg, urok
	*
	*		last updated on 2010. 7. 30
    *
	*/

	class MySQL{
		var $dp; 
		var $host; 
		var $user; 
		var $passwd; 
		var $db_name; 
		var $result; 
		var $data; 
		var $err; 
		var $err_no; 

		function MySQL($h='localhost', $u='jinjufood', $p='gkdusdhr', $d='jinjufood'){
            global $ek_config;
			if ($d == 'none') {
                $d = $ek_config['TABLE_SCHEMA'];
            }
			$this->host = $h;
			$this->user = $u;
			$this->passwd = $p;
    	    $this->db_name = $d;

			$this->dp = mysql_connect($this->host, $this->user, $this->passwd); 
			$this->err_no = 100; 
			$this->Error(); 
			mysql_select_db($this->db_name, $this->dp); 
			$this->err_no = 101; 
			$this->Error();
			
			$this->query("set names utf8"); //utf-8 사용
		} 

		function alert($msg = "경고!") { 
			//echo "<script>alert(\"$msg\");</script>"; 
			echo json_encode(array("error"=>$msg));
			die();
		} 

		function error(){ 
			$this->err = mysql_error(); 
			if($this->err) { 
				$this->alert("Error Code : ".$this->err_no." - Error Message : ".$this->err); 
			} 
		} 

		function query($qry,$skip_error=false){
			$this->result = mysql_query($qry, $this->dp); 
			$this->err_no = 102; 
			if (!$skip_error) {
    			$this->error(); 
			}
		} 

		function fetch_array(){ 
			$this->data = mysql_fetch_array($this->result); 
			$this->err_no = 103; 
			$this->error();
		} 

		function fetch_row(){ 
			$result = false;

			if (null != ($this->data=mysql_fetch_row($this->result))) {
				$result = true;
			} else {
				$result = false;
			}

			$this->err_no = 104; 
			$this->error();

			return $result;
		}

		function result($x = 0, $y = 0){ 
			$result = mysql_result($this->result, $x, $x); 
			$this->err_no = 105; 
			$this->error();
		}
	}
?>