<!DOCTYPE html>
<html>
<head>
	<title>Template Page</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
</head>
<body>
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			font-family: "Roboto",sans-serif;	
		}
		header{
			height: 60px;
			background:#443944 ;
			width:100%;
			position: fixed;
			padding: 10px;
			
		}
		.left-heading h3{
			color: white;
			text-transform: uppercase;
			padding-left: 55px;
			font-weight: 800;
			font-size: 25px;
			margin:0;
		}
		.left-heading span{
			color: #ab47bc;
		}

		.left-sidebar{
			background: #2F2A2F;
			margin-top: 60px;
			padding-top:20px;
			position: fixed;
			left:0;
			width:250px;
			height:100%;
			transition: 0.5s ease;
			transition-property: left;
		}
		.left-image{
			width:120px;
			border-radius: 100px;
			border:7px solid #443944;
			margin-bottom: -10px;

		}
		.left-sidebar h4{
			color: white;
			font-size:20px;
			margin-bottom: 20px;
		}
		.left-sidebar a{
			text-decoration: none;
			color: white;
			display: block;
			width: 250px;
			line-height: 55px;
			font-size: 20px;
			padding-left: 30px;
			box-sizing: border-box;
			transition: 0.6s ease;
			transition-property: background,margin-left;
		}

		.left-sidebar a:hover{
			background:#ab47bc;
			
		}
		.left-sidebar i{
			margin-right: 10px;
		}
		label #left-menu{
			color:white;
			position: fixed;
			font-size: 30px;
			cursor: pointer;
			left:20px;
			margin:5px 0;
			transition: 0.5s ease;
			transition-property: color;
		}
		 label #left-menu:hover{
			color:#ab47bc;
			
		}
		
		#check:checked ~ .left-sidebar{
			left:-190px;

		}
		#check:checked ~ .left-sidebar a span{
			display:none ;
		}
		#check:checked ~ .left-sidebar a{
			font-size: 30px;
			margin-left: 175px;
			width: 75px;
		}
		#check:checked ~ .left-sidebar a:hover{
			background:#ab47bc;
		}
		
		.login-box{
			height:500px;
			width:600px;
			background: #F3E1F9;
			border-radius: 10px;
			justify-content: center;
			align-items: center;

		}
		.login-box ul{
			font-size: 20px;
			position: relative;
			top: -77px;
			padding-bottom: -20px;
			font-family: Redressed;		}
