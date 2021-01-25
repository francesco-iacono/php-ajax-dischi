import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
  {
    el: "#app",
    data: {
      logo: "https://i.pinimg.com/originals/7a/ec/a5/7aeca525afa2209807c15da821b2f2c6.png",
      discs: []
    },
    mounted: function () {
      axios
      .get("server.php")
      .then( (result) => {
        this.discs = result.data;
        console.log(result.data);
      })
    }
  }
);
