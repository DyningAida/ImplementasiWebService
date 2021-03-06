<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Dashboard || Generate API Key
   </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  </div>
    <a class="navbar-brand" href="#">PT. Wijaya Sentosa, Tbk</a>
  </div>
  </nav>
  <div class="bg-light">
      <?php
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
     <h1 align="center">Dashboard || Generate API Key</h1>
 
     <?php echo form_open('dashboard/generate');?>
 
     <p align="center">API key:</p>
     <p align="center">
      <?php
    
            if ($apikey == "") {

                echo '<p?> api key belum tersedia, silahkan lakukan untuk dapat melakukan generate API Key</p>
     </p>
     <p align="center"><input type="submit" name="btnSubmit" value="Generate" /></p>';
     } else {
     echo $apikey;
     }
     ?>
     </p>
     <?php echo form_close(); ?>
 <p align="center">
  
           Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
           <br>
           Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>, <?php echo ucfirst($this->session->userdata('id_user')); ?>!
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p>
      <footer>
        <p align="center">Dyning Aida Batrishya | Politeknik Pos Indonesia</p>
      </footer>
  </div>
</body>
