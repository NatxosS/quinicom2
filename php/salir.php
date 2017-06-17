<?php

// destruimos la sesión y enviamos al usuario a la vista de login
session_start();
session_destroy();
header ("Location: ../../../index.php");
