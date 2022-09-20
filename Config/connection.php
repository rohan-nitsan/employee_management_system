<?php

require 'constant.php';

$con = mysqli_connect(host, username, password, db_name);

if (!$con) {
    echo "Error in Database Connection";
}
