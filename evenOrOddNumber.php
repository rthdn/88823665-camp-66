<?php
$start = $_POST['start']; // ตัวเลขเริ่มต้น (รับค่าจากฟอร์ม)
$end = $_POST['end'];   // ตัวเลขสิ้นสุด (รับค่าจากฟอร์ม)

// ตรวจสอบตั้งแต่ตัวเลขเริ่มต้นจนถึงตัวเลขสิ้นสุดว่าเลขคู่หรือเลขคี่
function checkEvenOrAddNumber($start, $end)
{
    $output = "<table class='table table-bordered'>"; //สร้าง HTML สำหรับแสดงผลในรูปแบบตาราง
    $output .= "<thead><tr><th>เลข</th><th>ประเภท</th></tr></thead><tbody>"; //หัวตาราง

    for ($i = $start; $i <= $end; $i++) {
        $output .= "<tr><td>$i</td><td>"; //สร้างแถวใหม่ในตาราง พร้อมแสดงตัวเลขปัจจุบัน
        if ($i % 2 == 0) {
            $output .= "เลขคู่";
        } else {
            $output .= "เลขคี่";
        }
        $output .= "</td></tr>"; //ปิดแถวในตาราง
    }

    $output .= "</tbody></table>"; //ปิดแท็กตาราง
    return $output; //คืนค่าตาราง
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
        <h1 class="mb-5">ตรวจสอบว่าเป็นเลขคู่หรือเลขคี่</h1>
        <div class="border border-dark rounded-4 bg-light p-4 col-6 mx-auto text-center mb-5">
            <?php
                echo checkEvenOrAddNumber($_POST['start'], $_POST['end']);
            ?>
        </div>
    </div>
</body>
</html>
