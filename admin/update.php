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
                                <input type="text" name="cardno" v-model='cardNo' id="cardno" placeholder='Card No.'>
                            </div> 
                            <div id="buttons">
                                <button id='searchUser' @click='findUser' type="submit">Search <span></span></button>
                            </div>                        
                        </div>
                    </div>
                    <div class="mainDocs">
                        <p v-if='noRecords' class="heading" id="info">No records yet</p>
                        <transition name='slide-fade'>
                            <div v-if='recordsFound' class="updateForm">
                                <p class="heading">User record found</p>
                                <div class="create_new">
                                    <ul>
                                        <li><a id="personal" class='active'>personal information</a></li>
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
                                        <input type="date" v-on:change="changeDOB" v-model='dob'>
                                    </div>
                                    <div>
                                        <label for="age">Age</label>
                                        <input type="number" disabled v-model="age" name="age" id="age">
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
                                        <input type="text" v-model="homeAddress">
                                    </div>
                                </div>
                                <div id="location">
                                    <div>
                                        <label for="">state of origin</label>
                                        <select name="" v-on:change="getLGA" v-model='stateOfOrigin' id="">
                                            <option value disabled>Choose State</option>
                                            <option v-for="(item, index) in AvailableStates" :key="index" v-bind:value="item">{{item}}</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">local government area</label>
                                        <select name="" v-model='lga' id="">                                        
                                            <option value="" disabled>LGA</option>   
                                            <option v-for="e in stateLGAs" v-bind:value="e">{{e}}</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">home town</label>
                                        <input type="text" v-model='hometown'>
                                    </div>
                                    <div>
                                        <label for="">state of residence</label>
                                        <select name="" id="" v-model='stateOfResidence'>
                                            <option value disabled>Choose State</option>
                                            <option value="Ondo">Ondo State</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">local goverment area of residence</label>
                                        <select name="" id="" v-model='lgaOfResidence'>                                            
                                            <option value disabled>Choose LGA</option>
                                            <option v-for="(item, index) in ondoLGA" :key="index" v-bind:value="item">{{item}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="general">
                                    <div>
                                        <label for="">ethnic group</label>
                                        <input type="text" name="" id="" v-model='ethnicGroup'>
                                    </div>
                                    <div>
                                        <label for="">religion</label>
                                        <select name="" id="" v-model='religion'>
                                            <option value="" disabled>Religion</option>
                                            <option value="christian">Christianity</option>
                                            <option value="islam">Islam</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">occupation</label>
                                        <select name="" id="" v-model='occupation'>
                                            <option value="" disabled>Occupation</option>
                                            <option value="student">Student</option>
                                            <option value="business">Business</option>
                                            <option value="teacher">Teacher</option>
                                            <option value="military">Militiary Personnel</option>
                                        </select>
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
                                        <input type="text" v-model="bvn">
                                    </div>
                                    <div>
                                        <label for="">national identification number</label>
                                        <input type="text" v-model="nin">
                                    </div>
                                    <div>
                                        <label for="">voters identification number</label>
                                        <input type="text" v-model="vin">
                                    </div>
                                    <div>
                                        <label for="">international passport number</label>
                                        <input type="text" v-model="passNum">
                                    </div>
                                </div> 
                                <div id="update">
                                    <button type="submit" v-on:click='updateUser'>Update User</button>
                                </div>
                            </div>
                        </transition>                        
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/updateRecords.js'></script>
</body>
</html>