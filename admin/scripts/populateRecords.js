let vm = new Vue({
    el: '#app',
    data: {
        userRecords: []
    },

    methods: {
        fillArr: function () {
            axios.get('http://localhost/Centralized-Census-Management-System/api/users/read.php')
                .then(response => {
                    this.userRecords = response.data.Users;
                })
                .catch(err => console.log(err));
        }
    },

    mounted() {
        this.$nextTick(function () {
            this.fillArr();
        });
    },
});