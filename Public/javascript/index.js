function ajexrequest() {
    var xhr2 = new XMLHttpRequest();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    xhr2.addEventListner ("load", responceRecived);

    xhr2.open('GET', 'index.php?username=' + username + '&password=' + password);

    xhr2.send();
}
function responceRecived(e){
    document.getElementById('results').innerHTML = e.target.responceText;
}
function status()
{
    var xdata = <?php echo json_encode($_SESSION["token"]); ?>;
    if (xdata == null){
        document.getElementById("status").innerHTML = "You are not logged in.";
    }else{
        document.getElementById('status').innerHTML = "You are logged in.";
    };

}