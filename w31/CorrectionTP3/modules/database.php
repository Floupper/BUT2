<?php
try {
  $db = new PDO("sqlite:../database.db");
  $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  die("Error: ".$e->getMessage()."!");
}
