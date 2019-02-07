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
      //document.getElementById("alertBox").classList.add("active");
        var e = document.querySelectorAll("#ul>li");
        var ul = document.getElementById("ul");
        if(e.length != 0) {
          setTimeout(() => {
          for (let index = 0; index < e.length; index++) {
            var element = e[index];
            ul.removeChild(element);
          }
          document.getElementById("alertBox").classList.remove("active");
        }, 500);
        }
        

      var inputs = document.querySelectorAll(".create_new_form [required]");
      inputs.forEach(element => {
        if (element.value == "" || null) {
          this.required.push(element.name);
        }
      });

      console.log(this.required.length)


      
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
