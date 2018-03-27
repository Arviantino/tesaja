<html lang="en">
<head>
	<title>Program penjualan kendaraan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="gaya.css">
	<style>

	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="login.php">ADMIN</a></li>
				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home">HOME</a></li>
					<li><a href="#tentang">ABOUT</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
		<div id= "home" class="container-fluid text-center">
			<div class="row">
				<div class="col-md-12 jumbotron">
				<h1>SELAMAT DATANG</h1>
				</div>
			</div>
		</div>
		<div id= "tentang">
			<div class="row">
				<div class="col-sm-8">
					<h2>      PROGRAM PENJUALAN KENDARAAN</h2>
					<h4>      Program ini dibuat untuk melakukan transaksi data penjualan.<br>
							menyimpan data, menghapus data, mencari data,<br>
							serta menyajikan laporan bentuk grafik, excel, dan pdf</h4>
				</div>
				<div class="col-sm-4">
					<img src="motor.jpg"  alt="motor" width="450" height="425">
				</div>
			</div>
		</div>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md-12 jumbotron2">
				</div>
			</div>
		</div>
		
		<script>

$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar" , offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>
	
	</body>
</html>
