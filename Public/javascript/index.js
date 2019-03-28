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

                //var row = document.createElement("div");
                //row.style.float = "left";
                
                //document.getElementById('results').appendChild(row)
                //console.log(JSON.parse(xhr2.response).length);
                var i;
                for(i = 0; i < JSON.parse(xhr2.response).length; i++){
                    var row = document.createElement("div");
                    var br = document.createElement("br");
                    var rowname = document.createElement("div");
                    var rowtype = document.createElement("div");
                    var rowrec = document.createElement("div");
                    var rowdescription = document.createElement("div");
                    var rowuname = document.createElement("div");
                    //row.style.float = "left";
                    row.setAttribute("id", "row"+i);
                    document.getElementById('results').appendChild(row);
                    rowtype.style.float = "left";
                    rowrec.style.float = "left";
                    rowdescription.style.float = "left";
                    rowuname.style.float = "left";
                    rowname.style.float = "left";
                    rowtype.style.padding.left = "10px";
                    rowrec.style.padding.left = "10px";
                    rowdescription.style.padding.left = "10px";
                    rowuname.style.padding.left = "10px";
                    rowname.style.padding.left = "10px";
                    rowname.setAttribute("id", "rowname"+i);
                    rowtype.setAttribute("id", "rowtype"+i);
                    rowdescription.setAttribute("id", "rowndescription"+i);
                    rowuname.setAttribute("id", "rowuname"+i);
                    rowrec.setAttribute("id", "rowrec"+i);
                    document.getElementById('row'+i).appendChild(rowname);
                    document.getElementById('row'+i).appendChild(rowdescription);
                    document.getElementById('row'+i).appendChild(rowtype);
                    document.getElementById('row'+i).appendChild(rowuname);
                    document.getElementById('row'+i).appendChild(rowrec);
                    row.appendChild(br);
                    document.getElementById('rowname'+i).innerHTML = (JSON.parse(xhr2.response)[i].name);
                    document.getElementById('rowndescription'+i).innerHTML = (JSON.parse(xhr2.response)[i].description);
                    document.getElementById('rowuname'+i).innerHTML = (JSON.parse(xhr2.response)[i].username);
                    document.getElementById('rowtype'+i).innerHTML = (JSON.parse(xhr2.response)[i].type);
                    document.getElementById('rowrec'+i).innerHTML = (JSON.parse(xhr2.response)[i].recommended);
                };
                //document.getElementById('results').innerHTML = (JSON.stringify(xhr2.response));
            };
        }
        xhr2.open("GET", '/PHP/search.php?search=' + search);
        xhr2.send();
    }else{
        document.getElementById()
    }

};