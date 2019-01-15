<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Reports</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Javascript Dependencies -->
    <script src="../assets/js/vue.js"></script>    
    <script src="../assets/js/axios.min.js"></script>
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
                <?php require_once('./pages/navigation.php')?>
            </div> 
            <div id="rightbar">            
                <div id="mainEnv">
                    <h3 class="section-header">Existing Database Records</h3>

                    <div class="table-responsive">
                        <table id="dbRecords" class="table">
                            <thead>
                                <tr>
                                    <th>Census No</th> 
                                    <th>Full Name</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Ethnic Group</th>
                                    <th>State of Origin</th>
                                    <th>LGA</th>
                                    <th>Hometown</th>
                                    <th>Religion</th>
                                    <th>Phone Number</th>
                                </tr>
                            </thead>

                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
</body>
</html>