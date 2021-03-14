<html >

<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<title>Homepage</title>

</head>

<body class="bg">
	<style type="text/css">
		.bg{
	background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url(homepage3.jpg);
	background-position: center;
	background-size: cover;
	

}
.head h1{
	color:red;
	margin-left: 70px;
	margin-top: 60px;
	font-size: 50px;
	font-family: Sriracha;
}
.head h2{
	color:black;
	margin-left:70px;
	margin-top: -10px;
	font-size: 35px;
	font-family: Caveat;
}
.but{
	color: white;
	background:red;
	height: 30px;
	width: 200px;
	right: 70px;
	top:30px;
	padding: 10px;
	position: absolute;
	font-size: 25px;
	text-align: center;
	border-radius: 10px;
	text-decoration: none;
	cursor: pointer;
}
.log{
	
	left:750px;
	height: 100px;
	display:inline-block;
	position: absolute;
	top: 140px;

}

.login-bg{
	width: 100%;
	height: 100%;
	background-color:rgba(0,0,0,0.7);
	position: absolute;
	top:0;
	left:0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}
.login-box{
	height:550px;
	width:500px;
	background: white;
	border-radius: 10px;
	justify-content: center;
	align-items: center;

}
.login-box ul{
	font-size: 40px;
	position: relative;
	top: -47px;
	padding-bottom: -20px;
	font-family: Caveat;


	

}
.login-heading{
	font-family: Caveat;
	font-size: 45px;
	position: relative;
	text-align: center;
	top: -20px;
	font-weight: bold;

}
.logo{
	height: 90px;
	left: 200px;
	top: -42px;
	position: relative;
}
.login-box input[type="text"], input[type="password"]{
	border:none;
	border-bottom:1px solid #000;
	background:transparent;
	outline:none;
	height:40px;
	color:#000;
	font-size:20px;
	position: relative;
	top:10px;
	width: 400px;
	left:10px; 

}

.button {
	border:none;
	text-decoration: none;
	border: 1px solid #bb0000;
	color: white;
	background: #bb0000;
	padding: 8px 150px;
	font-size: 22px;
	border-radius: 30px;
	font-family: Roboto;
	position: relative;
	font-weight: bold;
	left:-15px;
}
.button:hover,.but:hover{
	background: #ffc107;
	color: white;
	transition: 0.5s ease;
	border-radius: 10px;
	border:2px solid #ffc107;
	
}
.close{
	position: absolute;
	left:1020px;
	top:78px;
	font-size: 40px;
	font-family: sans-serif;
	transform: rotate(45deg);
	color: white;
	cursor: pointer;

}
	</style>

	<div class="head">
		<h1 >WELCOME</h1>
		<h2>READY TO PERSONALISE YOUR SPECIAL DIARY ?</h2>	
	</div>
	<div ><a  class="but" id="button">Get Started Here</a></div>
	
	<img  class="log" src="book.png">
	
	<div class="login-bg">
		<div class="close">+</div>
		<div class="login-box">
			<form>
				
				<img class="logo" src="login1.png">
				<div class="login-heading">Entry to the Diary</div>
				<ul>Diary Name<br>
					<input  type="text" name="Username" placeholder="Username"  required>
				</ul>
				<ul>Password<br>
					<input  type="password" name="Password" placeholder="Password" required>
				</ul>
				<ul><a href="template.php" class="button"> KULJA SIM SIM</a></ul>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('button').addEventListener('click',function(){
			document.querySelector('.login-bg').style.display = 'flex';
		});
		document.querySelector('.close').addEventListener('click',function(){
			document.querySelector('.login-bg').style.display = 'none';
		});
	</script>	
</body>

</html>

