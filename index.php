<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <!-- Styling Rules -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Javascript Dependencies -->
    <script src="./assets/js/vue.js"></script>
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <div class="leftTab">
                <h1>ONDO STATE CENSUS MANAGEMENT SYSTEM</h1>
            </div>
            <div id="tabs">
                <div id="loader"></div>
                <div id="welcome" class="tab active">
                    <div class="logo"></div>
                    <div class="description">
                        <h3 class="description">Get Registered</h3>
                        <p class="body">Join millions in getting Censused Today!</p>
                    </div>
                    <div id="button">
                        <button id="next" class="getStarted">Get Started</button>
                    </div>
                </div>
                <div id="personalInfo" class="tab">
                    <div id="persona" class="imagery">
                        <h3 class="caption">Personal Information</h3>
                    </div>
                    <div class="formContent">
                        <div>
                            <label for="fullname">Full Name</label>
                            <input type="text" v-model.trim="fullname"  name="fn" id="fullname" placeholder="Full Name">
                        </div>
                        <div>
                            <label for="DOB">Date of birth</label>
                            <input type="date" v-model.trim="dateOfBirth"  name="dob" id="DOB">
                        </div>
                        <div>
                            <label for="age">Age</label>
                            <input type="number" v-model.trim.number="age"  name="age" id="age">
                        </div>
                        <div>
                            <label for="gender">Gender</label>
                            <select name="gender" v-model.trim="gender"  id="gender">
                                <option value="" disabled></option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>
                        <div>
                            <label for="ethnicgroup">Ethnic Group</label>
                            <select name="ethnic" v-model.trim="ethnicGroup"  id="ethnicgroup">
                                <option value="" disabled></option>
                                <option value="yoruba">Yoruba</option>
                                <option value="ikale">Ikale</option>
                                <option value="ilaje">Ilaje</option>
                            </select>
                        </div>
                    </div>
                    <div id="buttons">
                        <button id="next" class="next special unique">Next</button>
                    </div>
                </div> 
                <div id="locationInfo" class="tab">
                    <div id="location" class="imagery">
                        <h3 class="caption">Location Information</h3>
                    </div>
                    <div class="formContent">
                        <div>
                            <label for="stateoforigin">State of origin</label>
                            <select name="stateoforigin" v-model.trim="stateOfOrigin" id="stateoforigin" >
                                <option value="" disabled></option>
                                <option value="ondo">Ondo</option>
                            </select>
                        </div>
                        <div>
                            <label for="lga">local government area</label>
                            <select name="lga" id="" v-model.trim="lga"  >
                                <option value="" disabled></option>
                                <option value="ondo">Ondo</option>
                                <option value="ondo">Owo</option>
                                <option value="ondo">Akure</option>
                                <option value="ondo">Akoko</option>
                                <option value="ondo">Oka</option>
                            </select>
                        </div>
                        <div>
                            <label for="age">Hometown</label>
                            <input type="text" name="" v-model.trim="homeTown" id=""  placeholder= "eg: owo">
                        </div>
                        <div>
                            <label for="stateofresidence">State of residence</label>
                            <select name="stateofresidence" v-model.trim="stateofResidence" id="" >
                                <option value="" disabled></option>
                                <option value="ondo">Ondo</option>
                            </select>
                        </div>
                        <div>
                            <label for="lgaofresidence">lga of residence</label>
                            <select name="lgaofresidence" v-model.trim="lgaOfResidence"  id="">
                                <option value="" disabled></option>
                                <option value="ondo">Ondo</option>
                            </select>
                        </div>
                    </div>
                    <div id="buttons">
                        <button id="previous" class="previous">Previous</button>
                        <button id="next" class="next">Next</button>
                    </div>
                </div>
                <div id="generalInfo" class="tab">                
                    <div id="general" class="imagery">
                        <h3 class="caption">General Information</h3>
                    </div>
                    <div class="formContent">
                        <div>
                            <label for="religion">Religion</label>
                            <select name="religion" v-model.trim="religion"  id="religion">
                                <option value="" disabled></option>
                                <option value="christian">Christianity</option>
                                <option value="islam">Islam</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div>
                            <label for="occupation">occupation</label>
                            <select name="occupation" v-model.trim="occupation"  id="occupation">
                                <option value="" disabled></option>
                                <option value="student">Student</option>
                                <option value="business">Business</option>
                                <option value="teacher">Teacher</option>
                                <option value="military">Militiary Personnel</option>
                            </select>
                        </div>
                        <div>
                            <label for="phone-number">phone number</label>
                            <input type="tel" v-model.trim="phonenumber"  name="" id="phone-number" placeholder="08012345678">
                        </div>
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" v-model.trim="email" name="" id="email" placeholder="someone@example.com">
                        </div>
                    </div>
                    <div id="buttons">
                        <button id="previous" class="previous">Previous</button>
                        <button id="next" class="next">Next</button>
                    </div>
                </div>
                <div id="profilePic" class="tab">                
                    <div id="profile" class="imagery">
                        <h3 class="caption">Profile Picture</h3>
                    </div>
                    <div class="formContent">
                        <div>
                            <label for="religion">Upload Picture</label>
                            <input type="file"  name="" id="">
                        </div>
                    </div>
                    <div id="buttons">
                        <button id="previous" class="previous">Previous</button>
                        <button id="next" @click="populatePreview" class="next">Preview</button>
                    </div>
                </div>
                <div id="preview" v-if="isSubmitted" class="tab"> 
                    <div class="image"><img alt="" srcset=""></div>
                    <div class="aboutme">
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{fullname}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{dateOfBirth}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{age}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{gender}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{ethnicGroup}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{stateOfOrigin}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{lga}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{homeTown}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{stateofResidence}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{lgaOfResidence}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{religion}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{occupation}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{phonenumber}}</p>
                        </div>
                        <div>
                            <label for="" class="cap"></label>
                            <p class="data">{{email}}</p>
                        </div>                        
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/databinds.js"></script>
    <script src="./assets/js/controls.js"></script>
</body>
</html>