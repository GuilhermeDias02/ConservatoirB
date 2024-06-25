<?php
/**
 * Préparation
 */
$dir = getcwd();
$session = session_start();
$title = "Inscription";

/**
 * Main
 */
include_once "vue/inscription.php";