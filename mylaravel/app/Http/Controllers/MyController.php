<?php

namespace App\Http\Controllers; //จัดระเบียบและแบ่งกลุ่มของคลาสในโปรเจกต์ Laravel

use Illuminate\Http\Request; //ช้ในการจัดการและรับข้อมูลจาก HTTP request (เช่น GET, POST)

class MyController extends Controller
{
    // ฟังก์ชันสำหรับรับค่าจากฟอร์มและประมวลผลตารางสูตรคูณ
    function myfunction(Request $req, $var1 = "") {
        // รับค่าจาก input ที่ชื่อว่า 'myinput'
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $var1;

        // สร้างตัวแปรสำหรับเก็บข้อมูลสูตรคูณ
        $multiplicationTable = [];

        // ตรวจสอบว่าค่าที่รับมาเป็นตัวเลขหรือไม่
        if (is_numeric($data['myinput'])) {
            $multiplier = (int)$data['myinput'];  // แปลงค่าที่รับมาเป็นจำนวนเต็ม

            // วนลูปเพื่อคำนวณสูตรคูณ 1-12
            for ($i = 1; $i <= 12; $i++) {
                $multiplicationTable[] = [
                    'factor' => $i,                     // ตัวคูณ (1-12)
                    'result' => $multiplier * $i       // ผลลัพธ์ของสูตรคูณ
                ];
            }
        }

        // ส่งข้อมูลไปยัง view
        $data['multiplicationTable'] = $multiplicationTable;

        // แสดงผลที่ view ชื่อ 'myview'
        return view('myview', $data);
    }
}
