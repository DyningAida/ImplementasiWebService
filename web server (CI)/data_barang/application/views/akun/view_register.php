<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun
   </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 </head>
 <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Makmur Jaya</a>
    </nav>
  <div class="bg-light">
     <h1 align="center">Register Akun</h1>
 
     <?php echo form_open('register');?>
 
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
 
     <p align="center">Password Confirm:</p>
     <p align="center">
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p align="center"> <?php echo form_error('password_conf'); ?> </p>

     <p align="center">ID Usergroup:</p>
     <p align="center">
     <input type="text" name="id_usergroup_user" value="<?php echo set_value('id_usergroup_user'); ?>"/>
     </p>
     <p align="center"> <?php echo form_error('id_usergroup_user'); ?> </p>

     <p align="center">
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 
     <p align="center">
  
           Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
      </p>
      <footer>
        <p align="center">Dyning Aida Batrishya | Politeknik Pos Indonesia</p>
        </footer>
    </div>
</body>