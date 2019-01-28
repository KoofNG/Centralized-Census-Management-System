<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Birth Records </title>
    <link rel="stylesheet" href="../assets/css/main.css">
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
                    <h3 class="section-header">Create new Registrant</h3>
                    <div class='create_new'>
                        <ul>
                            <li><a href="" class='active'>Personal Information</a></li>
                            <li><a href="">Location Information</a></li>
                            <li><a href="">General Information</a></li>
                            <li><a href="">National Information</a></li>
                        </ul>
                        <div class="create_new_form">
                            <div id="personal" class='active'>
                                <div>
                                    <label for="fname">full name</label>
                                    <input type="text" name="" id="" placeholder='Full Name'>
                                </div>
                                <div>
                                    <label for="dob">date of birth</label>
                                    <input type="date" name="" id="">
                                </div>
                                <div>
                                    <label for="">age</label>
                                    <input type="text" disabled>
                                </div>
                                <div>
                                    <label for="">gender</label>
                                    <select name="gender" id="">
                                        <option value disabled='disabled'>Choose gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">home address</label>
                                    <input type="text" name="" id="" placeholder='Home Address'>
                                </div>                            
                            </div>
                            <div id="location">
                                <div>
                                    <label for="">state of origin</label>
                                    <select name="state" id="">
                                        <option value disabled='disabled'>Choose state</option>
                                        <option value="aks">Akwa Ibom</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">local government of origin</label>
                                    <select name="lga" id="">
                                        <option value disabled='disabled'>Choose LGA</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">home town</label>
                                    <input type="text" name="" id="" placeholder='Home Town'>
                                </div>  
                                <div>
                                    <label for="">state of residence</label>
                                    <select name="state" id="">
                                        <option value disabled='disabled'>Choose state</option>
                                        <option value="aks">Akwa Ibom</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">local government of residence</label>
                                    <select name="r_lga" id="">
                                        <option value disabled='disabled'>Choose LGA</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                            </div>
                            <div id="general">
                                <div>
                                    <label for="">ethnic group</label>
                                    <select name="ethnicGrp" id="">
                                        <option value disabled='disabled'>Choose ethnic group</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">religion</label>
                                    <select name="religion" id="">
                                        <option value disabled='disabled'>Choose religion</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Occupation</label>
                                    <select name="occupation" id="">
                                        <option value disabled='disabled'>Choose occupation</option>
                                        <option value="uyo">Uyo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">phone number</label>
                                    <input type="tel" placeholder='08012345678'>
                                </div>
                                <div>
                                    <label for="">email</label>
                                    <input type="email" name="" id="" placeholder='someone@example.com'>
                                </div>
                            </div>
                            <div id="national">
                                <div>
                                    <label for="">bank verification number</label>
                                    <input type="text" name="" id="" placeholder='BVN'>
                                </div>
                                <div>
                                    <label for="">national identification number</label>
                                    <input type="text" name="" id="" placeholder='NIN'>
                                </div>
                                <div>
                                    <label for="">voters identification number</label>
                                    <input type="text" name="" id="" placeholder='VIN'>
                                </div>
                                <div>
                                    <label for="">international passport number</label>
                                    <input type="text" name="" id="" placeholder='IPN'>
                                </div>
                            </div>
                        </div>
                        <div class="actionBtn">
                            <button type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
</body>
</html>