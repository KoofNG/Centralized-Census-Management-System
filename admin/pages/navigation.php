<?php
    
    echo '
        <div class="header">
        <a href="./index.php">ONDO-CCMS</a>
        </div>
        <div class="navigation">
        <ul>
            <li><a href="./index.php"><span id="overview"></span>Dashboard</a></li>
            <li><a href="./reports.php"><span id="reports"></span>View Records</a></li>            
            <li><a href="" id="moreRecords"><span id="records"></span>Records</a>
                <ul class="moreLinks">
                    <li><a href="./new.php">New Records</a></li>
                    <li><a href="./update.php">Update Records</a></li>
                    <li><a href="./death.php">Death Records</a></li>
                </ul>
            </li>
            <li><a href="./accounts.php"><span id="accounts"></span>Accounts</a></li>
        </ul>
        </div>
    '

    /* <li><a href="./generateReports.php"><span id="greports"></span>Generate Reports</a></li> */

?>