.login-heading{
	font-family: Redressed;
	font-size: 40px;
	position: relative;
	text-align: center;
	top: -20px;
	font-weight: bold;

}
.logo{
	height: 90px;
	left: 235px;
	top: -42px;
	position: relative;
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
	left:1065px;
	top:105px;
	font-size: 40px;
	font-family: sans-serif;
	transform: rotate(45deg);
	color: white;
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

input[type="checkbox"]{
    display:none ;
    }
    #toggle:checked ~ .toggle-wrapper {
      box-shadow: 0 8px 14px 0 rgba(darken(#3957ee, 12%), 0.12);
    }
    #toggle:checked ~ .toggle-wrapper > .selector {
      left: calc(100% - 30px);
      background-color: #D7482A;
    }
    #toggle:checked ~ .notification > .selected:before {
      content: "Private";
      margin-left: 10px;
    }
    .toggle-wrapper {
    position: absolute;
    width: 70px;
    height: 30px;
    background-color: #eaeaea;
    border-radius: 999px;
    pointer-events: all;
    box-shadow: 0 8px 14px 0 rgba(darken(#ee5f39, 12%), 0.12);
    border: 2px solid #715177;
    left:375px;
    top:25px;
}

.selector {
      width: 25px;
      height: 25px;
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      background-color: #58D72A;
      transition: left 0.25s ease;
      border-radius: 50%;
      cursor: pointer;
    }
    .notification {
    font-size: 25px;
    width: 100%;
    top:-5px;
    position: absolute;
}
.selected:before {
      content: "Public";
      font-size: 25px;
      border-bottom: 2px solid;
      margin-left: 10px;
    }
.option {
	border: none;
	outline: none;
	width: 350px;
	font-size: 20px;
	margin-top:60px;
	padding: 10px 10px;
	border-bottom: 1px solid black;
	background: #F3E1F9;
}
.disabling{
	display: none;
}
.place input[type="text"]{
	 outline: none;
	 border: none;
	 width: 400px;
	 font-size: 20px;
	 background: #F3E1F9;
	 border-bottom: 1px solid black;
	 position: relative;
	 top: 85px;
	 left: 100px;
}
.loc{
	position: absolute;
	top: 85px;
}
.list ul{
	font-size: 25px;
}
.next{
	background: #8543A9;
	text-decoration: none;
	color: white;
	padding: 10px 200px;
	margin-left: 70px;
	font-size: 25px;
	position: absolute;
	top: 500px;
	font-family: Redressed;
	font-weight: bold;
	letter-spacing: 4px;
	border-bottom-left-radius: 40px 40px;
	border-top-right-radius: 40px 40px;
	border-bottom-right-radius: 5px 5px;
	border-top-left-radius: 5px 5px;
}
.toggle{
	pointer-events: none;
}

#check:checked ~ .slideshow-container{
	margin-left:60px;
	max-width:1500px;
	max-height: 900px; 	
}
.slideshow-container {
 	 max-width: 1300px;
 	 max-height: 900px;  
 	 margin-left: 250px;
 	 position: fixed;
 	 top: 60px;
 	transition: 0.6s ease;
	transition-property: margin-left;
	
	filter: blur(1px);
}

.dot {
  display: none;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
  transition: ease;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
	</style>

	<input type="checkbox" id="check"></input>
	<header>
		<label for="check">
			<i class="fas fa-bars" id="left-menu"></i>
		</label>
		<div class="left-heading">
			<h3>Personal <span>Diary</span></h3>
		</div>
	</header>
	
	<div class="left-sidebar">
		<center>
			<img src="kee.jpeg" class="left-image">
			<h4>Keetoneee</h4>

		</center>

		<a href="#1"><i class="fas fa-book-dead"></i><span>Bad Day</span></a>
		<a href="#2"><i class="fas fa-book-medical"></i><span>Good Day</span></a>
		<a href="#3"><i class="fas fa-heart"></i><span>Memorable</span></a>
		<a href="#4" id="button"><i class="fas fa-calendar-plus" ></i><span>New Memory</span></a>
		<a href="#5"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
		<a href="#6"><i class="fas fa-sign-out-alt"></i><span>LogOut</span></a>
	</div>
	

	<div class="slideshow-container">
<div class="mySlides fade"> 
  <img src="images\sky.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="images\saturn.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="images\leaf.jpg" style="width:100%">
</div>
</div>
<div>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

	<div class="login-bg">
		<div class="close">+</div>
		<div class="login-box">
			<form>
				
				<img class="logo" src="book-logo.png">
				<div class="login-heading"> Some Basic Questions</div>
				<div class="list">
					<ul>Type of Memory
						<select class="option">
							<option  disabled selected class="disabling"> Was today a...</option>
							<option>Good Memory</option>
							<option>Bad Memory</option>
							<option>Memorable</option>
						</select></ul>
						<ul>
							<label for="toggle" class="toggle">
								<input type="checkbox" id="toggle" >
								<div class="toggle-wrapper"><span class="selector"></span></div>
								<p class="notification">Wanna make this memory<span class="selected"></span></p>
							</label>
						</ul>
						<ul class="place"> <span class="loc">Location</span>
							<input type="text" name="" placeholder="Memory created place"  ></ul>

				</div>
				<div >
					<a href="blank-template.php" class="next">NEXT</a>
				</div>
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


		var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

	</script>


</body>
</html>