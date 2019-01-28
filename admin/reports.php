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

                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th class='image'><p>Picture</p></th>
                                    <th class='card'><p>Census Card No.</p></th>
                                    <th class='name'><p>Full Name</p></th>
                                    <th class='combo'><p>Gender/Age</p></th>
                                    <th class='religion'><p>Religion</p></th>
                                    <th class='soo'><p>State of Origin</p></th>
                                    <th class='actions'><p>Action</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row" v-for="user in userRecords" :key="user.userId">
                                    <td class='image'>
                                        <div class="userImage">
                                            <img src="../assets/images/koof.jpg" alt="">
                                        </div>
                                    </td>
                                    <td class='card'><p class="cNumber">ONDOCC{{user.userId}}</p></td>
                                    <td class='name'><p class="title">{{user.fullName}}</p></td>
                                    <td class='combo'><p class="title">{{user.gender}},{{user.age}}years</p></td>
                                    <td class='religion'><p class="title">{{user.religion}}</p></td>
                                    <td class='soo'><p class="title">{{user.stateOfOrigin}}</p></td>
                                    <td class='actions'><div class="moreBtn"></div></td>
                                </tr>                        
                            </tbody>
                        </table>                 
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/populateRecords.js'></script>
</body>
</html>