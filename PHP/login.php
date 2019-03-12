<?PHP
session_start();
$authFile = fopen("auth.txt", "r");
$username = fgets($authFile);
$password = fgets($authFile);
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
}
?>