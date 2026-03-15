const param = new URLSearchParams(window.location.search);
let err = param.get("error");

if (err == "1") {
    let mail = document.getElementById("email-error");

    mail.hidden = false;
    mail.textContent = "Email does not exists.";

}
if (err == "2") {
    let password = document.getElementById("password-error");

    password.hidden = false;
    password.textContent = "Invalid Password.";
    
}