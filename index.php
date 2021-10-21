<?php
session_start();

if(isset($_SESSION['idcustomer'])){
    header('utama.php');
} else{
    header('location: login.php');
}