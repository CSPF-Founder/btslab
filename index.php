<?php include('header.php'); 
if(isset($_SESSION['isLoggedIn'])) { 
echo "<b>Welcome ".$_SESSION['username']." !</b>";
}
?>

			<br/><br/>
			BTS Lab is an open source vulnerable web application. It can be used to learn about many different types of web application vulnerabilities.   

<br/><br/>
Currently, the app allows you to learn the following vulnerability types:
<ul>
<li>SQL Injection</li>
<li>XSS(includes Flash Based xss)</li>
<li>CSRF</li>
<li>Clickjacking</li>
<li>SSRF</li>
<li>File Inclusion</li>
<li> Code Execution</li>
<li>Insecure Direct Object Reference</li>
<li>Unrestricted File Upload vulnerability</li>
<li>Open URL Redirection</li>
<li>Server Side Includes(SSI) Injection</li>
</ul>
<br/>
-------------<br/>
Admin Credentials:<br/>
Username: admin<br/>
Password : password<br/><br/>
<a href='/btslab/admin/adminlogin.php'> Go to Admin Page &gt;&gt;</a>

<?php include('footer.php'); ?>
