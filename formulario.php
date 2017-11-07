<!DOCTYPE html>
<html lang="pt_BR">

<head>
<link rel="stylesheet" type="text/css" href="stylo.css">
<title>Trocar Senha</title>
</head>
<body>
<div class="container">
  <form action="metodo_post.php" method="post">
    <label for="usrname">Senha Atual</label>
    <input type="password" id="old_psw" name="old_psw">
	
	<label for="usrname">Nova Senha</label>
	<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Precisa ter uma letra maiuscula,uma minuscula, um numero e no minimo oito characteres" required>

    <label for="psw">Confirmar Nova Senha</label>
		<input type="password" id="psw_vrfy" name="psw_vrfy" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Precisa ter uma letra maiuscula,uma minuscula, um numero e no minomo oito characteres" required>	
		<input type="hidden" name="cx" value="<?php echo $codigo= $_GET['cx']; ?>">
    <input type="submit" value="Enviar">
  </form>
</div>

<div id="message">
  <h3>O campo de Senha deve Possuir:</h3>
  <p id="letter" class="invalid">Uma <b>letra</b> minuscula</p>
  <p id="capital" class="invalid">Uma <b>letra</b> maiuscula</p>
  <p id="number" class="invalid">Um <b>numero</b></p>
  <p id="length" class="invalid">Minimo <b>8 characteres</b></p>
  <p id="equal" class="invalid">Senha <b>confirmada</b></p>
</div>
</body>
<script>
var myInput = document.getElementById("psw");
var psw_vrfy = document.getElementById("psw_vrfy");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "block";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  // Validade password confirmation
}
psw_vrfy.onkeyup = function() {
  if(myInput.value == psw_vrfy.value){
    equal.classList.remove("invalid");
    equal.classList.add("valid");
  } else {
    equal.classList.remove("valid");
    equal.classList.add("invalid");
  }
}
</script>
</html>

