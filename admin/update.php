<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Update Records</title>
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
                    <div class="searchForms">
                        <p class="heading">Find User Record</p>
                        <div class='form'>
                            <div class="userName">
                                <input type="text" name="lastname" id="lastname" placeholder='Last Name'>
                            </div>
                            <div class="userCardNo">
                                <input type="text" name="cardno" v-model='cardNo' id="cardno" placeholder='Card No.'>
                            </div> 
                            <div id="buttons">
                                <button id='searchUser' @click='findUser' type="submit">Search <span></span></button>
                            </div>                           
                        </div>
                    </div>

                    <div class="mainDocs">
                        <p v-if='noRecords' id="info">No records yet</p>

                        <div v-if='recordsFound' class="updateForm">
                            <div class="tabsNavigation">
                                <ul>
                                    <li><a id="personal">personal information</a></li>
                                    <li><a id="location">location information</a></li>
                                    <li><a id="general">general information</a></li>
                                    <li><a id="national">national information</a></li>
                                </ul>
                            </div>
                            <div id='personal' class='active'>
                                <div>
                                    <label for="">full name</label>
                                    <input type="text" v-model='fullName'>
                                </div>
                                <div>
                                    <label for="">date of birth</label>
                                    <input type="date" v-model='dob'>
                                </div>
                                <div>
                                    <label for="">gender</label>
                                    <select name="gender" id="" v-model='gender'>
                                        <option value="" disabled>Choose gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">home address</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div id="location">
                                <div>
                                    <label for="">state of origin</label>
                                    <select name="" v-model='stateOfOrigin' id=""></select>
                                </div>
                                <div>
                                    <label for="">local government area</label>
                                    <select name="" v-model='lga' id=""></select>
                                </div>
                                <div>
                                    <label for="">home town</label>
                                    <input type="text" v-model='hometown'>
                                </div>
                                <div>
                                    <label for="">state of residence</label>
                                    <select name="" id="" v-model='stateOfResidence'></select>
                                </div>
                                <div>
                                    <label for="">local goverment area of residence</label>
                                    <select name="" id="" v-model='lgaOfResidence'></select>
                                </div>
                            </div>
                            <div id="general">
                                <div>
                                    <label for="">ethnic group</label>
                                    <select name="" id="" v-model='ethnicGroup'></select>
                                </div>
                                <div>
                                    <label for="">religion</label>
                                    <select name="" id="" v-model='religion'></select>
                                </div>
                                <div>
                                    <label for="">occupation</label>
                                    <select name="" id="" v-model='occupation'></select>
                                </div>
                                <div>
                                    <label for="">phone number</label>
                                    <input type="tel" v-model='phoneNumber'>
                                </div>
                                <div>
                                    <label for="">email address</label>
                                    <input type="email" v-model='email'>
                                </div>
                            </div>
                            <div id="national">
                                <div>
                                    <label for="">bank verification number</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">national identification number</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">voters identification number</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">international passport number</label>
                                    <input type="text">
                                </div>
                            </div> 
                            <div id="update">
                                <button type="submit">Update User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/updateRecords.js'></script>
</body>
</html>