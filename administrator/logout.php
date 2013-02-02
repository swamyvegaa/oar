<?php
session_start();
unset($_SESSION['aor']['admin']);
header("Location:index.php");
?>