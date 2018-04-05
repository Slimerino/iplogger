<?php
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "admin.html"; // Change to whatever you want
$file = fopen($file, "a");
$data = "<center><pre><h3><b>User IP</b>: $ip <br></h3></pre></center>";
fwrite($file, $data);
fclose($file);

echo "<center><pre style=\"color:red;\"><b>User IP</b>: $ip </pre></center>" // change this is you want
?>
<html>
<head>
    <title>I like memes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<body>

<!-- Put your own HTML and CSS in here -->

<center><h1 style="color:red;" class="animated infinite pulse">Thanks for your IP :)</h1></center>
<br>
</body>
