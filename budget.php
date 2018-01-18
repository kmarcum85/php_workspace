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
    ?>
    
    <div id="content">
        <?php require('calc.php'); ?>
        <form method="post">
            <table align="center">
                
                <tr>
                    <td>Enter 1st Number</td>
                    <td><input type="text" name="n1"></td>
                </tr>
            
                <tr>
                    <td>Enter 2nd Number</td>
                    <td><input type="text" name="n2"></td>
                </tr>
            
                <tr>
                    <td>Select Oprator</td>
                    <td><select name="op">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select></td>
                </tr>
                
                <tr>
                    <td><strong>Equals: <?php echo $result; ?><strong></td>
                </tr>
            
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="                =                "></td>
                </tr>
            
            </table>
        </form>
        
    </div>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sbBudget').toggleClass('active')
        });
        
    </script>
    
</body>
</html>