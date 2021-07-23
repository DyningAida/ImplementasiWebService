<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Halaman Awal Login
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
      <h1 align="center">Halaman Login</h1>
      <?php

      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
 
      <?php echo form_open('login');?>
      <p align="center">Username:</p>
      <p align="center">
           <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
      </p>
      <p align="center"> <?php echo form_error('username'); ?> </p>
 
      <p align="center">Password:</p>
      <p align="center">
           <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
      </p>
      <p align="center"> <?php echo form_error('password'); ?> </p>
 
      <p align="center">
           <input type="submit" name="btnSubmit" value="Login" />
      </p>
 
      <?php echo form_close();?>
 
      <p align="center">
           Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
      </p>
      <footer>
     <p align="center">Dyning Aida Batrishya || Politeknik Pos Indonesia</p>
</footer>
</div>
 </body>
 </html>