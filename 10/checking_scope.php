<?php
$a = 1;
include "var.inc";

function f1() {
  $a = 20;
  include "var.inc";
}

f1();
include "var.inc"
?>
