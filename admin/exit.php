<?php
session_start();
unset($_SESSION['admin-panel']);
header('location:../');
