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
                <div id="loader"></div>    
                <div id="alertBox"><p id='error'>Provide Census card number</p></div>           
                <div id="mainEnv">
                    <div class="searchForms">
                        <p class="heading">Find User Record</p>
                        <div class='form'>
                            <div class="userName">
                                <input type="text" name="lastname" id="lastname" placeholder='Last Name'>
                            </div>
                            <div class="userCardNo">
                                <input type="text" name="cardno" v-model='searchCardNo' id="cardno" placeholder='Card No.'>
                            </div> 
                            <div id="buttons">
                                <button id='searchUser' @click='findUser' type="submit">Search <span></span></button>
                            </div>                           
                        </div>
                    </div>

                    <div class="mainDocs">                        
                        <p v-if='noRecords' class="heading" id="info">No records yet</p>
                        <transition name='slide-fade'>
                            <div v-if="recordsFound" class="deathForm">                                
                                <p class="heading">User record found</p>
                                <form @submit.prevent='updateDeathRecord' action="">                                    
                                    <div>
                                        <label for="cardno">Census Card Number</label>
                                        <input type="text" disabled id='cardno' v-bind:value='cardNo'>
                                    </div>
                                    <div>
                                        <label for="fname">full name</label>
                                        <input type="text" disabled id='fname' v-bind:value='fullName'>
                                    </div>
                                    <div>
                                        <label for="dob">date of birth</label>
                                        <input type="date" disabled id='dob' v-bind:value='dob'>
                                    </div>
                                    <div>
                                        <label for="dod">date of death</label>
                                        <input type="date" id='dod' v-model='dod'>
                                    </div>
                                    <div>
                                        <label for="tod">time of death</label>
                                        <input type="time" id='tod' name="" id="" v-model='tod'>
                                    </div>
                                    <div id="update">
                                        <button type="submit">Update User</button>
                                    </div>
                                </form>
                            </div>                        
                        </transition> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/deathRecords.js'></script>
</body>
</html>