<?php
$var1 = $_POST['att1'];
$var2 = $_POST['att2'];
$var3 = $_POST['att3'];
$var4 = $_POST['att4'];
$var5 = $_POST['att5'];
$var6 = $_POST['att6'];
$var7 = $_POST['att7'];
$var8 = $_POST['att8'];
$var9 = $_POST['att9'];
$var10 = $_POST['att10'];
$var11 = $_POST['att11'];
$var12 = $_POST['att12'];
$var13 = $_POST['att13'];
$var14 = $_POST['att14'];
$var15 = $_POST['att15'];
$var16 = $_POST['att16'];
$var17 = $_POST['att17'];
$var18 = $_POST['att18'];
$var19 = $_POST['att19'];
$var20 = $_POST['att20'];
$var21 = $_POST['att21'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Contact Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">




    </head>
<body style="background-color:#1abc9c;">

      <!-- Top content -->
      <div class="top-content">

          <div class="inner-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 text">
                          <h1><strong>Sistem Pakar Prediksi Penyakit Kedelai</strong></h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                      	<div class="form-top">
                      		<div class="form-top-left">
                      			<h3>Ciri-ciri Penyakit</h3>
                          		<p>Silahkan isi atribut-atribut berikut</p>
                      		</div>
                      		<div class="form-top-right">
                      			<i class="fa fa-envelope"></i>
                      		</div>
                          </div>
                          <div class="form-bottom contact-form">
		                    <form method="post" action="hasil.php" role="form" >

<?php

if($var1) echo'<div class="form-group">
                                    <label>Curah Hujan</label>
                            <select name="precip" class="js-example-basic-single form-control">
                              <option value="lt-norm">Rendah</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
                              </div>';


if($var2) echo'<div class="form-group">
                            <label>Suhu</label>
                            <select name="temp" class="js-example-basic-single form-control">
                              <option value="lt-norm">Rendah</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
                          </div>';

if($var3) echo'<div class="form-group">
                            <label>Hujan</label>
                            <select name="hail" class="js-example-basic-single form-control">
                              <option value="yes">Ya</option>
                            </select>
                          </div>';

if($var4) echo'<div class="form-group">
                                    <label>Kerusakan Daerah</label>
                            <select name="area-damaged" class="js-example-basic-single form-control">
                              <option value="scattered">Tersebar</option>
                              <option value="upper-areas">Cukup Besar</option>
                              <option value="whole-field">Seluruh Bidang</option>
                            </select>
                              </div>';
if($var5) echo'<div class="form-group">
                                    <label>Kerusakan</label>
                            <select name="severity" class="js-example-basic-single form-control">
                              <option value="severe">Parah</option>
                            </select>
                              </div>';

if($var6) echo'<div class="form-group">
                            <label>Perawatan Benih</label>
                            <select name="seed-tmt" class="js-example-basic-single form-control">
                              <option value="fungicide">Menggunakan Fungisida</option>
                            </select>
                          </div>';

if($var7) echo'<div class="form-group">
                            <label>Perkecambahan</label>
                            <select name="germination" class="js-example-basic-single form-control">
                              <option value="80-90">80% sampai 89%</option>
                              <option value="lt-80">Kurang dari 80%</option>
                            </select>
                          </div>';

if($var8) echo'<div class="form-group">
                            <label>Pertumbuhan Tanaman</label>
                            <select name="plant-growth" class="js-example-basic-single form-control">
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>';

if($var9) echo'<div class="form-group">
                            <label>Daun</label>
                            <select name="leaves" class="js-example-basic-single form-control">
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>';

if($var10) echo'<div class="form-group">
                            <label>Bercak Halo</label>
                            <select name="leafspots-halo" class="js-example-basic-single form-control">
                              <option value="yellow-halos">Bercak Kuning</option>
                              <option value="no-yellow-halos">Bukan Bercak Kuning</option>
                            </select>
                          </div>';

if($var11) echo'<div class="form-group">
                            <label>Ukuran Bintik Daun</label>
                            <select name="leafspot-size" class="js-example-basic-single form-control">
                              <option value="gt-1/8">Kurang Dari 1/8 bagian</option>
                              <option value="lt-1/8">Lebih Dari 1/8 bagian</option>
                            </select>
                          </div>';

if($var12) echo'<div class="form-group">
                            <label>Malfungsi Daun</label>
                            <select name="leaf-malf" class="js-example-basic-single form-control">
                              <option value="present">Ada</option>
                            </select>
                          </div>';

if($var13) echo'<div class="form-group">
                            <label>Jamur Pada Daun</label>
                            <select name="leaf-mild" class="js-example-basic-single form-control">
                              <option value="upper-surf">Permukaan Atas</option>
                              <option value="lower-surf">Permukaan Bawah</option>
                            </select>
                          </div>';

if($var14) echo'<div class="form-group">
                            <label>Batang</label>
                            <select name="stem" class="js-example-basic-single form-control">
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>';

if($var15) echo'<div class="form-group">
                            <label>Canker Lesion</label><!-- -->
                            <select name="canker-lesion" class="js-example-basic-single form-control">
                              <option value="brown">Cokelat</option>
                              <option value="dk-brown-blk">dk-brown-blk</option>
                              <option value="tan">tan</option>
                            </select>
                          </div>';

if($var16) echo'<div class="form-group">
                            <label>Bagian Pembuahan</label>
                            <select name="fruiting-bodies" class="js-example-basic-single form-control">
                              <option value="present">Ada</option>
                            </select>
                          </div>';

if($var17) echo'<div class="form-group">
                            <label>Pembusukan Eksternal</label>
                            <select name="external-decay" class="js-example-basic-single form-control">
                              <option value="firm-and-dry">Kering</option>
                              <option value="watery">Berair</option>
                            </select>
                          </div>';

if($var18) echo'<div class="form-group">
                            <label>Penghitaman Biji</label>
                            <select name="int-discolor" class="js-example-basic-single form-control">
                              <option value="brown">Kecokelatan</option>
                              <option value="black">Hitam</option>
                            </select>
                          </div>';

if($var19) echo'<div class="form-group">
                            <label>Fruits Pods</label>
                            <select name="fruit-pods" class="js-example-basic-single form-control">
                              <option value="diseased">Berpenyakit</option>
                              <option value="few-present">Beberapa Saat</option>
                              <option value="dna">dna</option>
                            </select>
                          </div>';

if($var20) echo'<div class="form-group">
                            <label>Benih</label>
                            <select name="seeds" class="js-example-basic-single form-control">
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>';

if($var21) echo'<div class="form-group">
                            <label>Akar</label>
                            <select name="roots" class="js-example-basic-single form-control">
                              <option value="rooted">Busuk</option>
                              <option value="galls-cysts">Berkista</option>
                            </select>
                          </div>';


if(!$var1) echo'<input type="hidden" name ="precip" value="norm">';
if(!$var2) echo'<input type="hidden" name ="temp" value="norm">';
if(!$var3) echo'<input type="hidden" name ="hail" value="no">';
if(!$var4) echo'<input type="hidden" name ="area-damaged" value="low-areas">';
if(!$var5) echo'<input type="hidden" name ="severity" value="pot-severe">';
if(!$var6) echo'<input type="hidden" name ="seed-tmt" value="none">';
if(!$var7) echo'<input type="hidden" name ="germination" value="90-100">';
if(!$var8) echo'<input type="hidden" name ="plant-growth" value="norm">';
if(!$var9) echo'<input type="hidden" name ="leaves" value="norm">';
if(!$var10) echo'<input type="hidden" name ="leafspots-halo" value="absent">';
if(!$var11) echo'<input type="hidden" name ="leafspot-size" value="dna">';
if(!$var12) echo'<input type="hidden" name ="leaf-malf" value="absent">';
if(!$var13) echo'<input type="hidden" name ="leaf-mild" value="absent">';
if(!$var14) echo'<input type="hidden" name ="stem" value="norm">';
if(!$var15) echo'<input type="hidden" name ="canker-lesion" value="dna">';
if(!$var16) echo'<input type="hidden" name ="fruiting-bodies" value="absent">';
if(!$var17) echo'<input type="hidden" name ="external-decay" value="absent">';
if(!$var18) echo'<input type="hidden" name ="int-discolor" value="none">';
if(!$var19) echo'<input type="hidden" name ="fruit-pods" value="norm">';
if(!$var20) echo'<input type="hidden" name ="seeds" value="norm">';
if(!$var21) echo'<input type="hidden" name ="roots" value="norm">';

?>

<button type="submit" class="btn">Find Disease</button>
                            </form>
	                    </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>


      <!-- Javascript -->
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/retina-1.1.0.min.js"></script>
      <script src="assets/js/scripts.js"></script>

      <!--[if lt IE 10]>
          <script src="assets/js/placeholder.js"></script>
      <![endif]-->

    </body>

</html>
