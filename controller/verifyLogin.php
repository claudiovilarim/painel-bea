<?php

include_once 'conexao.php';

if($_SESSION['login'] != '1'){
    header('Location: ../index.php');
}