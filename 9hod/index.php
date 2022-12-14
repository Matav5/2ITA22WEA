<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zápis a čtení ze souboru</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .cervenejBox{
            width: 100px;
            height: 100px;
            background-color: red;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <textarea name="text" id="editor" cols="30" rows="10">
    <?php
        if(file_exists("nasUzasnyBlog.mujBlog")){
            $file = fopen("nasUzasnyBlog.mujBlog","r");
            echo fread($file,filesize("nasUzasnyBlog.mujBlog"));
            fclose($file);
        }
    ?>
        </textarea>
        <input type="file" name="soubor">
        <input type="submit" value="Uložit do souboru">
    </form>

    <div class="cervenejBox w3-center"></div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>