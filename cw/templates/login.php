<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: ../template/login.php");
        exit();
    }
?>