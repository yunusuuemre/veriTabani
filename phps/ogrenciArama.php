<?php
include("siteTemelYapisi.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<h1>Aramak istediğiniz örencinin bilgilerini giriniz</h1>

<form action="ogrenciAramaIslemleri.php">
  <table style="margin-left: 20px; margin-top: 20px;">
    <tr >
      <td><label class="form-label" style="font-size: x-large; display: inline-block; "> Öğrenci İsim  </label></td>
      <td ><input type="text" required class="form-control" name="ogrAd" style="font-size: large; display: inline-block;" ></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Öğrenci Soyisim </label></td>
      <td><input type="text" required class="form-control" name="ogrSoyad" style="font-size: large; display: inline-block;"></td>
    </tr>
  </table>
  <button type="submit" class="btn btn-primary" style="margin-left: 40px; margin-top: 20px;">Ara</button>
  <button type="reset" class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;">Temizle</button>

</form>



</body>


</html>