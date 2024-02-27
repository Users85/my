let pole = document.getElementById("number-diet");

let plus = document.getElementsByClassName("js-plus-btn")[0];

let minus = document.getElementsByClassName("js-minus-btn")[0];

plus.addEventListener("click", function(){pole.value = parseInt(pole.value) + 1;});

minus.addEventListener("click", function(){if(parseInt(pole.value) > 1)pole.value = parseInt(pole.value) -+ 1;}); 