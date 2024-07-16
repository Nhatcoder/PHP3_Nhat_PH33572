<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutBladeController extends Controller
{
    public function index()
    {
        return view("client.index");
    }

    public function quanLyUser()
    {
        return view("Client.quanlynguoidung");
    }
}
