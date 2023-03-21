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