<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - New Records </title>
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
                <div id="alertBox">

                    <ul id='ul'>
                        <li v-for="(item, index) in required" :key="index">{{item}}</li>
                    </ul>
                    
                    <p id='error'>Provide Census card number</p>
            
                </div>            
                <div id="mainEnv">
                    <h3 class="section-header">Create new Registrant</h3>
                    <div class='create_new'>
                        <ul>
                            <li><a id='personal' href="" class='active'>Personal Information</a></li>
                            <li><a id='location' href="">Location Information</a></li>
                            <li><a id='general' href="">General Information</a></li>
                            <li><a id='national' href="">National Information</a></li>
                        </ul>
                        <div class="create_new_form">
                            <div id="personal" class='active'>
                                <div>
                                    <label for="fname">full name</label>
                                    <input type="text" name="Full Name" v-model='fullName' required id="" placeholder='Full Name'>
                                </div>
                                <div>
                                    <label for="dob">date of birth</label>
                                    <input type="date" required v-model='dob' name="Date of Birth" id="">
                                </div>
                                <div>
                                    <label for="">age</label>
                                    <input type="text" v-model='age' disabled>
                                </div>
                                <div>
                                    <label for="">gender</label>
                                    <select name="Gender" v-model='gender' required id="">
                                        <option value='' disabled>Choose gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">home address</label>
                                    <input type="text" v-model='homeAddress' name="Home Address" required id="" placeholder='Home Address'>
                                </div>                            
                            </div>
                            <div id="location">
                                <div>
                                    <label for="">state of origin</label>
                                    <select name="state" v-model='stateOfOrigin' required id="">
                                        <option value='' disabled>Choose state</option>
                                        <option value="aks">Akwa Ibom</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">local government of origin</label>
                                    <select name="LGA" v-model='lgaOfOrigin' required id="">
                                        <option value='' disabled>Choose LGA</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">home town</label>
                                    <input type="text" v-model='homeTown' name="Home Town" required id="" placeholder='Home Town'>
                                </div>  
                                <div>
                                    <label for="">state of residence</label>
                                    <select name="State of residence" v-model='stateOfResidence' required id="">
                                        <option value='' disabled>Choose state</option>
                                        <option value="aks">Akwa Ibom</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">local government of residence</label>
                                    <select name="Resident LGA" v-model='lgaOfResidence' required id="">
                                        <option value='' disabled>Choose LGA</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                            </div>
                            <div id="general">
                                <div>
                                    <label for="">ethnic group</label>
                                    <select name="Ethnic group" required v-model='ethnicGroup' id="">
                                        <option value='' disabled>Choose ethnic group</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">religion</label>
                                    <select name="religion" v-model='religion' required id="">
                                        <option value='' disabled>Choose religion</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Occupation</label>
                                    <select name="occupation" v-model='occupation' id="">
                                        <option value='' disabled>Choose occupation</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">phone number</label>
                                    <input type="tel" v-model='phoneNumber' placeholder='08012345678'>
                                </div>
                                <div>
                                    <label for="">email</label>
                                    <input type="email" v-model='email' name="" id="" placeholder='someone@example.com'>
                                </div>
                            </div>
                            <div id="national">
                                <div>
                                    <label for="">bank verification number</label>
                                    <input type="text" v-model='BVN' name="" id="" placeholder='BVN'>
                                </div>
                                <div>
                                    <label for="">national identification number</label>
                                    <input type="text" v-model='NIN' name="" id="" placeholder='NIN'>
                                </div>
                                <div>
                                    <label for="">voters identification number</label>
                                    <input type="text" v-model='VIN' name="" id="" placeholder='VIN'>
                                </div>
                                <div>
                                    <label for="">international passport number</label>
                                    <input type="text" v-model='IPN' name="" id="" placeholder='IPN'>
                                </div>
                            </div>
                        </div>
                        <div class="actionBtn">
                            <button type="submit" @click='newRegistrant'>Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src='../admin/scripts/newRecords.js'></script>
</body>
</html>