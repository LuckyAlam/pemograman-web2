# pemograman-web2
Nama  : Lucky Alamsyah<br>
NIM   : 312110163<br>
Kelas : TI.21.A3<br>

# code php_dasar1
```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
<h1>Menggunakan Variable</h1>
<?php
$nim = "312110163";
$nama = 'Lucky Alamsyah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>

</html>
```

# output
<img width="286" alt="php_dasar1" src="https://user-images.githubusercontent.com/127645132/226527816-61babb59-0137-4b11-b7d4-33f83e3378e4.png">

# code php_dasar2
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <!-- Variabel $_GET -->
  <h4><b>Predefine Variable</b></h4>
  <?php
  $nama = 'Lucky Alamsyah';
  echo 'Selamat Datang ' . $_GET['nama']
  ?>
</body>

</html>
```

# output
<img width="215" alt="php_dasar2" src="https://user-images.githubusercontent.com/127645132/226528137-ca672eb6-d747-4d51-ad9f-fd951692368b.png">

# code php_dasar3
```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>

</html>
```

# output 
<img width="280" alt="php_dasar3" src="https://user-images.githubusercontent.com/127645132/226528387-908e59b9-f4cd-466d-b4d5-b94daad65f7e.png">

# code php_dasar4
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <?php
  $gaji = 3000000;
  $pajak = 0.1;
  $THP = $pajak - ($gaji *  $pajak);
  Echo "Gaji sebelum pajak = Rp.  $gaji <br>";
  Echo "Gaji yang dibawa pulang = Rp.  $THP";
  ?>
</body>

</html>
```

# output 
<img width="256" alt="php_dasar4" src="https://user-images.githubusercontent.com/127645132/226528600-5f365c9c-963d-470e-a558-c39f7e2d5f63.png">

# code php_dasar5
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <h2>Kondisi If</h2>
  <?php
  $nama_hari = date("l");
  if ($nama_hari == "Rabu") {
    Echo "Wednesday";
  } elseif ($nama_hari == "Kamis") {
    Echo "Thursday";
  } else {
    Echo "Jumat";
  }
  ?>
</body>

```

# output
<img width="113" alt="php_dasar5" src="https://user-images.githubusercontent.com/127645132/226528760-db159c11-9de7-4315-925b-628f8bbd5622.png">

# code php_dasar6
```
<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
Switch ($nama_hari) {
  case "Minggu":
    Echo "sunday";
    Break;
  case "senin":
    Echo "monday";
    Break;
  case "selasa":
    Echo "Tuesday";
    Break;
  Default:
    Echo "selasa";
}
Echo "/$nama_hari";
?>
```
# output
<img width="199" alt="php_dasar6" src="https://user-images.githubusercontent.com/127645132/226528975-4978a535-0eac-4eba-be98-cf66a2a2c458.png">

# code php_dasar7
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <h2>Perulangan For</h2>
  <?php
  echo "Perulangan 70 sampai 80 <br />";
  for ($i = 70; $i <= 80; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  echo "Perulangan Menurun dari 80 ke 70 <br />";
  for ($i = 80; $i >= 70; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  ?>
</body>

</html>
```
# output
<img width="256" alt="php_dasar7" src="https://user-images.githubusercontent.com/127645132/226529144-edf7b2e3-5f41-457f-b3a2-b46948514a62.png">

# code php_dasar8
```
<h2>Perulangan While</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i = 30;
while ($i <= 40) {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
}
?>
```
# output
<img width="214" alt="php_dasar8" src="https://user-images.githubusercontent.com/127645132/226529293-22e2bdb8-5b9b-46ad-b281-3bbf329a2155.png">

# code php_dasar9
```
<h2>Perulangan Do while</h2>
<?php
echo "Perulangan 40 sampai 50 <br />";
$i = 40;
do {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
} while ($i <= 50);
?>
```

# output
<img width="255" alt="php_dasar9" src="https://user-images.githubusercontent.com/127645132/226529448-2ee8759d-8cc9-4170-8dfd-da93ae4b43df.png">



