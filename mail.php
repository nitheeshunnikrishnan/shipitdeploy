<?php
echo "\nmailing";
		$mailto		= "nitheesh@nivid.co";
		$subject		= "PSPrint Watcher Job Task";
		//$filename		= "locked_jobs.csv";
		$from_name	= "PSPrint Server";
		$from_mail		= "psprint.com";
		$replyto		= $from_mail;
		$message		= "Please Find the attachment of PSPrint assets not freed for the following time period ($timefrom - $timeto)";
		/*$file = fopen($filename,"w");

		foreach ($result as $line)
		{
			fputcsv($file,explode(',',$line));
		}
		$file = $filename;
		$file_size = filesize($file);
		$handle = fopen($file, "r");
		$content = fread($handle, $file_size);
		fclose($handle);
		$content = chunk_split(base64_encode($content));*/
		$uid = md5(uniqid(time()));
		$name = basename($file);


		// header
		$header = "From: ".$from_name." <".$from_mail.">\r\n";
		$header .= "Reply-To: ".$replyto."\r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-Type: text/plain; boundary=\"".$uid."\"\r\n\r\n";

		// message & attachment
		$nmessage = "--".$uid."\r\n";
		$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
		$nmessage .= $message."\r\n\r\n";
		/*$nmessage .= "--".$uid."\r\n";
		$nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
		$nmessage .= "Content-Transfer-Encoding: base64\r\n";
		$nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
		$nmessage .= $content."\r\n\r\n";*/
		$nmessage .= "--".$uid."--";

		if (mail($mailto, $subject, $nmessage, $header)) {
		    return true; // Or do something here
		} else {
		  return false;
		}
		?>