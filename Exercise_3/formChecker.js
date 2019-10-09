function checkForm() {
  cont = true;
  error = document.getElementById('error');
  username = document.getElementById('username');
  quantity1 = document.getElementById('cannoli_amt');
  quantity2 = document.getElementById('cookie_amt');
  quantity3 = document.getElementById('cake_amt');
  var quant1_num_check = Number(quantity1.value);
  var quant2_num_check = Number(quantity2.value);
  var quant3_num_check = Number(quantity3.value);

  if ((isNaN(quantity1.value)) || (isNaN(quantity2.value)) || (isNaN(quantity3.value))) { //makes sure the quantities are numbers and not strings
    cont = false;
    console.log("must be a number");
  }
  if ((quantity1.value < 0) || (quantity2.value < 0) || (quantity3.value < 0)) { //if the quantity is negative
    cont = false;
    error.removeAttribute('hidden');
  }
  if (username.value.includes("@") == true) { //contains an @ symbol
    if (helperCharCounter(username.value, '@') == 1 && helperCharCounter(username.value, '.') == 1 ){ //contains one and only one @ symbol and . symbol
      if (username.value.endsWith(".com") == false){ //if it does not end with ".com"
        cont = false;
        error.removeAttribute('hidden');
      }
    }
    else {
      cont = false;
      error.removeAttribute('hidden');
    }
  }
  else {
    cont = false;
    error.removeAttribute('hidden');
  }
  if (cont == false) {
    error.removeAttribute('hidden');
    event.preventDefault();
  }
}

//This function comes from https://www.w3resource.com/javascript-exercises/javascript-function-exercise-22.php
function helperCharCounter(str, char) {
  var count = 0;
  for (var i = 0; i < str.length; i++) {
    if (str.charAt(i) == char) {
      count++;
    }
  }
  return(count);
}
