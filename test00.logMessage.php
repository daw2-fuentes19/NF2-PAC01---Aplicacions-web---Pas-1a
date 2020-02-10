<?php

function logMessage($message) {
	$LOGDIR = 'C:\Windows\Temp\\'; //chmod 744 and chown nobody
	
	echo "<br>";
	$logFile = $LOGDIR . 'mysite.log';
	
	//open for appending, create the if it doesn't exist
	$hFile = fopen($logFile, "a+"); 
	
	if(!is_resource($logFile)){
	printf("Unable to open %s for writing. Check file permissions.", $logFile);
	return false;
	}
	
	fwrite($hFile, $message);
	fclose($hFile);
	
	return true;
}

logMessage("Hello, log!\n");

?>
