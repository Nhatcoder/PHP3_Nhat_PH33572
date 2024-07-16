<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class QueryBuilder extends Controller
{
    public function queryBuilder()
    {
        //   1. Lấy danh sách toàn bộ user
        $users = DB::table('users')->get();

        // 2. Lấy thông tin user có id = 4 
        $cau2 = DB::table('users')->where('id', 4)->first();

        //3. Lấy thuộc tính 'name' của user có id = 16
        $cau3 = DB::table('users')->where('id', 16)->value('name');

        //  4. Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
        $cau4 = DB::table('phongban')->where('id', '1')->select('id');
        $cau_4 = DB::table('users')->where('phongban_id', '1')->pluck('id');

        //  5. Tìm user có độ tuổi lớn nhất trong công ty 
        $cau5 = DB::table('users')->max('tuoi');
        $cau_5 = DB::table('users')
            ->where('tuoi', DB::table('users')->max('tuoi'))
            ->get();

        // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
        $cau6 = DB::table('users')->min('tuoi');
        $cau_6 = DB::table('users')
            ->where('tuoi', DB::table('users')->min('tuoi'))
            ->get();

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        $cau7 = DB::table('users')->where('phongban_id', '1')->count();

        // 8. Lấy danh sách tuổi các user 
        $cau8 = DB::table('users')->distinct()->select('tuoi')->get();

        //   9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        $cau9 = DB::table('users')->where('name', "like", '%Khải%')->orWhere('name', 'like', '%Thanh%')->get();

        //  10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        $cau10 = DB::table('phongban')->where('id', '2')->select('id');
        $cau_10 = DB::table('users')->where('phongban_id', '1')->pluck('id');

        //  11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        $cau11 = DB::table('users')->where('tuoi', '>=', '30')->orderBy('tuoi', 'asc')->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        $cau12 = DB::table('users')->orderBy('tuoi', 'desc')->limit(10)->offset(5)->get();
        // return response()->json($cau12);

        //  13. Thêm một user mới vào công ty
        // $user = new User();
        // $user->insert([
        //     'name' => 'Trần Nhật 123',
        //     'email' => 'admin@admin.com',
        //     'phongban_id' => 1,
        //     'tuoi' => 30,
        //     'songaynghi' => 0,
        // ]);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        $users = DB::table('users')
            ->where('phongban_id', '2')
            ->update(['name' => DB::raw('CONCAT(name, " PĐT")')]);

        //    15. Xóa user nghỉ quá 15 ngày
        // $cau15 = DB::table('users')->whereDate('songaynghi', '>', 15)->delete();





    }
}
