<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doan;

class DoanController extends Controller
{
    /**
     * Display a listing of the resource.
     * Hiển thị danh sách các đối tượng.
     */
    public function index()
    {

        $doans = Doan::paginate(10); // Hiển thị 10 bản ghi mỗi trang
        return view('doans.index', compact('doans'));
    }

    /**
     * Show the form for creating a new resource.
     * Hiển thị form để tạo đối tượng mới.
     */
    public function create()
    {
        return view('doans.create'); // Trả về view form để tạo 'doan'
    }

    /**
     * Store a newly created resource in storage.
     * Lưu đối tượng mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'ngaytao' => 'required|date',
        ]);

        // Tạo mới đối tượng
        Doan::create($request->all());

        return redirect()->route('doans.index')->with('success', 'Đồ án được tạo thành công.');
    }

    /**
     * Display the specified resource.
     * Hiển thị thông tin chi tiết của một đối tượng.
     */
    public function show(string $id)
    {
        $doan = Doan::findOrFail($id); // Lấy đối tượng theo ID
        return view('doans.show', compact('doan')); // Trả về view với dữ liệu
    }

    /**
     * Show the form for editing the specified resource.
     * Hiển thị form để chỉnh sửa đối tượng.
     */
    public function edit(string $id)
    {
        $doan = Doan::findOrFail($id); // Lấy đối tượng theo ID
        return view('doans.edit', compact('doan')); // Trả về view form chỉnh sửa
    }

    /**
     * Update the specified resource in storage.
     * Cập nhật đối tượng trong cơ sở dữ liệu.
     */
    public function update(Request $request, string $id)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'ngaytao' => 'required|date',
        ]);

        // Tìm và cập nhật đối tượng
        $doan = Doan::findOrFail($id);
        $doan->update($request->all());

        return redirect()->route('doans.index')->with('success', 'Đồ án được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     * Xóa đối tượng khỏi cơ sở dữ liệu.
     */
    public function destroy(string $id)
    {
        $doan = Doan::findOrFail($id); // Tìm đối tượng theo ID
        $doan->delete(); // Xóa đối tượng

        return redirect()->route('doans.index')->with('success', 'Đồ án đã bị xóa.');
    }
}
