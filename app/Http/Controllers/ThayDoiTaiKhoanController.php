<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use App\Models\ThuongHieu;
use App\Models\KhuyenMai;
use App\Models\PhanQuyen;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;

class ThayDoiTaiKhoanController extends Controller
{
    public function index()
    {
        $data = User::where('id', session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = Giay::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'tai-khoan')
            ->with('data', $data)
            ->with('thuonghieus', $thuonghieus)
            ->with('loaigiays', $loaigiays)
            ->with('giays', $giays)
            ->with('users', $users)
            ->with('phanquyens', $phanquyens)
            ->with('khuyenmais', $khuyenmais)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = User::find($request->id);
        $data['ten_nguoi_dung'] = $request->ten_nguoi_dung;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['ten_dang_nhap'] = $request->ten_dang_nhap;
        $data['password'] = Hash::make($request->password);

        $data->save();
        return Redirect('/');
    }
}
