<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Update Records</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <div id="app">
        <div class="wrap">   
            <div id="navbar">
                <div class='c_menu'>                    
                    <span id='collapse'></span>
                </div>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Card No."><span id='search'></span>
                </div>
            </div>
            <div id="sidebar">
                <div class="header">
                    <a href="./index.php">ONDO-CCMS</a>
                </div>
                <div class="navigation">
                    <ul>
                        <li><a href="./index.php"><span id='overview'></span>Dashboard</a></li>
                        <li><a href="./reports.php"><span id='reports'></span>View Reports</a></li>
                        <li><a href="./generateReports.php"><span id='greports'></span>Generate Reports</a></li>
                        <li><a href="" id='moreRecords'><span id='records'></span>Records</a>
                            <ul class='moreLinks'>
                                <li><a href="./update.php">Update Records</a></li>
                                <li><a href="./birth.php">Birth Records</a></li>
                                <li><a href="./death.php">Death Records</a></li>
                            </ul>
                        </li>
                        <li><a href="./accounts.php"><span id='accounts'></span>Accounts</a></li>

                    </ul>
                </div>
            </div> 
            <div id="rightbar">            
                <div id="mainEnv">
                    <div class="searchForms">
                        <p class="heading">Find User Record</p>
                        <div class='form'>
                            <div>
                                <label for="lastname">Enter Last Name</label>
                                <input type="text" name="lastname" id="lastname" placeholder='Last Name'>
                            </div>
                            <div>
                                <label for="cardno">Enter Card No.</label>
                                <input type="text" name="cardno" id="cardno" placeholder='Card No.'>
                            </div> 
                            <div>
                                <label for="">.</label>
                                <button id='searchUser' type="submit">Search <span></span></button>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
</body>
</html>