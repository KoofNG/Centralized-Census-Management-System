<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Index</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Scriptings -->
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
                    <p class="heading dash">Overview</p>
                    <div class="row-card">
                        <div class='card-one'>
                            <p id="data">{{registeredCitizens}}</p>
                            <p id='data-caption'>Registered Citizens</p>
                        </div>
                        <div class='card-two'>
                            <p id="data">{{indigene}}</p>
                            <p id='data-caption'>Indigene Citizens</p>
                        </div>
                        <div class='card-three'>
                            <p id="data">{{nonIndigene}}</p>
                            <p id='data-caption'>Non-Indigene Citizens</p>
                        </div>
                    </div>

                    <p class="heading dash">Newly Registered Citizen</p>
                    <div class="information-row">
                        <tr>
                            <p>ONDOCC000{{recentRegistered.userId}}</p>
                            <p>{{recentRegistered.fullName}}</p>
                            <p>{{recentRegistered.age}}</p>
                            <p>{{recentRegistered.gender}}</p>
                            <p>{{recentRegistered.stateOfOrigin}}</p>
                            <p>{{recentRegistered.lga}}</p>
                        </tr>
                    </div>


                    <p class="heading dash">Statistics</p>
                    <div class='statistics-card'>
                        <div><canvas id='gender'></canvas></div>
                        <div><canvas id='age'></canvas></div> 
                        <div><canvas id='occupation'></canvas></div>                     
                    </div>          
                    <div class="statistics-card">                        
                        <div><canvas id='religion'></canvas></div>    
                    </div>     
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../assets/js/Chart.js'></script>
    <script src='../admin/scripts/dashboard.js'></script><!-- 
    <script src='../admin/scripts/test.js'></script> -->
</body>
</html>