var vm = new Vue({
  el: "#app",
  data: {
    fullName: "",
    dob: "",
    age: "",
    gender: "",
    homeAddress: "",
    stateOfOrigin: "",
    lgaOfOrigin: "",
    homeTown: "",
    stateOfResidence: "",
    lgaOfResidence: "",
    ethnicGroup: "",
    religion: "",
    occupation: "",
    phoneNumber: "",
    email: "",
    BVN: "",
    NIN: "",
    VIN: "",
    IPN: "",
    inComplete: false,
    required: []
  },

  methods: {
    changeViews: function() {
      let vtabs = document.querySelectorAll(".create_new a");
      for (let i = 0; i < vtabs.length; i++) {
        vtabs[i].addEventListener("click", function(event) {
          event.preventDefault();
          var e = event.target.id;
          document.querySelector(".create_new a.active").classList.remove("active");
          document.querySelector(".create_new div.active").classList.remove("active");
          this.classList.add("active");
          document.querySelector("div#" + e).classList.add("active");
        });
      }
    },

    newRegistrant: function() {
      if (this.required.length > 0) {
        this.required.length = 0;
      }
      var inputs = document.querySelectorAll(".create_new_form [required]");
      inputs.forEach(element => {
        if (element.value == "" || null) {
          this.required.push(element.name);
        }    
      });


      if (this.required.length === 0){
        console.log('Submit form here')
      }
    },      
      
  },

  watch: {
    required: function () {
      var e = document.querySelectorAll("#ul>li");
      if (this.required.length != 0){
        document.getElementById("alertBox").classList.add("active");
        this.inComplete = true;
        return (
          setTimeout(() => {   
            document.getElementById("alertBox").classList.remove("active");
            for (let index = 0; index < e.length; index++) {
              var element = e[index];
              document.getElementById("ul").removeChild(element);
            }
            this.inComplete = false;
        }, 2000));
      }
    }
  },

  mounted() {
    this.$nextTick(function() {
      this.changeViews();
    });
  },

  updated() {
    this.changeViews();
  }
});
