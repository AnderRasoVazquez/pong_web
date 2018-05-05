function checkLogin() {
  var email = document.forms["login_form"]["inputEmail"].value;
  var pass = document.forms["login_form"]["inputPass"].value;
  // Comprobar si los datos de los campos son válidos
  if (isEmailCorrect(email) && isPassEmpty(pass)) {
    document.getElementById("login_form").submit();
  } else {
    if (!isEmailCorrect(email)){
      document.forms["login_form"]["inputEmail"].classList.add("is-invalid")
    } else {
      document.forms["login_form"]["inputEmail"].classList.remove("is-invalid")
    }
    if (!isPassEmpty(pass)){
      document.forms["login_form"]["inputPass"].classList.add("is-invalid")
    } else {
      document.forms["login_form"]["inputPass"].classList.remove("is-invalid")
    }
  }
}

function checkSignUp() {
  var username = document.forms["signup_form"]["inputUser"].value;
  var email = document.forms["signup_form"]["inputEmail"].value;
  var pass1 = document.forms["signup_form"]["inputPass"].value;
  var pass2 = document.forms["signup_form"]["inputPassRepeat"].value;
  if (isUsernameCorrect(username) && isEmailCorrect(email) && isPassCorrect(pass1) && pass1 == pass2){
    document.getElementById("signup_form").submit();
  } else {
    if (!isUsernameCorrect(username)) {
      document.forms["signup_form"]["inputUser"].classList.add("is-invalid")
    } else {
      document.forms["signup_form"]["inputUser"].classList.remove("is-invalid")
    }
    if (!isEmailCorrect(email)){
      document.forms["signup_form"]["inputEmail"].classList.add("is-invalid")
    } else {
      document.forms["signup_form"]["inputEmail"].classList.remove("is-invalid")
    }
    if (!isPassCorrect(pass1)){
      document.forms["signup_form"]["inputPass"].classList.add("is-invalid")
    } else {
      document.forms["signup_form"]["inputPass"].classList.remove("is-invalid")
    }
    if (pass1 != pass2){
      document.forms["signup_form"]["inputPassRepeat"].classList.add("is-invalid")
    } else {
      document.forms["signup_form"]["inputPassRepeat"].classList.remove("is-invalid")
    }
  }
}

function isUsernameCorrect(pUsername) {
  var correct = false;
  // Condición para que el nombre de Usuario sea aceptado
  correct = (pUsername != "");
  return correct;
}

function isPassEmpty(pPass){
  var correct = false;
  // Condición para que la contraseña sea aceptada
  correct = (pPass != "");
  return correct;
}

function isPassCorrect(pPass) {
  var correct = false;
  /*
    Código extraido de la respuesta de "anubhava" en:
    https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
  */
  var re = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$/
  // Condición para que la contraseña sea aceptada
  correct = re.test(pPass);
  return correct;
}

function isEmailCorrect(pEmail) {
  var correct = false;
  /*
    Código extraido de la respuesta de "sectrean" en:
    https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
  */
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  // Condiciones para que el email sea aceptado
  correct = re.test(pEmail);
  return correct;
}
