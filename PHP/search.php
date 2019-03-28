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
    //try {
        $conn = new PDO("mysql:host=localhost;dbname=assign140;", $Databaseusername, $Databasepassword);
        $results = $conn->query("SELECT * FROM venues WHERE name='$name' OR type='$name'");
        $row=$results->fetch();
        echo json_decode($row);
        if ($row != null) {
            echo json_encode($row);
                /*echo json_encode($row["name"]);
                echo json_encode($row["type"]);
                echo json_encode ($row["recommended"]);
                echo json_encode($row["description"]);
                echo json_encode($row["username"]);
            /*while($row=$results->fetch()){
                echo json_encode($row["name"]);
                echo json_encode($row["type"]);
                echo json_encode($row["recommended"]);
                echo json_encode($row["description"]);
                echo json_encode($row["username"]);
            };*/
        }else{
		    echo json_encode("No results found");
        };
    /*}catch(PDOException $e){
            echo json_encode("There was an error connection to the database. An admin has been notified.");
            //as PHP myadmin is having trouble but for testing purpose we make it work.
    };*/
?>