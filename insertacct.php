<?php

    //include settings
    require('assets/settings.php');
    
    // Escape user inputs for security
    $name = mysqli_real_escape_string($connection, $_REQUEST['inName']);
    $type = mysqli_real_escape_string($connection, $_REQUEST['inType']);
    $curDt = date('Y-m-d H:i:s');
    
    // Attempt insert query execution
    $sql = "INSERT INTO accounts (name, type, date_added) VALUES ('$name', '$type', '$curDt');";
    if(mysqli_query($connection, $sql)) {
        echo "<script>
            alert('Record added successfully.');
            window.location.href='accounts.php';
            </script>";
    } else {
        echo "ERROR: Insert failed." . mysqli_error($connection);
    }
    
?>