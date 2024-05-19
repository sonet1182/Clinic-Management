<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Student;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('course_name', function($row){
                    return $row->course->name;
                })
                ->addColumn('action', function($row){
                    $editUrl = url('/edit/'.$row->id);
                    $deleteUrl = url('/delete/'.$row->id);

                    $actionBtn = '<a href="'.$editUrl.'" class="edit btn btn-success btn-sm">Edit</a> <a href="'.$deleteUrl.'" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                // ->rawColumns(['action'])
                ->make(true);
        }
    }

}
