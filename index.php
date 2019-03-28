<?php
session_start();
include '../PHP/login.php';
include '../PHP/logout.php';
include '../PHP/dbconnection.php';
?>
<!doctype html>
<html>

<head>
<title>test</title>
<link rel="stylesheet" type="text/css" href="Public/css/main.css">
<script type ='text/javascript' src="Public/javascript/index.js"></script>
<script>
function statusf() {

    var xdata = <?php echo json_encode($_SESSION["name"]); ?>;
    if (xdata == null) {
        document.getElementById("status").innerHTML = "You are not logged in.";
    } else {
        document.getElementById('status').innerHTML = "Welcome back "+xdata;
    };
};
</script>

</head>

<body onload="statusf()">
<p id="status"></p>
<div id="login">
<input id="username" placeholder="username" /><br/>
<input id="password"  placeholder="password" /><br/>
<input type="button" value="login" onclick="ajexrequest()" />
<input type="button" value="logout" onclick="logout()" />
<p id="failed"></p>
</div>

<div id="nav">
<input id="search" placeholder="search bar" />
<input type="button" value="search" onclick="search()" />
</div>
<input type="button" value="file test" onclick="filetest()" />
<div id="results">
</div>


</body>
<?php
/*function createSession(){
    $results = login()
    if ($results == null){

    }else{
        
        $_SESSION["token"] = (($_SESSION["username"].strlen + $_SESSION["password"].strlen) + 100 / 25) * 100;
    }
}*/

//login() crashes due to $_SESSION["username"]
function login(){

    $username = $_GET["username"];
    $password = $_GET["password"];
	if($username == "admin" & $password == "admin"){
	//Due to no access to database this is used to simulate database query.
    //$conn = new PDO("mysql:host=localhost;dbname=assign140;", $Databaseusername, $Databasepassword);
    //$results = $conn>query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    //if ($results != null) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		//createSession();
		echo json_encode('succsess');
    }else{
		echo json_encode('Failed');
    };
}
function createSession(){
   
     $_SESSION["token"] = (($_SESSION["username"].strlen + $_SESSION["password"].strlen) + 100 / 25) * 100;
}
?>
</html>
