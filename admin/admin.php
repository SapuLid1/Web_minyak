<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
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

        <!-- bagian pembuka dan isi pembuka -->
        <div class="col selamat text-center color3 ">
          <b> Selamat Datang<br>
            Admin Web </b> <b class="name">PT. Tanjung Coconut Oil</b>

          <p>
            <!-- <p> supaya bagian isi pembuka berada di bawah kalimat pembuka -->

          <div class="row g-0 color3">
            <div class="col-md-12 text-center tentang ">
              <div class="card-body color3 isi">
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi reiciendis exercitationem, accusantium beatae ratione itaque soluta minima nemo, temporibus natus adipisci enim quos nam ab, commodi numquam facere? Dolorum, quis?
              
              </div>
            </div>
          </div>
        </div>
        <!--akhir bagian pembuka -->


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>