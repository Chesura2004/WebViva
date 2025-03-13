function signInSignUp(){
    var signIn = document.getElementById("signIn");
    var signUp = document.getElementById("signUp");

    signIn.classList.toggle("d-none");
    signUp.classList.toggle("d-none");
}

function goToStore(){
    window.location = "signInSignUp.php";
}

function signUpProcess(){
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    var pnum = document.getElementById("pnum");
    var vcode = document.getElementById("vcode");
    var bd = document.getElementById("bd");
    var gender = document.getElementById("gender");
}