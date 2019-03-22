function ajexrequest() {
    var xhr2 = new XMLHttpRequest();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var creds = "username="+username+"&password="+password;
    //var creds = "username="+username;
    //xhr2.addEventListner("load", responceRecived(xhr2));//crashes on this line
    xhr2.onreadystatechange = function(){
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            document.getElementById('results').innerHTML = (JSON.parse(xhr2.response));
            //document.getElementById('results').innerHTML = (JSON.stringify(xhr2.response));
        };
    }
    xhr2.open("GET", '/PHP/login.php?username=' + username + '&password=' + password);
    console.log(xhr2);
    xhr2.send();
    //document.getElementById('results').innerHTML = e.target.responceText;
};
function responceRecived(e){
    console.log(JSON.stringify(e.response));
    document.getElementById('results').innerHTML = e.target.responceText;
};
