<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AddUserCell extends Cell {
    public function render(): string {
        return $this->view('form_modal/AddUser');
    }
}