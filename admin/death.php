<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Death Records </title>
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
                    <div class="searchForms">
                        <p class="heading">Find User Record</p>
                        <div class='form'>
                            <div class="userName">
                                <input type="text" name="lastname" id="lastname" placeholder='Last Name'>
                            </div>
                            <div class="userCardNo">
                                <input type="text" name="cardno" id="cardno" placeholder='Card No.'>
                            </div> 
                            <div id="buttons">
                                <button id='searchUser' type="submit">Search <span></span></button>
                            </div>                           
                        </div>
                    </div>

                    <div class="mainDocs">
                        <p id="informatant">{{message}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/deathRecords.js'></script>
</body>
</html>