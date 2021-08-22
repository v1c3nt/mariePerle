import '../scss/app.scss';
import React from 'react';
import reactDOM from 'react-dom';

require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');
import axios from 'axios';
import Article from './components/Article';


// start the Stimulus application
// import './bootstrap';
var app = {
     init: function () {
         console.log('made with 💖 and little 🍺');

        // test axios
        //  axios.get('http://127.0.0.1:8000/api/articles')
        //     .then( function (response){
        //         console.log(response);
        //     })
        //     .catch( () => false)
        //     ;
         },
    }
$(app.init);
reactDOM.render(<Article />, document.getElementById('buttonReact'));