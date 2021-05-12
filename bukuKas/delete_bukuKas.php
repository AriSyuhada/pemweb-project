<?php
$booksID = $_GET['booksID'];
$db = $_GET['db'];
header("Location: bukuKas.php?db=$db&delete=1&booksID=$booksID");