var vm = new Vue({
    el: "#app",
    data: {
      searchCardNo: '',
      cardNo: "",
      fullName: "",
      dob: "",
      dod: "",
      tod: '',
      noRecords: true,
      recordsFound: false,
    },

    methods: {
      findUser: function () {
        if (this.searchCardNo.length === 0) {
          document.querySelector("#cardno").classList.add("error");  
          document.getElementById("alertBox").classList.add("active");   
          setTimeout(() => {
            document.getElementById("alertBox").classList.remove("active");
          }, 1500)     
        } else {
          document.querySelector('#loader').classList.add('show');
          this.noRecords = false;
          axios.get('http://localhost/Centralized-Census-Management-System/api/users/readSingle.php?userId='+this.searchCardNo)
            .then(response => {
              this.cardNo = response.data.userId;
              this.fullName = response.data.fullName;
              this.dob = response.data.dob;
              this.recordsFound = true;
              document.querySelector('#loader').classList.remove('show');
            })
            .catch(err => {
              console.log(err)
            });
        }
      },
      
      updateDeathRecord: function () {
        console.log('Okay')
      }
    },

    watch: {
      searchCardNo: function () {
        if(this.searchCardNo.length > 0){          
          return (document.querySelector("#cardno").classList.remove("error"));
        }
      }
    },
});
