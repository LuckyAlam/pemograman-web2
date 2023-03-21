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
