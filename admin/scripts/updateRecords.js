let vm = new Vue({
  el: "#app",
  data: {
    userID: "",
    fullName: "",
    dob: "",
    age: 0,
    gender: "",
    ethnicGroup: "",
    homeAddress: "",
    stateOfOrigin: "",
    lga: "",
    hometown: "",
    stateOfResidence: "",
    lgaOfResidence: "",
    religion: "",
    occupation: "",
    phoneNumber: "",
    email: "",
    bvn: "",
    nin: "",
    vin: "",
    passNum: "",
    updatedInfo: "",
    cardNo: "",
    noRecords: true,
    recordsFound: false,
    show: true,
    ondoLGA: [
      "Akoko North-East",
      "Akoko North-West",
      "Akoko South-East",
      "Akoko South-West",
      "Akure North",
      "Akure South",
      "Ese Odo",
      "Idanre",
      "Ifedore",
      "Ilaje",
      "Ile Oluji/Okeigbo",
      "Irele",
      "Odigbo",
      "Okitipupa",
      "Ondo East",
      "Ondo West",
      "Ose",
      "Owo"
    ],
    AvailableStates: [
      "Abia",
      "Adamawa",
      "Akwa Ibom",
      "Anambra",
      "Bauchi",
      "Bayelsa",
      "Benue",
      "Borno",
      "Cross River",
      "Delta",
      "Ebonyi",
      "Edo",
      "Ekiti",
      "Enugu",
      "FCT",
      "Gombe",
      "Imo",
      "Jigawa",
      "Kaduna",
      "Kano",
      "Katsina",
      "Kebbi",
      "Kogi",
      "Kwara",
      "Lagos",
      "Nasarawa",
      "Niger",
      "Ogun",
      "Ondo",
      "Osun",
      "Oyo",
      "Plateau",
      "Rivers",
      "Sokoto",
      "Taraba",
      "Yobe",
      "Zamfara"
    ],
    fetchState: [],
    stateLGAs: []
  },

  methods: {
    changeDOB: function() {
      let dateOfBirth = new Date(this.dob.valueOf());
      return (this.age =
        new Date().getFullYear().valueOf() - dateOfBirth.getFullYear());
    },

    getLGA: function(event) {
      if (this.stateLGAs.length != 0) {
        this.stateLGAs.length = 0;
      }
      var choosenState = event.target.value;
      var choosenIndex = this.AvailableStates.indexOf(choosenState);
      var lgaArray = this.fetchState[choosenIndex].data.lgas;
      lgaArray.forEach(element => {
        var lgaName = element.data.name;
        this.stateLGAs.push(lgaName);
      });
    },

    changeViews: function() {
      let vtabs = document.querySelectorAll(".updateForm a");
      for (let i = 0; i < vtabs.length; i++) {
        vtabs[i].addEventListener("click", function(event) {
          var e = event.target.id;
          document
            .querySelector(".updateForm a.active")
            .classList.remove("active");
          document.querySelector("div.active").classList.remove("active");
          this.classList.add("active");
          document.querySelector("div#" + e).classList.add("active");
        });
      }
    },

    findUser: function() {
      if (this.cardNo.length != 0) {
        document.getElementById("loader").classList.add("show");
        var getUser = axios
          .get(
            "http://localhost/Centralized-Census-Management-System/api/users/readSingle.php?userId=" +
              this.cardNo
          )
          .then(response => {
            this.userID = response.data.userId;
            this.fullName = response.data.fullName;
            this.dob = response.data.dob;
            this.age = response.data.age;
            this.gender = response.data.gender;
            this.homeAddress = response.data.homeAddress;
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
            this.bvn = response.data.bvn;
            this.nin = response.data.nim;
            this.vin = response.data.vin;
            this.passNum = response.data.passportNumber;
            setTimeout(() => {
              document.getElementById("loader").classList.remove("show");
              this.noRecords = false;
              this.recordsFound = true;
            }, 1000);
          })
          .catch(err => console.log(err));
      } else {
        document.getElementById("alertBox").classList.add("active");
        this.noRecords = true;
        this.recordsFound = false;
        setTimeout(() => {
          document.getElementById("alertBox").classList.remove("active");
        }, 1500);
        document.querySelector("#cardno").classList.add("error");
      }
    },

    updateUser: function() {
      const FormData = {
        userId: this.cardNo,
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
        email: this.email,
        homeAddress: this.homeAddress,
        bvn: this.bvn,
        nim: this.nin,
        vin: this.vin,
        passportNumber: this.passNum
      };
      axios
        .post(
          "http://localhost/Centralized-Census-Management-System/api/users/updateUser.php",
          FormData
        )
        .then(response => {
          console.log(response.status);
          alert('User information Updated');
        })
        .catch(err => {
          console.log(err);
        });
    }
  },

  mounted() {
    this.$nextTick(function() {
      this.changeViews();
    });
  },

  updated() {
    this.changeViews();
  },

  watch: {
    cardNo: function() {
      return document.querySelector("#cardno").classList.remove("error");
    }
  }
});
