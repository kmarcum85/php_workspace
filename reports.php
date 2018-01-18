<html !DOCTYPE>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>
<body>
    <?php
        //include header
        require('header.php');

        //include sidebar
        require('lsidebar.php');
        
        //include php settings
        require('assets/settings.php');
    ?>
    
    <div id="content">
        <?php
            $query = "SELECT * FROM accounts";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "The ID is: " . $row['id'] . " and the Name is: " . $row['name'];
            }
        ?>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sbReports').toggleClass('active')
        });
        
    </script>
    
</body>
</html>