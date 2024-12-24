<?php
/** แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุในตัวแปร */
function showMultiplicationTable($my_var) {
    for($i = 1; $i <= 12 ; $i++) {
        echo $my_var . " x " . "$i" . " = " . ($my_var * $i);
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="mt-3 container text-center">
            <?php
            $my_var = 2;
            ?>
            <h1 class="mb-5">สูตรคูณแม่ <?php echo $my_var; ?></h1>
                <div class="col h2 text-center">
                    <?php
                        echo showMultiplicationTable($my_var);
                    ?>
                </div>
        </div>
    </body>
</html>