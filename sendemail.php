<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>
<pre>&lt;?php if(isset($_POST['myFormSubmitted'])) {    
$message = '';      
// Construct the message     
$message .= &lt;&lt;&lt;TEXT         
Name: {$_POST['name']}         
Email: {$_POST['email']}     
Subject: {$_POST['subject']}     
Comments: {$_POST['comments']}           
{$checkString} TEXT;      
$to = m.malaisamy@gmail.com';    
$subject = $_POST['subject'];     
$from = $_POST['name'];     
$fromEmail = $_POST['email'];      
$header = 'From: ' . $from . '&lt;' . $fromEmail . '&gt;';      
// Send the email     
mail($to, $subject, $message, $header);      
echo 'Thank you for your Email. We will get in touch with you very soon.'; } 
?&gt;</pre>
</body>
</html>