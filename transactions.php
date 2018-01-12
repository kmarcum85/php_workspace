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
        
        <h2>Include all account transactions within this table</h2>
        
        <div id="tblAccounts" class="table-responsive">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Payee</th>
                        <th>Budget Category</th>
                        <th>Inbound</th>
                        <th>Outbound</th>
                        <th>Account Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1/1/2018</td>
                        <td>Cash</td>
                        <td>Busch Gardens</td>
                        <td>Alcohol</td>
                        <td></td>
                        <td>$9.00</td>
                        <td>$12.34</td>
                    </tr>
                    <tr>
                        <td>12/29/2017</td>
                        <td>Bank of America</td>
                        <td>Steam Software</td>
                        <td>Vidya Games</td>
                        <td></td>
                        <td>$39.99</td>
                        <td>$123.45</td>
                    </tr>
                    <tr>
                        <td>12/28/2017</td>
                        <td>Cash</td>
                        <td>Regal Cinemas</td>
                        <td>Movies</td>
                        <td></td>
                        <td>$27.00</td>
                        <td>$39.34</td>
                    </tr>
                    <tr>
                        <td>12/27/2017</td>
                        <td>Voya</td>
                        <td>Bank of America</td>
                        <td>401k</td>
                        <td>$1000.00</td>
                        <td></td>
                        <td>$4567.89</td>
                    </tr>
                    <tr>
                        <td>12/27/2017</td>
                        <td>Bank of America</td>
                        <td>Voya</td>
                        <td>401k</td>
                        <td></td>
                        <td>$1000.00</td>
                        <td>$123.45</td>
                    </tr>
                    <tr>
                        <td>12/26/2017</td>
                        <td>Bank of America</td>
                        <td></td>
                        <td>Paycheck</td>
                        <td>$1000.00</td>
                        <td></td>
                        <td>$1123.45</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sbTransactions').toggleClass('active')
        });
        
    </script>
    
</body>
</html>