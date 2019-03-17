<<<<<<< HEAD
<?PHP
session_start();
$authFile = fopen("auth.txt", "r");
$Databaseusername = fgets($authFile);
$Databasepassword = fgets($authFile);
fclose($authFile);
/*$a = $_GET["course"];
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
    $conn = new PDO("mysql:host=localhost;dbname=assign140;", $Databaseusername, $Databasepassword);
    $results = $conn>query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($results != null) {
        $_SESSION["username"] = $results.$row["username"]
        $_SESSION["password"] = $results.$row["password"]
    }else{
        return null;
    };
}
?>