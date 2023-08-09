<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function nhanvien()
    {
        $employees = Employee::all();
        return view('Backend.Layout.Employee.QuanLyNhanVien', compact('employees'));
    }

    public function add()
    {
        return view('Backend.Layout.Employee.ThemNhanVien');
    }
    public function themnhanvien(Request $request)
    {
        $request->validate([
            'imgemploy' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);
        $employee = new Employee;
        $employee->nameemploy = $request->input('nameemploy');
        $employee->imgemploy = "default.jpg";
        $employee->ageemploy = $request->input('ageemploy');
        $employee->phoneemploy = $request->input('phoneemploy');
        $employee->emailemploy = $request->input('emailemploy');
        $employee->jobemploy = $request->input('jobemploy');
        $employee->addressemploy = $request->input('addressemploy');



        if ($request->hasFile('imgemploy') && $request->file('imgemploy')->isValid()) {
            $imageFile = $request->file('imgemploy');
            $ext = $imageFile->extension();
            $imgext = time() . uniqid() . '.' . $ext;

            $imagePath = $imageFile->storeAs('public/images/employee', $imgext);
            // Xóa ảnh cũ nếu có (trừ ảnh mặc định nếu có)
            File::delete(storage_path('app/public/images/employee/' . $employee->imgemploy));
            // Lưu tên ảnh mới vào trường ảnh
            $employee->imgemploy = $imgext;
        }
        $employee->save(); // Lưu thông tin nhân viên vào cơ sở dữ liệu
        return redirect()->route('nhanvien.show');
    }
    public function chinhsuanhanvien($id)
    {
        $employee = Employee::findOrFail($id);
        return view('Backend.Layout.Employee.ChinhSuaNhanVien', compact('employee', 'id'));
    }

    public function updatenhanvien(Request $request, $id)
    {
        $request->validate([
            'imgemploy' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);

        $employee = Employee::findOrFail($id);
        $employee->nameemploy = $request->input('nameemploy');
        $employee->ageemploy = $request->input('ageemploy');
        $employee->phoneemploy = $request->input('phoneemploy');
        $employee->emailemploy = $request->input('emailemploy');
        $employee->jobemploy = $request->input('jobemploy');

        if ($request->hasFile('imgemploy') && $request->file('imgemploy')->isValid()) {
            $imageFile = $request->file('imgemploy');
            $ext = $imageFile->extension();
            $imgext = time() . uniqid() . '.' . $ext;

            $imagePath = $imageFile->storeAs('public/images/employee', $imgext);
            // Xóa ảnh cũ nếu có (trừ ảnh mặc định nếu có)
            File::delete(storage_path('app/public/images/employee/' . $employee->imgemploy));
            // Lưu tên ảnh mới vào trường ảnh
            $employee->imgemploy = $imgext;
        }

        $employee->save(); // Lưu thông tin nhân viên vào cơ sở dữ liệu
        return redirect()->route('nhanvien.show');
    }
    public function deletenhanvien($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('nhanvien.show')->with('success', 'Xóa sản phẩm thành công!');
    }
}
