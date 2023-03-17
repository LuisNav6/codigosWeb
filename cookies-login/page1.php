<?php
if(!empty($_POST['remember'])){
    setcookie('username',$_POST['username'],time()+3600*10);//diez min
    setcookie('password',$_POST['password'],time()+3600*10);//diez min
    echo "cookies set successfuly";
}else{
    setcookie('username','');
    setcookie('password','');
    echo "cookies not set";
}
?>
<p><a href="index.php">go to login page </a></p>