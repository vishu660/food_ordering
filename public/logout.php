<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

$userObj->logout();
