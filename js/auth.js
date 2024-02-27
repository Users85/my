const axios = require('axios/dist/browser/axios.cjs'); // browser

let email = document.getElementById('email');
let pass = document.getElementById('pass');

axios.post('http://myproject/index.php', {
    email: email.value,
    pass: pass.value
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });