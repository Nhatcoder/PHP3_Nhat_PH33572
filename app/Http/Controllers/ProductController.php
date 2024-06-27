<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function showProduct($id = null)
    {
        echo "CHafo cac bajn nhe";
        echo "id cua san pham la: " . $id;

        // $name = "Nguyen Van A";
        // $nameSlug = Str::slug($name);
        // echo "slug cua ten la: " . $nameSlug;

        // $snake = str()->snake('OnNg Van A');
        // echo "snake cua ten la: " . $snake;

        $arrSv = [
            [
                "id" => 1,
                "name" => "Nguyen Van A"
            ],
            [
                "id" => 2,
                "name" => "Nguyen Van B"
            ],
            [
                "id" => 3,
                "name" => "Nguyen Van C"
            ],
            [
                "id" => 4,
                "name" => "Nguyen Van D"
            ],

        ];

        $dataPhim = Http::get('https://phim.nguonc.com/api/films/danh-sach/phim-dang-chieu?page=1')->json();

        // dd($dataPhim);

        // return view('list_product', ['arrSv' => $arrSv]);
        return view('list_product', compact('dataPhim'));

    }

    public function updateProduct(Request $request)
    {
        // echo $request->id . " ---- " . $request->name;

        echo $_GET['id'] . " ---- " . $_GET['name'];
    }
}
