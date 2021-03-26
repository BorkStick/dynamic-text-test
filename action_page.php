<?php
  /* the $_REQUEST will get the variable regardless of whether
   * it is sent via POST or GET. You may wish to use $_POST
   * instead, for security reasons. */
  echo "<h1>" . $_REQUEST["dname"] . "</h1>";
?>
