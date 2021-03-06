

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Kayıt Ol</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}
</style>
</head>
<body>
<div class="signup-form">

	<?php session_start();   if(!empty($_SESSION['kullanici'])) { ?> 

	<div>Hoşgeldin <?php echo $_SESSION['kullanici'];?></div>
	<div class="logout"><a class="btn btn-success" href="logout.php">Çıkış Yap</a></div>
	<?php } else {?>
    <form action="kullaniciekle.php" method="POST">
		<h2>Kayıt</h2>
		<hr>
        <div class="form-group">
        	<input type="kadi" class="form-control" name="kadi" placeholder="Kullanıcı Adı" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="pwd" placeholder="Şifre" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control"  id="confirm_pwd"  name="confirm_password" placeholder="Şifreyi Onayla" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" id="btnkayitol" class="btn btn-primary btn-lg btnkayitol">Kayıt Ol</button>
        </div>
    </form>
	<div class="hint-text">Hesabınız varsa <a href="login.php">Giriş Yapınız</a></div>
	<?php } ?>

</div>
</body>
</html>


<script>


$("#confirm_pwd").keyup(function(){

	var sifre1=$("#pwd").val();
	var sifre2=$("#confirm_pwd").val();

	if(sifre1!=sifre2){
		document.getElementById("btnkayitol").disabled = true;
	}
	
	else{
		document.getElementById("btnkayitol").disabled = false;
	}

});


</script>




