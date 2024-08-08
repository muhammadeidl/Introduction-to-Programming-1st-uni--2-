<!doctype html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="./css/stil.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

        <title>B211210569</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Anasayfa</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="Hakkimda.html">Hakkımda</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="Ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ilgiAlanlari.html">İlgi Alanlarım</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
              </ul>
              <a href="Login.html" class="btn btn-primary" >Login</a>
            </div>
          </nav>

            <form action="girisyap.php" method="post">
            <div class="mb-3 mt-3">
              <label id="maill" for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Email Giriniz" name="email">
            </div>
            <div class="mb-3">
              <label id="sifrel"for="pwd" class="form-label">Şifre:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Şifre Giriniz" name="pswd">
            </div>
           
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
          </form>
                
          <div class="alert alert-success">
            <?php

                session_start();

                 echo "Hoş Geldiniz  "; echo $_SESSION['userkullanici_mail'];
            ?>
        </div>
        
        ---------------------------------------------------------
        <!-- 




        -->



</html>
