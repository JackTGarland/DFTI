function ajexrequest() {
    var xhr2 = new XMLHttpRequest();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    xhr2.addEventListner ("load", responceRecived);

    xhr2.open('POST', 'login.php?username=' + username + '&password=' + password);

    xhr2.send(e);
    document.getElementById('results').innerHTML = e.target.responceText;
};
function responceRecived(e){
    document.getElementById('results').innerHTML = e.target.responceText;
};