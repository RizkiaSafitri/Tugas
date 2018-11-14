<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rizkia Safitri Tugas 1</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/custom.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
<center>
<h2>Tabel</h2>
<div id="table">
	<table>
    	<tr>
        	<th>NPM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
        	<td>16115164</td>
            <td>Rizkia Safitri</td>
            <td>06 Oktober 1997</td>
        </tr>
        <tr>
        	<td>11115296</td>
            <td>Bayu Ridho Alkhifli</td>
            <td>25 Juli 1996</td>
        </tr>
        <tr>
        	<td>16115085</td>
            <td>Saras Septiani</td>
            <td>15 September 1997</td>
        </tr>
        <tr>
        	<td>16115187</td>
            <td>Sarah Shafyana</td>
            <td>21 Juni 1997</td>
        </tr>
        <tr>
        	<td>16115567</td>
            <td>Aida Umamah</td>
            <td>19 Oktober 1997</td>
        </tr>
    </table>
</div>
<div id="form"> 
    <form id="formInput" action="php/proses.php" method="post">
        <h2>Form</h2>
        <?php
            if (isset($_GET['pass'])) {
                $pass=$_GET['pass'];
                echo '<div><label>Password</label><input type="Password" name="password" placeholder="Password Anda" value="'.$pass.'" ></div>';
            } else {
                echo '<div><label>Password</label><input type="Password" name="password" placeholder="Password Anda" required></div>';
            }

            if (isset($_GET['confPass'])) {
                $confP=$_GET['confPass'];
                echo '<div><label>Confirmasi Password</label><input type="Password" name="confPass" placeholder="Confirmasi Password Anda" value="'.$confP.'" ></div>';
            } else {
                echo '<div><label>Confirmasi Password</label><input type="Password" name="confPass" placeholder="Confirmasi Password Anda" required></div>';
            }

            if (isset($_GET['npm'])) {
                $npm=$_GET['npm'];
                echo '<div><label>NPM</label><input type="text" name="NPM" placeholder="NPM Anda" value="'.$npm.'" ></div>';
            } else {
                echo '<div><label>NPM</label><input type="text" name="NPM" placeholder="NPM Anda" required></div>';
            }

            if (isset($_GET['nama'])) {
                $nama=$_GET['nama'];
                echo '<div><label>Nama</label><input type="text" name="Nama" placeholder="Nama Anda" value="'.$nama.'" ></div>';
            } else {
                echo '<div><label>Nama</label><input type="text" name="Nama" placeholder="Nama Anda" required></div>';
            }

            if (isset($_GET['kelas'])) {
                $kelas=$_GET['kelas'];
                echo '<div><label>Kelas</label><input type="text" name="Kelas" placeholder="Kelas Anda" value="'.$kelas.'" ></div>';
            } else {
                echo '<div><label>Kelas</label><input type="text" name="Kelas" placeholder="Kelas Anda" required></div>';
            }
        ?>
        <input type="submit" value="Submit" name="btn_submit"></td>
        <?php
            if (!isset($_GET['submit'])) {
                exit();
            } else {
                $submit_check = $_GET['submit'];

                if ($submit_check == "empty") {
                    echo "<p class='error_form'>Harap lengkapi semua kolom yang ada!</p>";
                    exit();
                } else {
                        
            }
        }
        ?>
    </form>
</div>
</center>
</body>
</html>
