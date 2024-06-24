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
include "vue/inscription.php";