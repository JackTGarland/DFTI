<?php
session_start();
include '../PHP/login.php';
#includes 'PHP/logout.php';
?>
<!doctype html>
<html>

<head>
<title>test</title>
<link rel="stylesheet" type="text/css" href="Public/css/main.css">
<script type ='text/javascript' src="Public/javascript/index.js">>
</script>
</head>

<body onload="status()">
<p id="status"></p>
<div id="login">
<input id="username" placeholder="username" /><br/>
<input id="password"  placeholder="password" /><br/>
<input type="button" value="login" onclick="ajexrequest()" />
<p id="failed"></p>
</div>
<div id="nav">
<input id="serch" placeholder="serch bar" />
<input type="button" value="serch" />
</div>
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

function status() {

    var xdata = <?php echo json_encode($_SESSION["token"]); ?>;
    if (xdata == null){
        document.getElementById("status").innerHTML = "You are not logged in.";
    }else{
        document.getElementById('status').innerHTML = "You are logged in.";
    };

};
echo "hello world";
echo "This is just a test";
?>
</html>