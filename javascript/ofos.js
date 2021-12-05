function goBack() 
{
    window.history.back()
}
function Reload()
{
    location.reload();
}

function peymentGetway()
{
    var x = document.getElementById("payment_method").value;
  document.getElementById("getwayLoad").innerHTML = "Type your " + x + " Number";
  document.getElementById("numberBoxLoad").innerHTML = ": <input type='text' name='number' id='number'><span class='red'>* <?php echo $phoneErr ?></span>";
}

function peymentGetwayValidation() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        "  Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        "  Username lenght must be between 2 and 20";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        "  only characters are allowed";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        "  Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
}

function LoginValidation() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        "  Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        "  Username lenght must be between 2 and 20";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        "  only characters are allowed";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        "  Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
}

function ChangePasswordValidation() 
{
    var oldpassword = document.getElementById("oldpassword").value;
    var currentpassword = document.getElementById("currentpassword").value;
    var newpassword = document.getElementById("newpassword").value;
    var confirmpassword = document.getElementById("confirmpassword").value;

    if (currentpassword == "") 
    {
        document.getElementById("currentpasswordErr").innerHTML =
        "  Please fill the current password field";
        return false;
    }
    else if (currentpassword !== oldpassword) 
    {
        document.getElementById("currentpasswordErr").innerHTML =
        "  Old Password isn't maching! Try Agian";
        return false;
    }
    else{
        document.getElementById("currentpasswordErr").innerHTML = "";
    }
    if (newpassword == "") 
    {
        document.getElementById("newpasswordErr").innerHTML =
        "  Please fill the new password field";
        return false;
    }
    else if (newpassword == currentpassword) 
    {
        document.getElementById("newpasswordErr").innerHTML =
        "  New Password cannot same as Old Password";
        return false;
    }
    else{
        document.getElementById("newpasswordErr").innerHTML = "";
    }
    if (confirmpassword == "") 
    {
        document.getElementById("confirmpasswordErr").innerHTML =
        "  Please fill the confirm password field";
        return false;
    }
    else if (newpassword !== confirmpassword) 
    {
        document.getElementById("confirmpasswordErr").innerHTML =
        "  confirmpassword isn't maching with new password";
        return false;
    }
    else{
        document.getElementById("confirmpasswordErr").innerHTML = "";
    }
}

function RegistrationValidation() 
{
    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var cPassword = document.getElementById("Cpassword").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var usertype = document.getElementById("type").value;
    var dob = document.getElementById("dob").value;
    var genderM = document.getElementById("Male");
    var genderF = document.getElementById("Female");
    var genderO = document.getElementById("Other");
   var image = document.getElementById("image").value;
    
    if (name == "") 
    {
        document.getElementById("nameErr").innerHTML =
        "  Please fill the name field";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }
    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        "  Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML ="";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " Username lenght must be between 2 and 20";
        return false;
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        "  only characters are allowed";
        return false;
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        "  Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
    if (password.length <= 5 || password.length > 20) 
    {
        document.getElementById("passwordErr").innerHTML =
        "  Passwords lenght must be between  5 to 20";
        return false;
    }
    if (cPassword == "") 
    {
        document.getElementById("cpassErr").innerHTML =
        "  Please fill the Confirm Password field";
        return false;
    }
    else{
        document.getElementById("cpassErr").innerHTML = "";
    }
    if (password !== cPassword) 
    {
        document.getElementById("cpassErr").innerHTML =
        "  Password does not match the confirm password";
        return false;
    }
    if (email == "") 
    {
        document.getElementById("emailErr").innerHTML =
        "  Please fill the email field";
        return false;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
    }
    if (address == "") 
    {
        document.getElementById("addressErr").innerHTML =
        "  Please fill the address field";
        return false;
    }
    else{
        document.getElementById("addressErr").innerHTML = "";
    }
    if (phone == "") 
    {
        document.getElementById("phoneErr").innerHTML =
        "  Please input a Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (isNaN(phone)) 
    {
        document.getElementById("phoneErr").innerHTML =
        "  Please input a valid Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (usertype == "") 
    {
        document.getElementById("usertypeErr").innerHTML =
        "  Please a usertype";
        return false;
    }
    else{
        document.getElementById("usertypeErr").innerHTML = "";
    }
    if (dob == "") 
    {
        document.getElementById("dobErr").innerHTML =
        "  Please select your Date of Birth";
        return false;
    }
    else{
        document.getElementById("dobErr").innerHTML = "";
    }
    if (genderM.checked == false && genderF.checked == false && genderO.checked == false ) 
    {
        document.getElementById("genderErr").innerHTML =
        "  Please select your gender";
        return false;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        "  Please upload your profile Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}