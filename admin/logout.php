<?php
include('conexao.php');
session_destroy();
header('location:'.SITEURL.'admin/login,php');

?>