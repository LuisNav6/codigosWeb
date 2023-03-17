<form action="page1.php" method="post"  style="border: 2px dotted blue; text-align: center; width: 400px;">
<p>
    username: <input name="username" type="text" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
</p>
<p>
    password: <input name="password" type="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
</p>
<p><input type="checkbox" name="remember" /> Recordar usuario y password
</p>
<p><input type="submit" value="login"></p>
</form>