#!/usr/bin/php

<?php 
  echo "Halo, apa kabar?\n";

  #for($i=1; $i<=10; $i++) {
  #  print("Urutan ke-$i\n");
  #}

  #$output = shell_exec("ls -lart");
  #echo $output;

  #percobaan buat file index.html dan diisi datanya
  #shell_exec("touch index.html");
  #shell_exec("echo '<h1>Hai, Selamat Datang di Halaman PHP</h1>' > index.html");

  #percobaan buat kandar
  shell_exec("mkdir kandar");
  shell_exec("cp index.html kandar");
?>
