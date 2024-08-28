<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usersearch= $_POST["usersearch"];

    try {
        require_once "includes/dth.inc.php";

        $stmt = "SELECT * FROM comments WHERE username = :usersearch;";
        $stmt = $pdo->prepare($stmt);
        $stmt->bindParam(":usersearch", $usersearch, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $th) {
        die("Connection failed: " . $th->getMessage());
    } 
}
else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Search results </h3>
        <?php
        if (empty($result)) {
            echo "<div>";
                echo "<p>No results found</p>";
            echo "</div>";
        }else{

            
            foreach ($result as $row) {
                echo "<div>";
                echo "<h4>" .htmlspecialchars($row["username"])  . "<h4>". "<br>";
                echo htmlspecialchars($row["comment_text"]) . "<br>";
                echo htmlspecialchars($row["created_at"]) . "<br>";

                echo "<div>";
                
            }
        }
        ?>

    </div>
</body>
</html>