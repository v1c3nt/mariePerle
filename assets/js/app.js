import "../scss/app.scss";
import React from "react";
import reactDOM from "react-dom";

require("@fortawesome/fontawesome-free/css/all.min.css");
require("@fortawesome/fontawesome-free/js/all.js");
require("htmx.org");
// import axios from 'axios';
import Article from "./components/Article";
import Gsap from "./Components/GSAPComponent.jsx";
import { gsap } from "gsap";

import open from "../images/open.png";
import close from "../images/close.png";
import { css, timers } from "jquery";

// start the Stimulus application
// import './bootstrap';
var app = {
  init: function () {
    console.log("made with 💖 and little 🍺");

    gsap.to(".main-image", { duration: 2.5, ease: "expo", x: -75 });
    $(".main-image").on("mouseenter", app.scal);
    $(".main-image").on("mouseleave", app.scalOff);
    $("#modal-wrapper").on("click", '#close', app.closeModal);

    //---- supprime le flash message automatiquement au bout de 8sec
    app.removeFlash();

    // test axios
    //  axios.get('http://127.0.0.1:8000/api/articles')
    //     .then( function (response){
    //         console.log(response);
    //     })
    //     .catch( () => false)
    //     ;
  },
  removeFlash: function () {
    $(".a-flash")
      .delay(5000)
      .queue(function () {
        $(this).remove();
      });
  },

  scal: function () {
    gsap.to($(this), {
      scale: 1.5,
      duration: 1,
      boxShadow: "1px 1px 10px 10px #2c2c2c",
    });
    gsap.to($(this), { duration: 1, ease: "expo" });
    gsap.set($(this), { zIndex: 2 });
  },
  scalOff: function () {
    gsap.set($(this), { zIndex: 1 });
    // gsap.set(this.target, {zIndex: 0});
    gsap.to($(this), {
      scale: 1,
      duration: 1.2,
      boxShadow: "2px 3px 7px 2px #2c2c2c",
    });
  },
  closeModal: function closeModal() {
    console.log('ici');
    $('#background-blur').remove();
  },
};
$(app.init);

// reactDOM.render(<Gsap/>, document.getElementById('header'));
