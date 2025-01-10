<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

    <!-- นำเข้า Bootstrap เพื่อจัดรูปแบบหน้าเว็บ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1>ตารางสูตรคูณ</h1>

    <!-- ฟอร์มรับค่าตัวเลขสำหรับคำนวณสูตรคูณ -->
    <form method="post" action="{{ url('/mycontroller') }}">
        @csrf <!-- ป้องกัน CSRF Attack -->
        <div class="mb-3">
            <label for="myinput" class="form-label">ระบุสูตรคูณ <span class="text-danger"> *</span> </label>
            
            <!-- ช่องกรอกข้อมูลสูตรคูณ -->
            <input type="number" name="myinput" id="myinput" class="form-control" value="{{ $myinput }}">
        </div>

        <!-- ปุ่มกดเพื่อส่งข้อมูล -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <!-- เงื่อนไขแสดงตารางสูตรคูณเมื่อมีข้อมูล -->
    @if (!empty($multiplicationTable))
        <h2 class="mt-5">สูตรคูณแม่ : {{ $myinput }}</h2>

        <!-- ตารางแสดงผลลัพธ์สูตรคูณ -->
        <table class="table table-bordered text-center mt-3">
            <thead class="table-light">
                <tr>
                    <th>สูตรคูณ</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
            <tbody>
                @foreach($multiplicationTable as $row)
                    <tr>
                        <td>{{ $myinput }} x {{ $row['factor'] }}</td>
                        <td>{{ $row['result'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
