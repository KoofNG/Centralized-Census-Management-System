let mainApp = new Vue({
    el: '#app',
    data: {
        fullName: '',
        dob: '',
        age: 0,
        gender: '',
        ethnicGroup: '',
        stateOfOrigin: '',
        lga: '',
        hometown: '',
        stateOfResidence: '',
        lgaOfResidence: '',
        religion: '',
        occupation: '',
        phoneNumber: '',
        email: '',
        hiddenLayer: false,
        isInitStarted: true,
        isStarted: false,
        formOne: true,
        formTwo: false,
        formThree: false,
        formCompleted: false,
        precessing: false,
        growthBar: 33.3
    },

    methods: {
        popAlert: function () {
            document.getElementById('alert').classList.add('active');
            document.querySelector('#msgAlert').innerHTML = "Fill all required spaces";
            setTimeout(() => {
                document.getElementById('alert').classList.remove('active');
            }, 2000);
        },

        changeDOB: function () {
            let dateOfBirth = new Date(this.dob.valueOf());
            return this.age = ((new Date()).getFullYear().valueOf() - dateOfBirth.getFullYear());
        },

        getStarted: function () {
            this.isInitStarted = !this.isInitStarted
            document.getElementById('loader').classList.add('show')
            setTimeout(() => {
                document.getElementById('loader').classList.remove('show');
                this.isStarted = !this.isStarted;
            }, 1000);
        },

        validatePerson: function () {
            if ((this.fullName && this.dob && this.age && this.gender && this.ethnicGroup) == '') {
                this.popAlert();
            } else {
                this.growthBar = this.growthBar + 33.3;
                setTimeout(() => {
                    if (this.growthBar = 66.6) {
                        this.formOne = !this.formOne;
                        this.formTwo = !this.formTwo;
                    }
                }, 700);
            }
        },

        validateLocation: function () {
            if ((this.stateOfOrigin && this.lga && this.hometown) == '') {
                this.popAlert();
            } else {
                this.growthBar = this.growthBar + 33.3;
                setTimeout(() => {
                    if (this.growthBar = 99.9) {
                        this.formTwo = !this.formTwo;
                        this.formThree = !this.formThree;
                    }
                }, 700);
            }
        },

        validateGeneral: function () {
            if ((this.religion && this.occupation) == '') {
                this.popAlert();
            } else {
                this.formThree = !this.formThree;
                this.formCompleted = !this.formCompleted;
            }
        },

        previousForm: function () {
            if (this.formThree === true) {
                //this.controlGrowth(this.formThree, this.formTwo, this.growthBar);
                this.growthBar = this.growthBar - 33.3;
                setTimeout(() => {
                    this.formThree = !this.formThree;
                    this.formTwo = !this.formTwo;
                }, 700)
            } else {
                //this.controlGrowth(this.formTwo,this.formOne, this.growthBar);
                this.growthBar = this.growthBar - 33.3;
                setTimeout(() => {
                    this.formTwo = !this.formTwo;
                    this.formOne = !this.formOne;
                }, 700)
            }
        },

        cancelForm: function () {
            this.growthBar = 33.3;
            this.formCompleted = !this.formCompleted;
            this.formOne = !this.formOne;
        },

        confirmForm: function () {
            this.isStarted = !this.isStarted;
            this.precessing = !this.precessing;
        }

    },

    /* computed: {
        
    } */
});

/* let lineLoad = document.querySelectorAll(".loader>div");
for (let index = 0; index < lineLoad.length; index++) {
    let incremental = 0;
    setInterval(() => {
        incremental++;
        if (incremental === lineLoad.length) {
            lineLoad[index].classList.remove('active');
            incremental = 0
        }
        lineLoad[incremental].classList.add('active');
    }, 600);
} */


/* const FormData = {
            fullName: this.fullName,
            dob: this.dob,
            age: this.age,
            gender: this.gender,
            ethnicGroup: this.ethnicGroup,
            stateOfOrigin: this.stateOfOrigin,
            lga: this.lga,
            hometown: this.hometown,
            stateOfResidence: this.stateOfResidence,
            lgaOfResidence: this.lgaOfResidence,
            religion: this.religion,
            occupation: this.occupation,
            phoneNumber: this.phoneNumber,
            email: this.email
        } */