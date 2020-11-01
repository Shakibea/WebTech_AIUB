<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset>
            <legend>Degree</legend>
            <?php 
        $val = $_POST['mulradio'];

        if(count($val) >= 2 && $_POST['submit'] == "submit"){
            echo "ok";
        }else{
            echo "<span>At least Two radio check</span>";
        }
    ?>
            <div>
                <input type="radio" name="mulradio[0]" id="ssc" value="1">
                <label for="degree">SSC</label>
                <input type="radio" name="mulradio[1]" id="hsc" value="2">
                <label for="degree">HSC</label>
                <input type="radio" name="mulradio[2]" id="bsc" value="3">
                <label for="degree">BSc</label>
                <input type="radio" name="mulradio[3]" id="msc" value="4">
                <label for="degree">MSc</label>
            </div>
            <div>
                <input type="submit" name="submit" value="submit">
            </div>
        </fieldset>
    </form>

    
</body>
</html>