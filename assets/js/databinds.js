var app = new Vue({
    el: '#app',
    data: {
        completeData: [],
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
        isSubmitted: false,
    },

    methods:{
        populatePreview: function(event){
            event.preventDefault(); 
            this.isSubmitted = true; 

            var dattas = document.querySelectorAll('.data');
            for (var i = 0; i < dattas.length; i++){
                this.completeData.push(dattas[i].innerHTML);
            }
            console.log(this.completeData);
        }
    }
})