<?php

$handle = fopen('feedback.txt','a');




if(isset($_POST['text'])&&isset($_POST['email'])&&isset($_POST['name'])){
echo "abc";	
	$text=$_POST['text'];
	$email=$_POST['email'];
	$name=$_POST['name'];
	
	if(!empty($text)&&!empty($email)&&!empty($name)){
		
		
		fwrite($handle,"Name :".$name." Email :".$email." Feedback :".$text."\n");
		fclose($handle);
		
		
		}

	}
	


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="form.css" type="text/css" rel="stylesheet" />
</head>
<body>
<form  action="form.php" method="post" autocomplete="on">
<table cellpadding="0" cellspacing="10">
<tr><td>
<p style="margin:0px; color:#FFF;"><strong>Feedback</strong></p>
</tr></td>

<tr><td colspan="2">
<textarea name="text" required="required" value="input" rows="3" cols="60" class="ta"></textarea>
</td>
</tr>

<tr>
<td>
<input type="text" required="required" name="email" placeholder="Email"  class="input"/>
</td>
<td>
<input type="text" required="required" name="name" placeholder="Name"  class="input"/>
</td></tr>

<tr><td>
<input type="submit" value="Submit" class="btn"/>
</tr></td>
</table>
</form>
</body>
</html>


