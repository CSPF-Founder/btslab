<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>
<html>

<body>
<a href="#info">Skip the Intro</a>
<div>
<b id="intro">Intro</b></br>
Hi,
We would like to introduce our new Web Application called "BTS Lab".<br/> The developer of this applicaiton believes he is good at coding. <br/>
Yes, he is good at coding and make the app to perform efficiently.  <br/>However, He is not good at "Secure Coding" practices.<br/>
  The web application has plenty of vulnerabilities that allows an attacker to compromise the server.  <br/><br/></br></br></br></br>
</div>
Info about the vulnerability is at the bottom of this page.</br></br></br></br></br></br></br></br>
<div>
<b id="info">Info</b></br>
This page is said to be vulnerable to Cross site scripting(XSS)<br>
If you think you can find it, then give a try<br/><br><br>
</div>
You are here:
<script>
var loc=location.hash.slice(1);
eval(loc);
</script>

</body>
</html>
		
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
