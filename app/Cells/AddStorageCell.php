<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AddStorageCell extends Cell
{
    public function render(): string{
        return $this->view('form_modal/AddStorage');
    }
}