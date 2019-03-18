<?PHP
/*session_start();
$authFile = fopen("auth.txt", "r");
$Databaseusername = fgets($authFile);
$Databasepassword = fgets($authFile);
fclose($authFile);
$a = $_GET["course"];
$conn = new PDO("mysql:host=localhost;dbname=student_records;", $username, $password);

$results = $conn>query("SELECT * FROM student WHERE course='$a'");
while($row=$results->fetch())
{
    echo "<P>";
    echo " student ID ". $row["ID"] . "<br/>";
    echo " name " . $row["name"] . "<br/>";
    echo "phone " . $row["phone"] . "<br/>" ;
    echo "</P>";
}*/

function login(){
    $username = $_GET["username"];
    $password = $_GET["password"];
	if($username == "admin" & $password == "admin"){
	//Due to no access to database this is used to simulate database query.
    //$conn = new PDO("mysql:host=localhost;dbname=assign140;", $Databaseusername, $Databasepassword);
    //$results = $conn>query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    //if ($results != null) {
        $_SESSION["username"] = $username
        $_SESSION["password"] = $password
		createSession();
		echo 'succsess';
    }else{
		echo 'Failed';
    };
}
function createSession(){
   
     $_SESSION["token"] = (($_SESSION["username"].strlen + $_SESSION["password"].strlen) + 100 / 25) * 100;
}


?>