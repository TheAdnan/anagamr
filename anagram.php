<?php

function Anagram(){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'http://setgetgo.com/randomword/get.php?len=6',
	));
	$resp = curl_exec($curl);

	curl_close($curl);

	if(strlen($resp) < 7){
        return $resp;
    }
    else{
	    return "broken";
    }

}