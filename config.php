<?php
  $host       = "<endpoint>";
  $username   = "<username>";
  $password   = "<password>";
  $dsn        = "mysql:host=$host;dbname=records";
  $options    = array(
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
