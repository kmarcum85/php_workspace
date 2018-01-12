<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    if($connection === false) {
        die("ERROR: Could not connect to Database." . mysqli_connect_error());
    }

    //And now to perform a simple query to make sure it's working
    //$query = "SELECT * FROM accounts";
    //$result = mysqli_query($connection, $query);

    //while ($row = mysqli_fetch_assoc($result)) {
    //    echo "The ID is: " . $row['id'] . " and the Name is: " . $row['name'];
    //}

?>