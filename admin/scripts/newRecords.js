var vm = new Vue({
  el: "#app",
  data: {},

  methods: {
    changeViews: function() {
      let vtabs = document.querySelectorAll(".create_new a");
      for (let i = 0; i < vtabs.length; i++) {
        vtabs[i].addEventListener("click", function(event) {
            event.preventDefault();     
          var e = event.target.id;
          document.querySelector(".create_new a.active").classList.remove("active");
          document.querySelector("div.active").classList.remove("active");
          this.classList.add("active");
          document.querySelector("div#" + e).classList.add("active");
        });
      }
    }
  },

  mounted() {
    this.$nextTick(function() {
      this.changeViews();
    });
  }
});
