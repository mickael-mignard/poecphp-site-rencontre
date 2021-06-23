<?php
setcookie('PHPSESSID', time() - 3600);
header('location: index.php');