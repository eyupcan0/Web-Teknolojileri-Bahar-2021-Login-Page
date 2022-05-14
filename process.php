<?php
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "phplogin";

     $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header('location:index.html');
    }
    if($row['username'] == $username && $row['password'] == $password){
        echo "Hoşgeldiniz".$username."Başarıyla Giriş Yaptınız.";
        header( "refresh:3;url=http://127.0.0.1:5501/anasayfa.html" );
    }
    else{
        echo "Kullanıcı adı veya şifre hatalı lütfen tekrar deneyiniz.";
        echo "<script>location.replace('index.html')</script>";
        
    }

?>
