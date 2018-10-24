<?php
/*** 获取服务器端IP地址 
 * @return string 
 */
function get_server_ip() {     
	if (isset($_SERVER)) {         
		if($_SERVER['SERVER_ADDR']) {            
			$server_ip = $_SERVER['SERVER_ADDR'];         
		} 
		else {            
 			$server_ip = $_SERVER['LOCAL_ADDR'];         
		}    
 	} 
	else {        
 		$server_ip = getenv('SERVER_ADDR');   
 	}    
 	return $server_ip; 
}
echo "This Server IP is: ".get_server_ip();
echo "Hello Branch v0.4 test";
?>
