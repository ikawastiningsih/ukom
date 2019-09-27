<!DOCTYPE html>
<html>
<head>
    <title>Uji Kompetensi BPPTIK</title>

</head>
<style type="text/css">
    
.wrapper {
    background: yellow;
    height: 400px;
    width: 650px;
    margin-left: 340px;
}


.wrapper header {
    background: white;
    float: left;
    margin-top: 10px;
    padding: 10px;
    width: 550px;
    height: 120px;
    margin-left: 45px;
}
.wrapper p {
    background: green;
    float: left;
    width: 550px;
    height: 30px;
    margin-left: 45px;
    font-weight: bold;
    font-size: 25px;
    position: center;
}
</style>
<body>
<form action="login.php" method="post">
<div class="wrapper" align="center">
    <header>
    <img src="logo.png" width="500px" height="100px">
    </header>
    <p>
        <label><font color="black">Login</font></label> 
    </p>
    <div>
        <label><font color="black">Username: </font></label>
        <input type="text" name="username" placeholder="username" required oninvalid="this.setCustomValidity('Mohon isi Username anda')" oninput="setCustomValidity('')">
    </div>
    <div>
        <label><font color="black">Password: </font></label>
        <input type="Password" name="password" placeholder="password" required oninvalid="this.setCustomValidity('Mohon isi Password anda')" oninput="setCustomValidity('')">
    </div>
    <div>
        <input type="submit" name="submit" value="Login">
    </div>
</div>
</form>
</body>

</html>
<?php
    
    if (isset($_POST['submit'])) {
        $username = "ika";
        $password = "bpptik";
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $username && $password == $password) {
            header("Location: home.php");
        }
    }
?>