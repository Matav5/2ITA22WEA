<h3>Dobrý den uživateli 
    <b> 
        <?php echo $_SESSION["username"] ?>
    </b>
</h3>
<form action="server.php" method="post">
    <input type="submit" name="logout" value="Odhlásit se">
</form>