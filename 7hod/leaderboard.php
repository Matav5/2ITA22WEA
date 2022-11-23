<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žebříček</title>
    <link rel="stylesheet" href="zebricek.css">
</head>
<body>
    <table>
        <tr>
            <th>Pořadí</th>
            <th>Přezdívka</th>
            <th>Skóre</th>
            <th>Čas skórování</th>
            <th>Akce</th>
        </tr>
        <?php
            include "connection.php";
            $sql = "SELECT * FROM leaderboard ORDER BY score DESC";
            $result = $connect->query($sql);
            $poradi = 1;
            while($row = $result->fetch_object()){
                echo "
                
                <tr> 
                  <form action='server.php' method='POST'>
                    <td> $poradi. <input type='hidden'name='id' value='$row->id'> </td>
                    <td> <input type='text' name='nickname' value='$row->name'> </td>
                    <td> <input type='number' name='score' value='$row->score'> </td>
                    <td> <input type='text' name='scored_at' value='$row->scored_at' ></td>
                    <td> 
                        <input type='submit' name='upravit' value='Upravit'>
                        <input type='submit' name='smazat' value='Smazat'>
                    </td>
                  </form>
                </tr>";
                $poradi++;
            }
            
        ?>
    </table>
</body>
</html>