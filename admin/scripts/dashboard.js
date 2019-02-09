var vm = new Vue({
  el: "#app",
  data: {
    registeredCitizens: "",
    indigene: '',
    nonIndigene: '',
    recentRegistered: {
      fullName: "",
      age: "",
      gender: "",
      lga: "",
      profilePicture: "",
      stateOfOrigin: "",
      userId: ""
    },
    age: [],
    gender: [],
    occupation: [],
    religion: [],
  },

  methods: {
    populateDashBoard: function() {
      //dashboard
      var dash = axios
        .get(
          "http://localhost/Centralized-Census-Management-System/api/statistics/dashboard.php"
        )
        .then(response => {
          this.registeredCitizens = response.data.totalRegistered;
          this.indigene = response.data.indigene;
          this.nonIndigene = response.data.nonIndigene;
          this.recentRegistered.fullName = response.data.newUser.fullName;
          this.recentRegistered.age = response.data.newUser.age;
          this.recentRegistered.gender = response.data.newUser.gender;
          this.recentRegistered.lga = response.data.newUser.lga;
          this.recentRegistered.stateOfOrigin =
            response.data.newUser.stateOfOrigin;
          this.recentRegistered.userId = response.data.newUser.userId;
          this.recentRegistered.profilePicture =
            response.data.newUser.profilePicture;
        })
        .catch(err => console.log(err));

      //age
      var age = axios
        .get(
          "http://localhost/Centralized-Census-Management-System/api/statistics/age.php"
        )
        .then(response => {
          var data = response.data;
          for (const key in data) {
            this.age.push(data[key]);
          }
        })
        .catch(err => console.log(err));

      //occupation
      var occupation = axios
        .get(
          "http://localhost/Centralized-Census-Management-System/api/statistics/occupation.php"
        )
        .then(response => {
          var data = response.data;
          for (const key in data) {
            this.occupation.push(data[key]);
          }
        })
        .catch(err => console.log(err));

      //religion
      var religion = axios
        .get(
          "http://localhost/Centralized-Census-Management-System/api/statistics/religion.php"
        )
        .then(response => {
          var data = response.data;
          for (const key in data) {
            this.religion.push(data[key]);
          }
        })
        .catch(err => console.log(err));

      //gender
      var gender = axios
        .get(
          "http://localhost/Centralized-Census-Management-System/api/statistics/gender.php"
        )
        .then(response => {
          var data = response.data;
          for (const key in data) {
            this.gender.push(data[key]);
          }
        })
        .catch(err => console.log(err));

      return Promise.all([dash, age, occupation, religion, gender]);
    }
  },

  computed: {},

  mounted() {
    this.populateDashBoard()
      .then(() => {

        //Gender Charts
        var ctx = document.getElementById("gender");
        if (ctx) {
          ctx.height = 300;
          var myChart = new Chart(ctx, {
            type: "doughnut",
            data: {
              datasets: [
                {
                  label: "Gender",
                  data: this.gender,
                  backgroundColor: ["#00b5e9", "#fa4251"],
                  hoverBackgroundColor: ["#00b5e9", "#fa4251"],
                  borderWidth: 3,
                  borderColor: '#ffffff',
                  hoverBorderColor: ["transparent", "transparent"]
                }
              ],
              labels: ["Male", "Female"]
            },
            options: {
              maintainAspectRatio: false,
              responsive: true,
              cutoutPercentage: 55,
              animation: {
                animateScale: true,
                animateRotate: true
              },
              legend: {
                display: false
              },
              tooltips: {
                titleFontFamily: "Poppins",
                xPadding: 15,
                yPadding: 10,
                caretPadding: 0,
                bodyFontSize: 16
              },              
              title: {
                display: true,
                text: 'Gender Pie Chart'
              }
            }
          });
        }

        //Age Charts
        var ctxAge = document.getElementById('age');
        if (ctxAge) {
          ctxAge.height = 300;
          var myChart = new Chart(ctxAge, {
            type: 'bar',
            data: {
              datasets: [{
                label: 'Age Categories',
                data: this.age,
                backgroundColor: ["#00b5e9", "#fa4251",'#195bdc','#4b5659'],
                hoverBackgroundColor: ["#00b5e9", "#fa4251",'#195bdc','#4b5659'],
                hoverBorderColor: ["transparent", "transparent", "transparent", "transparent"]
              }],
              labels: ['Children','Youth','Adults','Elders'],
            },
            options: {
              responsive: true,
              legend: {
                position: 'top',
              },
              title: {
                display: true,
                text: 'Age Categories Chart'
              }
            }
          });
        }

        //Occupation Charts
        var ctxOccupation = document.getElementById('occupation');
        if (ctxOccupation) {
          ctxOccupation.height = 300;
          var myChart = new Chart(ctxOccupation, {
            type: 'line',
            data: {
              labels: ['Students','Teachers','Business','Military Personnel'],
              datasets: [{  
                label: 'Occupation Categories',   
                borderColor: "red",
                data: this.occupation,
                fill: false,
              }]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                text: 'Occupation Chart'
              },
              tooltips: {
                mode: 'index',
                intersect: false,
              },
              hover: {
                mode: 'nearest',
                intersect: true
              },
              scales: {
                xAxes: [{
                  display: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'Occupation'
                  }
                }],
                yAxes: [{
                  display: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'Value'
                  }
                }]
              }
            }
          });

        }

        //Religion Charts
        var ctxReligion = document.getElementById('religion');
        if (ctxReligion) {
          ctxReligion.height = 300;
          var myChart = new Chart(ctxReligion, {
            type: "pie",
            data: {
              datasets: [
                {
                  data: this.religion,
                  backgroundColor: ["#00b5e9", "#fa4251",'#4b5659'],
                  hoverBackgroundColor: ["#00b5e9", "#fa4251",'#4b5659'],
                  borderWidth: 3,
                  borderColor: '#ffffff',
                  hoverBorderColor: ["transparent", "transparent", "transparent"]
                }
              ],
              labels: ['Christianity','Islam','Others']
            },
            options: {
              maintainAspectRatio: false,
              responsive: true,
              animation: {
                animateScale: true,
                animateRotate: true
              },
              legend: {
                display: false
              },
              tooltips: {
                titleFontFamily: "Poppins",
                xPadding: 15,
                yPadding: 10,
                caretPadding: 0,
                bodyFontSize: 16
              },              
              title: {
                display: true,
                text: 'Religion Pie Chart'
              }
            }
          });
        }
      })
      .catch(err => console.log(err));
  }
});
