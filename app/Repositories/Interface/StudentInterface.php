<?php
namespace App\Repositories\Interface;

interface StudentInterface {
    public function allStudent();
    public function add(array $data);
}
