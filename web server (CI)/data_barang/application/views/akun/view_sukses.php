 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Notifikasi Berhasil Registrasi!
   </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PT. Wijaya Sentosa, Tbk</a>
  	</nav>
  <div class="bg-light">
   <h3 class="text-center"><?php echo $message; ?></h3>
   <p class="text-center"><?php echo anchor('beranda','Kembali ke beranda'); ?></p>
</div>
 </body>
 </html>