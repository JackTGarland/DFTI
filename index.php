<?php
session_start();
#includes 'PHP/login.php';
#includes 'PHP/logout.php';
?>
<!doctype html>
<html>

<head>
<title>test</title>
<script type ='text/javascript'>
function status()
{
    var xdata = <?php echo json_encode($_SESSION["username"]); ?>;
    if (xdata == null){
        document.getElementById("status").innerHTML = "You are not logged in.";
    }else{
        document.getElementById('status').innerHTML = "You are logged in.";
    };

}
</script>
</head>

<body onload="status()">
<p id="status"></p>
<input id="username" /><br/>
<input id="password" /><br/>
<input type="button" value="login"  />

</body>
<?php

echo "hello world";
echo "This is just a test";
?>
</html>