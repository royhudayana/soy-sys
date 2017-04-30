<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test</title>


  <!-- Custom CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- labelauty -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <script src="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.css">

  <!-- bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Soysys</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Sistem Pakar Prediksi Penyakit Kedelai</span><br /><br />
                        <form action="pilihatribut.php" method="post">
                        <div class="row">
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att1"/>
                            <input class="demo" value="1" name="att1" type="checkbox" data-labelauty="Curah Hujan (default=normal)|Curah Hujan" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att2"/>
                            <input class="demo" value="1" name="att2" type="checkbox" data-labelauty="Suhu (default=normal)|Suhu" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att3"/>
                            <input class="demo" value="1" name="att3" type="checkbox" data-labelauty="Hujan (default=tidak)|Hujan" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att4"/>
                            <input class="demo" value="1" name="att4" type="checkbox" data-labelauty="Kerusakan Daerah|Kerusakan Daerah" />
                          </div>
                        </div><br />

                        <div class="row">
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att5"/>
                            <input class="demo" value="1" name="att5" type="checkbox" data-labelauty="Kerusakan|Kerusakan" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att6"/>
                            <input class="demo" value="1" name="att6" type="checkbox" data-labelauty="Perawatan Benih|Perawatan Benih" />
                          </div>
                          <div class="col col-md-3 center-block">
                          <input type="hidden" value="0" name="att7"/>
                            <input class="demo" value="1" name="att7" type="checkbox" data-labelauty="Perkecambahan|Perkecambahan" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att8"/>
                            <input class="demo" value="1" name="att8" type="checkbox" data-labelauty="Pertumbuhan Tanaman|Pertumbuhan Tanaman" />
                          </div>
                        </div><br />

                        <div class="row">
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att9"/>
                            <input class="demo" value="1" name="att9" type="checkbox" data-labelauty="Daun|Daun" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att10"/>
                            <input class="demo" value="1" name="att10" type="checkbox" data-labelauty="Bercak Halo|Bercak Halo" />
                          </div>
                          <div class="col col-md-3 center-block">
                          <input type="hidden" value="0" name="att11"/>
                            <input class="demo" value="1" name="att11" type="checkbox" data-labelauty="Ukuran Bintik Daun|Ukuran Bintik Daun" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att12"/>
                            <input class="demo" value="1" name="att12" type="checkbox" data-labelauty="Malfungsi Daun|Malfungsi Daun" />
                          </div>
                        </div><br />

                        <div class="row">
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att13"/>
                            <input class="demo" value="1" name="att13" type="checkbox" data-labelauty="Jamur Pada Daun|Jamur Pada Daun" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att14"/>
                            <input class="demo" value="1" name="att14" type="checkbox" data-labelauty="Batang|Batang" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att15"/>
                            <input class="demo" value="1" name="att15" type="checkbox" data-labelauty="Canker Lesion|Canker Lesion" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att16"/>
                            <input class="demo" value="1" name="att16" type="checkbox" data-labelauty="Bagian Pembuahan|Bagian Pembuahan" />
                          </div>
                        </div><br />

                        <div class="row">
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att17"/>
                            <input class="demo" value="1" name="att17" type="checkbox" data-labelauty="Pembusukan Eksternal|Pembusukan Eksternal" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att18"/>
                            <input class="demo" value="1" name="att18" type="checkbox" data-labelauty="Penghitaman Biji|Penghitaman Biji" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att19"/>
                            <input class="demo" value="1" name="att19" type="checkbox" data-labelauty="Fruits Pods|Fruits Pods" />
                          </div>
                          <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att20"/>
                            <input class="demo" value="1" name="att20" type="checkbox" data-labelauty="Benih|Benih" />
                          </div>
                        </div><br />
                        <div class="col col-md-3 center-block">
                            <input type="hidden" value="0" name="att21"/>
                            <input class="demo" value="1" name="att21" type="checkbox" data-labelauty="Akar|Akar" />
                          </div>
                        </div><br /><br />


                        <br />
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Pilih</button>
                        </div>
                        </form>
                        <hr class="star-light">
                        <span class="skills">Kelompok 10 Sistem Pakar<br />
                        Yogi (G64130036) - Royan (G64130049) - Dhaba (G64130051) - Agung (G64130073) - Ivan (G64130076) - Yogi (G64130036)</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>


  <script>
    $(document).ready(function(){
    $(".demo").labelauty({
    // Development Mode
    // This will activate console debug messages
    development: false,

    // Trigger Class
    // This class will be used to apply styles
    class: "labelauty",

    // Use text label ?
    // If false, then only an icon represents the input
    label: true,

    // Separator between labels' messages
    // If you use this separator for anything, choose a new one
    separator: "|",

    // Use the greatest width between two text labels ?
    // If this has a true value, then label width will be the greatest between labels
    same_width: true
    });
    });
  </script>

</body>

</html>
