<?php
    if (isset($_POST['submit'])) {
        $sisi = $_POST['sisi'];
        $pilih = $_POST['option'];
            if ($pilih == "luas") {
                $hasil = $sisi * $sisi;
            }elseif ($pilih == "keliling") {
                $hasil = 4 * $sisi;
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uji Kompetensi BPPTIK</title>

</head>
<style type="text/css">
    
.wrapper {
    background: green;
    height: 600px;
    width: 650px;
    margin-left: 340px;
}

.wrapper p {
    background: white;
	float: left;
    width: 550px;
    height: 30px;
    margin-left: 45px;
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
.wrapper h1 {
	background: white;
    float: left;
    width: 550px;
    height: 300px;
    margin-left: 45px;
    margin-top: 1px;
}
 .wrapper h2 {
    background: lime;
	float: left;
    width: 570px;
    height: 50px;
    margin-left: 45px;
    margin-top: 3px;
} 

</style>
<body>
<form action="persegi.php" method="post">
<div class="wrapper" align="center">
    <header>
    <img src="logo.png" width="500px" height="100px">
    </header>
     <h2><a href="home.php">Home</a>
     </h2>
     <h1>
         <font color="black" size="5px">Persegi</font>
         <br>
        <label><font color="black" size="3px" >Sisi: </font></label>
        <input type="number" name="sisi" placeholder="Masukkan Angka" required oninvalid="this.setCustomValidity('Mohon isi angka')" oninput="setCustomValidity('')">
        <br>
        <label><font color="black" size="3px" >Pilih: </font></label>
            <select name="option">
                <option value="luas">Hitung Luas</option>
                <option value="keliling">Hitung Keliling</option>
            </select>
        <br>
        <input type="submit" name="submit" value="Hitung" width="100%" height="100%">
        <br>
         <label><font color="black" size="3px" >Hasil Hitung</font></label>
         <br>
         <hr>
         <?php 
         error_reporting(0);
        echo $hasil;
        ?>
           
    </div>
   

     </h1>
     

</form>
</body>

</html>
