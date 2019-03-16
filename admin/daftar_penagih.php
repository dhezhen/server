
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-image: url('img/backg.jpg');
  background-size: cover;
		}
		.row {
			margin:200px auto;
			width:500px;
			text-align:center;
		}
		.login {
			
			padding:40px;
			margin-top:20px;
		}
		
		.font{
			type:tahoma;
			style:bold:
		
		
		
		}
		
		
		
		/* Style the tab */
div.tab {
    overflow: hidden;
    border:none;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: transparant;
    float: center;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.5s;

}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color:skyblue;
}

/* Create an active/current tablink class */
div.tab button.active {
   background-image: url('img/back2.jpg');
}


	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body background="">





	<div class="container">
		<div class="row">
			
			<div class="login">
			<h2 ><strong>DAFTAR PENAGIH</strong></h2>

				
				<form role="form" action="simpan_penagih.php" method="post">
					<div class="form-group">
						<input type="text" name="id_penagih" class="form-control" placeholder="NIP" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" name="nama_penagih" class="form-control" placeholder="Nama Anda" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
				
					<div class="form">
					
					
					
<button type="submit"  name="daftar" background="transparant">
<a href="logout.php">
    <img src= "img/daftar.PNG" width="auto" height="100" alt="submit" /></a>
</button>
					
					
											</div>
				</form>
			</div>
			Copyright &copy; FKOM UNIKU 2017<br>
			<a href="index.php">Login</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>