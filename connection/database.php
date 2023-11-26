<?php

$connection = mysqli_connect("localhost", "root", "never", "cu_student");

if (!$connection) {
    echo "Your Connection Was Not Success";
    die();
}
