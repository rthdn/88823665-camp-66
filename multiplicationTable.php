<?php
$my_var = $_POST['inputNumber']; // รับค่าจากฟอร์ม

function showMultiplicationTable($my_var) {
    $output = "<table class='table table-bordered'>"; //สร้างตารางและเพิ่มคลาส Bootstrap สำหรับตกแต่งตาราง
    $output .= "<thead><tr><th>สูตรคูณ</th><th>ผลลัพธ์</th></tr></thead>"; //ส่วนหัวของตาราง "สูตรคูณ" และ "ผลลัพธ์"
    $output .= "<tbody>"; //ส่วนเนื้อหาตาราง
    
    for ($i = 1; $i <= 12; $i++) {
        $result = $my_var * $i; //ผลลัพธ์ของสูตรคูณ
        $output .= "<tr><td>{$my_var} x {$i}</td><td>{$result}</td></tr>"; //สร้างแถวใหม่ในตารางประกอบด้วยสูตรคูณและผลลัพธ์
    }

    $output .= "</tbody></table>"; //ปิดส่วนเนื้อหาตาราง
    return $output;
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
        <h1 class="mb-5">สูตรคูณแม่ <?php echo $my_var; ?></h1>
        <div class="border border-dark rounded-4 bg-light p-4 col-6 mx-auto">
            <?php
                echo showMultiplicationTable($my_var);
            ?>
        </div>
    </div>
</body>
</html>
