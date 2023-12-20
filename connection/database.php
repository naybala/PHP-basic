<?php

$connection = mysqli_connect("localhost", "root", "", "11_28_2023");
if (!$connection) {
    echo "Your Connection Was Not Success";
    die();
}