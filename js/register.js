const params = new URLSearchParams(window.location.search);

if(params.get("pass") == "1"){
    let msg = document.getElementById("p-change");

    msg.hidden = false;

    msg.innerText = "Password already in use. Please choose different password.";
    msg.style.color = "red";
    msg.style.fontWeight = "bold";
}