var app = new Vue({
    el: '#app',
    data: {
        fullname: '',
        dateOfBirth: '',
        age: '',
        gender: '',
        ethnicGroup: '',
        stateOfOrigin: '',
        lga: '',
        homeTown: '',
        stateofResidence: '',
        lgaOfResidence: '',
        religion: '',
        occupation: '',
        phonenumber: '',
        email: '',
    },

    methods:{
        populatePreview: function(event){
            event.preventDefault(); 
            const FormData = {
                fullname: this.fullname,
                dateOfBirth: this.dateOfBirth,
                age: this.age,
                gender: this.gender,
                ethnicGroup: this.ethnicGroup,
                stateOfOrigin: this.stateOfOrigin,
                lga: this.lga,
                homeTown: this.homeTown,
                stateofResidence: this.stateofResidence,
                lgaOfResidence: this.lgaOfResidence,
                religion: this.religion,
                occupation: this.occupation,
                phonenumber: this.phonenumber,
                email: this.email
            }

            console.log(FormData);
            axios.post('http://localhost/Centralized-Census-Management-System/api/users/createUser.php',FormData)
                .then(res => console.log(res))
                .catch(error => console.log(error));
        }
    }
})