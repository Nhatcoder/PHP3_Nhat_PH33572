<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongTinSVController extends Controller
{
    public function thongTinSv()
    {
        $thongtinsv = [
            [
                "name" => "Trần Văn Nhật",
                'image' => "https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-1/440951097_1600989180667825_61162011551869058_n.jpg?stp=dst-jpg_p160x160&_nc_cat=105&ccb=1-7&_nc_sid=50d2ac&_nc_eui2=AeG8UCcW5KsUqZm80wxgitCS9snWCofzxnb2ydYKh_PGdgTHjSBQ0WKRA4Hm4s5jC8Y9JkD6_pY9m93GfNjxQuFB&_nc_ohc=zMXWUS3Pdv0Q7kNvgENd6tr&_nc_ht=scontent.fhan2-5.fna&oh=00_AYBt7vuJx64f01mryQ9HLgRBuhsuC07FSrIWikgUfu8Byg&oe=668345CF",
                "age" => 20,
                "address" => "Hà Nội",
                "gender" => "Nam",
                "major" => "Công Nghệ Thông Tin",
                "hobbie" => "Nghe nhạc, Chơi game, Code",
            ]
        ];
        return view('thongtinsv', compact('thongtinsv'));
    }
}
