<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ondo State Centralized Census Board</title>
    <!-- Styling Rules -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Javascript Dependencies -->
    <script src="./assets/js/vue.js"></script>
</head>

<body>    
    <div id="app">
        <div class="wrapper">
            <!-- Cover Layer -->
            <div class="coverLayer loading" v-bind:class="{ active: isActive }">
            </div>            
            <!-- Main Card -->
            <div class="card loading" v-bind:class="{ active: isActive }">
                <div class="logo">
                    <h4>ondo state centralized census board</h4>
                    <p>census  card</p>
                </div>
                <div class="body">
                    <div class="passport">
                        <img v-bind:src="profilePicture" alt="">
                    </div>
                    <div class="details">
                        <div>
                            <p>Card No</p>
                            <p class="details">ONCC{{userID}}</p>
                        </div>
                        <div>
                            <p class='name'>{{fullName}}</p>
                        </div>
                        <div>
                            <div class="special">
                                <p>Age</p>
                                <p class="details">{{age}}</p>
                            </div>
                            <div class="special">
                                <p>Gender</p>
                                <p class="details">{{gender}}</p>
                            </div>
                        </div>
                        <div>
                            <p>Address</p>
                            <p class="details">{{homeAddress}}</p>
                        </div>
                        <div>
                            <p>Ethnic Group</p>
                            <p class="details">{{ethnicGroup}}</p>
                        </div>
                        <div>
                            <p>State of Origin</p>
                            <p class="details">{{stateOfOrigin}}</p>
                        </div>
                        <div>
                            <p>Phone Number</p>
                            <p class="details">{{phoneNumber}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="leftTab">
                <div class="content">
                    <div class="wrapLogo">
                        <div class="brandLogo"></div>
                    </div>
                    <div class="brandName">
                        <h3>ONDO STATE CENTRALIZED CENSUS BOARD</h3>
                        <p>
                            Project Proposal to Census Department of Ondo state, to enhance
                            data acquisition from the public.
                        </p>
                    </div>
                </div>
            </div>
            <div class="rightTab">
                <div id="loader"></div>
                <div class="content" v-if="isInitStarted">
                    <div class="brandName r_tab">
                        <p>welcome to</p>
                        <h3>ONDO-CCBS</h3>
                    </div>
                    <div class="mainContent">
                        <h1>Censused made easy.</h1>
                        <h4>Join millions in getting registered today.</h4>
                    </div>
                    <div class="action_button">
                        <button type="submit" v-on:click="getStarted">Get Started</button>
                    </div>
                </div>
                <div class="wrap-form" v-if="isStarted">
                    <div id="alert" class="alert">
                        <p id="msgAlert">Whats up guy</p>
                    </div>
                    <div id="image_section">
                        <div class="setImage">
                            <input type="file" name="" v-on:change="setImage">
                        </div>
                        <img v-bind:src="profilePicture" alt="">
                    </div>
                    <div id="tabs">
                        <div v-if="formOne" class="tab">
                            <h3>Personal Information</h3>
                            <div id="before_line">
                                <div id="after_line" :style="{width: growthBar + '%'}"></div>
                            </div>
                            <form action="">
                                <div>
                                    <label for="fullName">Full Name</label><span id="required">*</span>
                                    <input type="text" v-model="fullName" name="fn" id="fullName" placeholder="Full Name">
                                </div>
                                <div>
                                    <label for="DOB">Date of birth</label><span id="required">*</span>
                                    <input type="date" v-on:change="changeDOB" v-model="dob" name="dob" id="DOB">
                                </div>
                                <div>
                                    <label for="age">Age</label>
                                    <input type="number" disabled v-model="age" name="age" id="age">
                                </div>
                                <div>
                                    <label for="gender">Gender</label><span id="required">*</span>
                                    <select name="gender" v-model="gender" id="gender">
                                        <option value="" disabled>Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="homeAddress">Home Address</label><span id="required">*</span>
                                    <input type="text" v-model="homeAddress" name="" placeholder="eg: !2 Rufus Giwa, Way">
                                </div>                                
                            </form>
                            <div class="btn_group">
                                <button id="next" @click="validatePerson" type="submit">Next</button>
                            </div>
                        </div>
                        <div v-if="formTwo" class="tab">
                            <h3>Location Information</h3>
                            <div id="before_line">
                                <div id="after_line" :style="{width: growthBar + '%'}"></div>
                            </div>
                            <form action="">
                                <div>
                                    <label for="stateOfOrigin">State of origin</label><span id="required">*</span>
                                    <select name="" v-on:change="getLGA" id='state' v-model="stateOfOrigin">                                    
                                        <option value="" disabled></option>
                                        <option v-for="e in AvailableStates" v-bind:value="e">{{e}}</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="lga">local government area</label><span id="required">*</span>
                                    <select name="lga" id='lga' v-model="lga">
                                        <option value="" disabled>LGA</option>   
                                        <option v-for="e in stateLGAs" v-bind:value="e">{{e}}</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Hometown</label><span id="required">*</span>
                                    <input type="text" name="" v-model="hometown" id="" placeholder="eg: owo">
                                </div>
                                <div>
                                    <label for="">State of residence</label>
                                    <select name="sor" v-model="stateOfResidence" id="">
                                        <option value="" disabled>Residence</option>
                                        <option value="ondo">Ondo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">lga of residence</label>
                                    <select name="" v-model="lgaOfResidence" id="">
                                        <option value="" disabled>LGA</option>
                                        <option v-for="lga in ondoLGA" v-bind:value="lga">{{lga}}</option>
                                    </select>
                                </div>
                            </form>
                            <div class="btn_group">
                                <button id="previous" @click="previousForm" type="submit">Previous</button>
                                <button id="next" @click="validateLocation" type="submit">Next</button>
                            </div>
                        </div>
                        <div v-if="formThree" class="tab">
                            <h3>General Information</h3>
                            <div id="before_line">
                                <div id="after_line" :style="{width: growthBar + '%'}"></div>
                            </div>
                            <form action="">
                                <div>
                                    <label for="ethnicGroup">Ethnic Group</label><span id="required">*</span>
                                    <input type="text" name="" id="" v-model="ethnicGroup" id="ethnicGroup" placeholder='Ethnic group'>
                                </div>
                                <div>
                                    <label for="religion">Religion</label><span id="required">*</span>
                                    <select name="religion" v-model="religion" required='required' id="religion">
                                        <option value="" disabled>Religion</option>
                                        <option value="christian">Christianity</option>
                                        <option value="islam">Islam</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="occupation">occupation</label>
                                    <select name="occupation" v-model="occupation" id="occupation">
                                        <option value="" disabled>Occupation</option>
                                        <option value="student">Student</option>
                                        <option value="business">Business</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="military">Militiary Personnel</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="phone-number">phone number</label>
                                    <input type="tel" v-model="phoneNumber" name="" id="phone-number" placeholder="08012345678">
                                </div>
                                <div>
                                    <label for="email">Email Address</label>
                                    <input type="email" v-model="email" name="" id="email" placeholder="someone@example.com">
                                </div>
                            </form>
                            <div class="btn_group">
                                <button id="previous" @click="previousForm" type="submit">Previous</button>
                                <button id="next" @click="validateGeneral" type="submit">Next</button>
                            </div>
                        </div>
                        <div v-if="formFour" class="tab">
                            <h3>National Information</h3>
                            <div id="before_line">
                                <div id="after_line" :style="{width: growthBar + '%'}"></div>
                            </div>
                            <form action="">   
                                <div>
                                    <label for="bvn">Bank Verification Number</label>
                                    <input type="text" v-model="bvn" name="" placeholder="">
                                </div>
                                <div>
                                    <label for="nin">National Identification Number</label>
                                    <input type="text" v-model="nin" name="" placeholder="">
                                </div>
                                <div>
                                    <label for="vin">Voters Identification Number</label>
                                    <input type="text" v-model="vin" name="" placeholder="">
                                </div>
                                <div>
                                    <label for="passNum">International Passport Number</label>
                                    <input type="text" v-model="passNum" name="" placeholder="">
                                </div>
                                
                            </form>
                            <div class="btn_group">
                                <button id="previous" @click="previousForm" type="submit">Previous</button>
                                <button id="next" @click="validateNational" type="submit">Preview</button>
                            </div>
                        </div>
                        <div v-if="formCompleted" class="tab">
                            <div class="wrap_forms">
                                <div class="form_details">
                                    <p>full name</p>
                                    <h5>{{fullName}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>date of birth</p>
                                    <h5>{{dob}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>age</p>
                                    <h5>{{age}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>gender</p>
                                    <h5>{{gender}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>home address</p>
                                    <h5>{{homeAddress}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>state of origin</p>
                                    <h5>{{stateOfOrigin}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>local government area</p>
                                    <h5>{{lga}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>hometown</p>
                                    <h5>{{hometown}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>state of residence</p>
                                    <h5>{{stateOfResidence}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>LGA of residence</p>
                                    <h5>{{lgaOfResidence}}</h5>
                                </div>                                
                                <div class="form_details">
                                    <p>ethnic group</p>
                                    <h5>{{ethnicGroup}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>religion</p>
                                    <h5>{{religion}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>occupation</p>
                                    <h5>{{occupation}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>phone number</p>
                                    <h5>{{phoneNumber}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>email</p>
                                    <h5 class="email">{{email}}</h5>
                                </div>                                
                                <div class="form_details">
                                    <p>bank verification number</p>
                                    <h5>{{bvn}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>national identification number</p>
                                    <h5>{{nin}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>voters identification number</p>
                                    <h5>{{vin}}</h5>
                                </div>
                                <div class="form_details">
                                    <p>International Passport  Number</p>
                                    <h5 class="email">{{passNum}}</h5>
                                </div>
                            </div>
                            <div class="btn_group form_btn">
                                <button @click="cancelForm" id="cancel" type="submit"></button>
                                <button @click="confirmForm" id="confirm" type="submit"></button>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="processing" v-bind:class="{active: isProcessing}">
                    <div id="completed">
                        <div class="completedIcon"></div>
                        <h3 class="inform">Your form was submitted successfully.</h3>
                        <h4 class="action">Generating the Census Card</h4>
                        <div class="loader">
                            <div class='active'></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    
    <script src="./assets/js/axios.min.js"></script>
    <script src="./assets/js/databinds.js"></script>

</body>

</html>