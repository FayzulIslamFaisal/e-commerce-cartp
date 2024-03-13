<?php
namespace App\Repositories\Repository;

use App\Models\Student;
use App\Repositories\interface\StudentInterface;

class StudentRepository implements StudentInterface {
    public function allStudent() {
        return Student::all();
    }
    public function add(array $data) {
        return Student::create($data);
    }
}
