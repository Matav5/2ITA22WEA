<?php
    include "connection.php";

    if(isset($_POST["upravit"])){
        $id = $_POST["id"];
        $score = $_POST["score"];
        $nickname = $_POST["nickname"];
        $scored_at = $_POST["scored_at"];

      /*  $updateSQL = "UPDATE leaderboard 
        SET 
        score = {$score},
        name = '{$nickname}',
        scored_at = '{$scored_at}'
        WHERE id = {$id};";*/
        $updateSQL = "UPDATE leaderboard 
        SET 
        score = ?,
        name = ?,
        scored_at = ?
        WHERE id = ?;";

        $stmt = $connect->prepare($updateSQL);
        
        if($stmt->execute([$score,$nickname,$scored_at,$id]) === TRUE){
            echo "Úspešně se updatnul výsledek";
        }
    }
    else if(isset($_POST["smazat"])){
        $id = $_POST["id"];
        $deleteSQL = "DELETE
        FROM leaderboard
        WHERE id = ?";

        $stmt = $connect->prepare($deleteSQL);

        if($stmt->execute([$id]) === TRUE){
            echo "Úspešně se smazal výsledek";
        }
    }
    else{

        //Přidání výsledku
        $score = $_POST["score"];
        $nickname = $_POST["nickname"];

        if(trim($nickname) != ""){
            $insertSQL = "INSERT INTO leaderboard(name,score,scored_at)
            VALUES  (\"$nickname\", $score, current_timestamp())
            ";
            if($connect->query($insertSQL) === TRUE){
                echo "Úspešně se uložilo skóre";
            }
        }
    }

    header('location:leaderboard.php');
    die();

?>