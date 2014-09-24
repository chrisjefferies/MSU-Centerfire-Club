<?php
    $subject = 'Join Form';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: MSU CENTERFIRE | JOIN'; 
    $to = 'info@msucenterfire.com'; 
    $offcampus = $_POST['offcampus'];
    $hall = $_POST['hall'];
    $dorm = $_POST['dorm'];
    $none = $_POST['none'];
    $some = $_POST['some'];
    $lots = $_POST['lots'];
    $military = $_POST['military'];
    $geninterest = $_POST['geninterest'];
    $clays = $_POST['clays'];
    $learning = $_POST['learning'];
    $actioninterest = $_POST['actioninterest'];
    $action = $_POST['action'];
    $year = $_POST['year'];
    $major = $_POST['major'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $driver = $_POST['driver'];
    $mail = $_POST['mail'];
    $payonline = $_POST['online'];
    $inperson = $_POST['inperson'];
    $volunteer = $_POST['volunteer'];
    $human = $_POST['human'];
			
    
    //$body = "From: $name\n E-Mail: $email\n Message:\n $message";
    $body = "
Subject: $subject\n
First: $firstname\n
Last:$lastname\n
E-Mail: $email\n
Address: $address\n $address2\n $city\n $zip\n
Off Campus: $offcampus\n
Hall: $hall\n
Dorm: $dorm\n
Little or no experience: $none\n 
Some Experience: $some\n 
Formal Training or Experience: $lots\n 
Military Background: $military\n
General Interest: $geninterest\n 
Interest in Clays: $clays\n 
Interest in Learning: $learning\n 
Action Interest: $actioninterest\n 
Action: $action\n
Year: $year\n
Major: $major\n
Gender: $gender\n
Age: $age\n
Driver: $driver\n
Preferred Payment Mail: $mail\n 
Paid Online: $payonline\n 
Preferred Payment In Person: $inperson\n 
Volunteer: $volunteer\n
Message:\n $message
";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<h2>Message Sent</h2>';
	} else { 
	    echo "<h2>Something went wrong.</h2>"; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<h2>Seriously, 2+2?</h2>';
    }
       
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>MSU CENTERFIRE Shooting Club and Competitive Team</title>
  <meta name="description" content="Competitive and Recreational shooting sports club at Michigan State.">
  			
  			<!-- .less .css
  <link rel="stylesheet/less" type="text/css" href="less/nav.less" />
  <link rel="stylesheet/less" type="text/css" href="less/style.less" />
  			-->
  			
  			<!-- post compiled, post dev .css -->
  <link rel="stylesheet" type="text/css" href="less/nav.css">
  <link rel="stylesheet" type="text/css" href="less/style.css">
  			
			
  			<!-- js for uncompiled .less -->
  <script src="js/less-1.6.1.js" type="text/javascript"></script>

  		<!-- Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Orbitron:400,700|Lato:300,400,700' rel='stylesheet' type='text/css'> 
  
  		<!-- Google Analytics --> 
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49299319-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

</head>


<body>
	
	<div id="logo-top">
		<img src="images/logo.png" alt="MSU Centerfire Shooting Club" />
	</div>

	<h1>Michigan State's home for the shooting sports</h1>
	
	<style>
		h2{width: 100%; text-align: center; height: 30px; padding: 20px 0; margin: 0; background-color: #ccff33;}
	</style>
	
	<div id="join">
		<div id="button">
			<a href="index.html">
				<p>Back Home</p>
			</a>
		</div>
	</div>
	
	
	