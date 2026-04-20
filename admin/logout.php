<?php
/**
 * Logout Logic
 */
session_start();
session_destroy();
header("Location: login.php");
exit();
