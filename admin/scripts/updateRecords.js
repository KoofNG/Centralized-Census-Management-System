let vm = new Vue({
    el: '#app',
    data: {
        fullName: '',
        dob: '',
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

        updatedInfo: '',
        cardNo: '',
        noRecords: true,
        recordsFound: false,
    },
    methods: {
        changeViews: function () {
            let vtabs = document.querySelectorAll('.updateForm a');
            for (let i = 0; i < vtabs.length; i++) {
                vtabs[i].addEventListener('click', function (event) {
                    var e = event.target.id;
                    document.querySelector('.updateForm a.active').classList.remove('active');
                    document.querySelector('div.active').classList.remove('active');
                    this.classList.add('active');
                    document.querySelector('div#' + e).classList.add('active');
                });
            }
        },

        findUser: function () {
            console.log(this.cardNo);
            axios.get('http://localhost/Centralized-Census-Management-System/api/users/readSingle.php?userId=' + this.cardNo)
                .then(response => {
                    this.fullName = response.data.fullName;
                    this.dob = response.data.dob;
                    this.gender = response.data.gender;
                    this.stateOfOrigin = response.data.stateOfOrigin;
                    this.lga = response.data.lga;
                    this.hometown = response.data.hometown;
                    this.stateOfResidence = response.data.stateOfResidence;
                    this.lgaOfResidence = response.data.lgaOfResidence;
                    this.ethnicGroup = response.data.ethnicGroup;
                    this.religion = response.data.religion;
                    this.occupation = response.data.occupation;
                    this.phoneNumber = response.data.phoneNumber;
                    this.email = response.data.email;
                    this.noRecords = false;
                    this.recordsFound = true;
                })
                .catch(err => console.log(err));
        }
    },

    mounted() {
        this.$nextTick(function () {
            this.changeViews();
        })
    },

    updated() {
        this.changeViews();
    },
});