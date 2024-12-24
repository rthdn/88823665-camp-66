<?php
/** แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่ */
function checkEvenOrAddNumber () {
    for($i = 1; $i <= 100 ; $i++) {
        echo $i . " = ";
        if($i % 2 == 0) {
            echo "เลขคู่";
        } else {
            echo "เลขคี่";
        }
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
            <h1>ตัวเลข 1-100</h1>
            <div class="col h2 text-center">
                    <?php
                        echo checkEvenOrAddNumber();
                    ?>
                </div>
        </div>
    </body>
</html>