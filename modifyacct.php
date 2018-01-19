<?php

    //include settings
    require('assets/settings.php');
    
    // Escape user inputs for security
    $rowId = mysqli_real_escape_string($connection, $_REQUEST['row_Id']);
    $editName = mysqli_real_escape_string($connection, $_REQUEST['edit_Name']);
    $editType = mysqli_real_escape_string($connection, $_REQUEST['edit_Type']);
    
    // Attempt insert query execution
    $sql = "update accounts set name = '$editName', type = '$editType' where id = '$rowId';";
    if(mysqli_query($connection, $sql)) {
        echo "<script>
            alert('Record modified successfully.');
            window.location.href='accounts.php';
            </script>";
    } else {
        echo "ERROR: Modify failed." . mysqli_error($connection);
    }
    
?>