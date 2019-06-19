<?PHP
session_start();

$authFile = fopen("auth.txt", "r");
$Databaseusername = trim(fgets($authFile));
$Databasepassword = trim(fgets($authFile));
fclose($authFile);

/*
$results = $conn>query("SELECT * FROM student WHERE course='$a'");
while($row=$results->fetch())
{
    echo "<P>";
    echo " student ID ". $row["ID"] . "<br/>";
    echo " name " . $row["name"] . "<br/>";
    echo "phone " . $row["phone"] . "<br/>" ;
    echo "</P>";
}*/
    $name = $_GET['search'];
    try {
        $conn = new PDO("mysql:host=localhost;dbname=assign140;", $Databaseusername, $Databasepassword);
        $results = $conn->query("SELECT * FROM venues WHERE name='$name' OR type='$name'");
        $row=$results->fetchAll();
        if($row != null){
            echo json_encode($row);
        }else{
		    echo json_encode("NRF");
        };
    }catch(PDOException $e){
            echo json_encode("There was an error connection to the database. An admin has been notified.");
            //as PHP myadmin is having trouble but for testing purpose we make it work.
    };
?>