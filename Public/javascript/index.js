function ajexrequest() {
    var xhr2 = new XMLHttpRequest();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    //xhr2.addEventListner("load", responceRecived(xhr2));//crashes on this line
    xhr2.onreadystatechange = function(){
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            document.getElementById('failed').innerHTML = (JSON.parse(xhr2.response));
            //document.getElementById('results').innerHTML = (JSON.stringify(xhr2.response));
        };
    }
    xhr2.open("GET", '/PHP/login.php?username=' + username + '&password=' + password);
    xhr2.send();
    //document.getElementById('results').innerHTML = e.target.responceText;
};
/*function responceRecived(e){
    console.log(JSON.stringify(e.response));
    document.getElementById('results').innerHTML = e.target.responceText;
};*/
function logout() {
    var xhr2 = new XMLHttpRequest();
    
    xhr2.open("GET", '/PHP/logout.php');
    xhr2.send();

};
function filetest(){
    var xhr2 = new XMLHttpRequest();
    xhr2.onreadystatechange = function(){
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            document.getElementById('failed').innerHTML = (JSON.parse(xhr2.response));
            //document.getElementById('results').innerHTML = (JSON.stringify(xhr2.response));
        };
    }
    xhr2.open("GET", '/PHP/dbconnection.php');
    xhr2.send();
};
function search(){
    var xhr2 = new XMLHttpRequest();
    var search = document.getElementById('search').value;
    if(search != null){
        xhr2.onreadystatechange = function(){
            if (xhr2.readyState == 4 && xhr2.status == 200) {
                //document.getElementById('results').innerHTML = xhr2.response;
                var row = document.createElement("div");
                row.style.float = "left";
                
                document.getElementById('results').appendChild(row) 
                document.getElementById('row').innerHTML = (JSON.parse(xhr2.response).name);
                //document.getElementById('results').innerHTML = (JSON.stringify(xhr2.response));
            };
        }
        xhr2.open("GET", '/PHP/search.php?search=' + search);
        xhr2.send();
    }else{
        document.getElementById()
    }

};