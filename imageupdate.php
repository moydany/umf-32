<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
		echo $_SESSION['userName'] ;	
	 }
?> 

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','1234','login') or die('Unable To connect');
	
    $sql = "update tbl_members set foto = (?) where userName = '".$_SESSION['userName']."'";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        header('Location:  perfil.php');

    }else{

        echo "Fail" ;
    }
    mysqli_close($con);
}else{
    header('Location: perfil.php');
}
?> 

<body>
</body>
</html>