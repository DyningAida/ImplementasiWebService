 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

   <title>
     Generate API Key Berhasil!
   </title>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PT. Wijaya Sentosa, Tbk</a>
  </nav>
  <div class="bg-light">
 	if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
     <h1 align="center"> Generate API Key Berhasil </h1>
 
     <?php echo form_open('generate');?>
 
     <p align="center">Api Key:</p>
     <p align="center">
     <input type="text" name="api" value="<?php echo set_value('api'); ?>"/> 
     </p>
     <p align="center"> <?php echo form_error('api'); ?> </p>     
 
     <?php echo form_close();?>
   <h3><?php echo $message; ?></h3>
    <p><?php echo anchor('beranda','Kembali ke beranda'); ?></p>
  </div>
 </body>
 </html>