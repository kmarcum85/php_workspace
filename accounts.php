<?php
    //include settings
    require('assets/settings.php');
    //include header
    require('header.php');
    //include sidebar
    require('lsidebar.php');
    //include account edit modal
    require('assets/modal/editacct.php');
    
    $query = "SELECT * FROM accounts;";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die ('SQL Error: ' . mysqli_error($connection));
    }
?>

<html !DOCTYPE>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accounts</title>
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/body.css">
        <link rel="stylesheet" href="assets/css/sidebar_header.css">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    </head>
    <body>
        <div id="content">
            
            <h2>Add your accounts to this page (savings, checking, cash, etc.)</h2>
            
            <div id="tblAccounts" class="table-responsive">
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Date Added</th>
                            <th>Last Modified</th>
                            <th>Current Balance</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($result))
                            {
                                $cur_bal = '';
                                echo '<tr>
                                        <td>'.$row['id'].'</td>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['type'].'</td>
                                        <td>'.$row['date_added'].'</td>
                                        <td>'.$row['date_modified'].'</td>
                                        <td>'.$cur_bal.'</td>
                                        <td>
                                            <a href="#acctEdit" data-toggle="modal" data-row-id='.$row['id'].' data-name-edit='.$row['name'].' data-type-edit='.$row['type'].'>
                                                <button type="button" class="btn btn-info btn-lg">Edit</button>
                                            </a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                        <tr>
                            <form action="insertacct.php" method="post">
                                <td></td>
                                <td>
                                    <input type="text" name="inName" id="name">
                                </td>
                                <td>
                                    <input type="text" name="inType" id="type">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="submit">Add</button></td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sbAccounts').toggleClass('active')
            });
            
        </script>
        
    </body>
</html>