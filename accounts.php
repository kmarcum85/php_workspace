<html !DOCTYPE>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
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
    <?php
        //include header
        require('header.php');

        //include sidebar
        require('lsidebar.php');
    ?>
    
    <div id="content">
        
        <h2>Add your accounts to this page (savings, checking, cash, etc.)</h2>
        
        <div id="tblAccounts" class="table-responsive">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Date Added</th>
                        <th>Last Modified</th>
                        <th>Current Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bank of America</td>
                        <td>Checking</td>
                        <td>1/14/2012</td>
                        <td>1/12/2018</td>
                        <td>$123.45</td>
                    </tr>
                    <tr>
                        <td>Voya</td>
                        <td>401k</td>
                        <td>6/8/2008</td>
                        <td>1/12/2016</td>
                        <td>$4567.89</td>
                    </tr>
                    <tr>
                        <td>Cash</td>
                        <td>Cash</td>
                        <td>7/2/2015</td>
                        <td>3/5/2017</td>
                        <td>$12.34</td>
                    </tr>
                    <tr>
                        <td>GTE Financial</td>
                        <td>Savings</td>
                        <td>1/14/2012</td>
                        <td>1/12/2018</td>
                        <td>$567.89</td>
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