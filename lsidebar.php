<html !DOCTYPE>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sidebar_header.css">
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Custom Scroller Js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
</head>
<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-primary btn-md">
                    <i id="sbCollapseIcon" class="glyphicon glyphicon-arrow-left"></i>
                </button>
                <h3>Budget Tools</h3>
                <strong>BT</strong>
            </div>

            <ul class="list-unstyled components">
                
                <li id="sbHome">
                    <a href="home.php">
                        <i class="glyphicon glyphicon-home"></i>
                        Home
                    </a>
                </li>
                <li id="sbAccounts">
                    <a href="accounts.php">
                        <i class="glyphicon glyphicon-piggy-bank"></i>
                        Accounts
                    </a>
                </li>
                <li id="sbTransactions">
                    <a href="transactions.php">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        Transactions
                    </a>
                </li>
                <li id="sbBudget">
                    <a href="budget.php">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Budget
                    </a>
                </li>
                <li id="sbReports">
                    <a href="reports.php">
                        <i class="glyphicon glyphicon-stats"></i>
                        Reports
                    </a>
                </li>
                <li id="sbAbout">
                    <a href="about.php">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        About
                    </a>
                </li>
            </ul>

    </div>
    
    <script src="/assets/js/sidebar.js"></script>

</body>
</html>