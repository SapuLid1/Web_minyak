<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/gambar.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/form_TentangKami.css">
  <title>Form Input Tentang Kami</title>

</head>

<body>
  <div class="container-fluid warna">
    <div class="row">
      <div class="container-fluid color1">
        <!-- warna bagian "color1"  header -->

    
<!--awal dari navbar-->
<nav class="navbar navbar-expand-lg navbar-dark">
            <div class="col-4 logo ">
                <a class="navbar-brand" href="web.php">
                    <img src="../logo/minyak_kelapa.png" class="img-fluid" alt="logo" width="90px"> </a>
                <div class="col-sm-6 logo-name">
                    <p>PT. Tanjung Coconut Oil </p>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- bagian dropdown menu -->
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu1">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item drop" href="produk.php">Produk</a></li>
                            <li><a class="dropdown-item drop" href="jenis_klp.php">Kelapa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
              
                </ul>
            </div>
        </nav>
    <!--akhir dari navbar-->

  <!--form input berita-->
  <div class="container-fluid warna">
      <h5 class="menu1">Form Input  Foto&Artikel | Tentang Kami </h5>
    <form method="POST" action="simpan_penelitian.php" enctype="multipart/form-data">
       <!--script untuk upload file gambar 1-->
       <label class="menu1"for="foto">Foto </label>
       <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
                <img  class="imgWrap" src="no-image.png" id="imgView" class="card-img-top img-fluid">
              <div class="card-body">
                <div class="custom-file">
                  <input type="file" name="foto" id="inputFile" class="imgFile custom-file-input" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!--akhir script upload file gambar 1-->

      <!-- awal script untuk upload judul 1 -->
      <div class="form-group menu1">
        <label for="judul">Judul Berita</label>
        <input type="text" name="judul" class="form-control">
      </div>
      <br>
      <!--akhir dari input judul 1 -->
     
      <!--awal script upload artikel 1 -->
      <div class="form-group menu1">
        <label for="artikel">Artikel</label>
        <textarea name="artikel" rows="6" type="text" class="form-control" id="artikel"></textarea>
      </div>
        <!--akhir script upload artikel 1 -->
      <br>
       <!-- awal script untuk upload judul 2 -->
       <div class="form-group menu1">
        <label for="judul">Judul Berita</label>
        <input type="text" name="judul" class="form-control">
      </div>
      <br>
      <!--akhir dari input judul 2 -->
     
      <!--awal script upload artikel 2 -->
      <div class="form-group menu1">
        <label for="artikel">Artikel</label>
        <textarea name="artikel" rows="6" type="text" class="form-control" id="artikel"></textarea>
      </div>
        <!--akhir script upload artikel 2 -->
      <br>
      <button type="submit" class="btn btn-primary">Simpan</button> 
      <a href="tampil_penelitian.php "class="btn btn-primary">Edit</a>
     
    </form>
  </div>
  <!--end form-->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!--scrip ajax untuk menampilkan gambar yang dipilih-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--<script>
    $("#inputFile").change(function(event) {
      fadeInAdd();
      getURL(this);
    });

    $("#inputFile").on('click', function(event) {
      fadeInAdd();
    });

    function getURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        var filename = $("#inputFile").val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        reader.onload = function(e) {
          debugger;
          $('#imgView').attr('src', e.target.result);
          $('#imgView').hide();
          $('#imgView').fadeIn(500);
          $('.custom-file-label').text(filename);
        }
        reader.readAsDataURL(input.files[0]);
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd() {
      fadeInAlert();
    }

    function fadeInAlert(text) {
      $(".alert").text(text).addClass("loadAnimate");
    }
  </script>-->
  <!--akhir scrip ajax menampilkan gambar yang dipilih-->
</body>

</html>