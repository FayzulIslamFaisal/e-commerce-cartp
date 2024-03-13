<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Repositories\Interface\StudentInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $student;

    public function __construct(StudentInterface $student)
    {
        $this->student = $student;
    }

    public function index() {
        $student = $this->student->allStudent();
        return view('repository.index',compact('student'));
    }
    public function insertStudent(){
        return view('repository.insert');
    }

    public function addStudent(StudentRequest $request) {

        $data = $request->validated();
        $this->student->add($data);
        return to_route('student');

    }
}
