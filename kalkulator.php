<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Sederhana Buatan Dion Arya Pamungkas</title>
   <link rel="stylesheet" href="tema.css">
   <script>
   function validasi_operasi(form){
     function check_radio(radio){
       for (i = 0; i < radio.length; i++)
       {
         if (radio[i].checked === true)
         {
           return radio[i].value;
         }
       }
      return false;
      }
      var radio_val = check_radio(form.operasi);
      if (radio_val === false)
       {
         alert("belum memilih operasi yang dilaksanakan");
         return false;
       }
      return (true);
     }
   </script>
  <style>
*{
  margin:0;
  padding:0;
}
.kalkulator {
    margin-top: 150px;
  margin-left: 450px;
  margin-right: 450px;
  border-color: currentColor;
  border-radius: 1px;
}
h1{
  margin-bottom: 13px;
}
  </style>
</head>
<body>
<div class="kalkulator">
  <?php if (isset($_POST['submit'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
  switch ($operasi) {
    case '+':
      $hasil = $angka1 + $angka2;
      break;
   case '-':
   $hasil = $angka1-$angka2;
   break;
    case '*':
    $hasil = $angka1 * $angka2;
    break;
    case '/':
      $hasil = $angka1 / $angka2;
      break;
    default:
     $hasil = 'Angka Belum Dimasukan Dengan Benar';
      break;
  }
}?>
<div class="w3-container w3-teal">
<h1>Kalkulator Sederhana</h1>
</div>
  <form class="w3-form w3-card-4 w3-margins" action="" method="post" onsubmit="return validasi_operasi(this)">
  <input class="w3-input" type="number" name="angka1" ng-model="angka1" placeholder="Masukan Angka Pertama" value="<?=$angka1;?>" required="required"><br>
    <label class="w3-label" for="operasi">Klik Untuk memilih operasi :</label><br>
    <input class="w3-radio" type="radio" name="operasi" value="+">Tambah
    <input class="w3-radio" type="radio" name="operasi" value="-">Kurang
    <input class="w3-radio" type="radio" name="operasi" value="*">Kali
    <input class="w3-radio" type="radio" name="operasi" value="/">Bagi<br>
  <input class="w3-input" type="number" name="angka2" ng-model="angka2" value="<?=$angka2;?>"  placeholder="Masukan Angkas 2" required="required"><br>
  <center><input type="submit" name="submit" class="w3-btn w3-teal" value="Hitung"></center>
  <?if (isset($_POST['submit'])){
    echo '<div class="w3-card-4">
    <div style="margin-right:250px">
    <center>
    <h4><div class="w3-teal">Hasil Akhir : </div>'
    .$angka1. $operasi. $angka2.' = '.$hasil .'
    </h4>
    </center>
    </div>
    </div>'; }?>
</form>
<div class="w3-container w3-teal">
<h6>&copy <?php echo date('Y');?> Dion Arya Pamungkas</h6>
</div>
</div>
</body>
</html>
