<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>
          Halaman Awal
     </title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 </head>
 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PT. Wijaya Sentosa, Tbk</a>
  </nav>
  <div class="bg-light">
     <h1 align="center"> Selamat Datang! </h1>
     <p align="center">  
     Silakan klik link berikut
     <?php echo anchor('login','Masuk'); ?>
     untuk login ke dalam sistem atau
     <?php echo anchor('register','Daftar'); ?>
     untuk register.
     </p>
     <footer>
     <p align="center">Dyning Aida Batrishya | Politeknik Pos Indonesia</p>
</footer>
</div>     
 </body>
 </html>