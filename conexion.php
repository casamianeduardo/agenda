<?php

define("HOST_DB", "localhost");
define("USER_DB", "root");
define("PASS_DB", "password");
define("NAME_DB", "agenda");

$conexion = new mysqli(
    constant("HOST_DB"),
    constant("USER_DB"),
    constant("PASS_DB"),
    constant("NAME_DB")
);