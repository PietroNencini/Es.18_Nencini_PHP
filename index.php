<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.18 Nencini</title>
</head>
<body>
    
    <?php
        $films = array("Interstellar","Avatar","Matrix","Alien","Elysium");
        $output = "<label for='films'> Scegli: </label>
                    <br><select name='FilmPreferito' id='films'> ";
        for($i = 1; $i <= count($films); $i++) {
            $output .= "<option value='f$i'> ".$films[$i-1]."</option> ";
        }
        echo $output .= "</select>";
    ?>

</body>
</html>