<h1>Hello</h1>

<?php
	$hub_verify_token = null;
	$verify_token= "my_verify_token";
	if (isset($_REQUEST['hub_challenge'])){
		$challenge = $_REQUEST['hub_challenge'];
		$hub_verify_token = $_REQUEST['hub_verify_token'];
	} 
	if($hub_verify_token === $verify_token) {
	    
// 	    $access_token = "EAAHUJgisGQ8BAE6NK8c0yWUtsKskXlZCCspCbKFSvMNxon7xdkJmx24VZCRh8HErY2uKjUydDzmxP44Wfz6KvNZAVvZCZB8wdJajWBcgxgPp3amtctsRGBGrZANGZAK2Mu0GT1sKGK8tdhAeCZBm5yrZA6mgbDozPZCsOciPvHSi04BHQgonpbrkPpcarjZBeMmtT0ZD";
// 		$feedData = file_get_contents('php://input');
// 		$input = json_decode($feedData);
		
// 		$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
// 		$message = $input['entry'][0]['messaging'][0]['message']['text'];

// 		$obj = json_decode($input);
// 		$fileName = "messages.txt";

// 		if($sender == ""){

// 		}else{
// 			$f = fopen("$fileName","a");
// 			fwrite($f,"$obj\r\n");
// 			fclose($f);
// 		}

// 		if(preg_match('[time|current time|now]',strtolower($message))){
// 			if($input != ''){
// 				$message_to_reply = $result;
// 			}
// 		}else{
// 			$list = array(
// 				"Hi"=>"Mingalar par naw!",
// 				"Hello"=>"ဘာများကူညီရမလဲ",
// 				"Good"=>"ကောင်းပါ့ဗျ"
// 			);

// 			$obj = $list["$message"];

// 			$url = "https://graph.facebook.com/v5.0/me/messages?access_token=$access_token";

// 			$ch = curl_init($url);

// 			$jsonData = '{
// 				"recipient":{
// 					"id":"'.$sender.'"
// 				},
// 				"message":{
// 					"text":"'.$obj.'"
// 				}
// 			}';

// 			$jsonDataEncoded = $jsonData;

// 			curl_setopt($ch, CURLOPT_POST, 1);
// 			curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonDataEncoded);
// 			curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));

// 			if(!empty($input['empty'][0]['messaging'][0]['message'])){
// 				$result = curl_exec($ch);
// 			}
	
	}

?>
