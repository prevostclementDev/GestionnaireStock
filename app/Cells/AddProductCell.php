<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AddProductCell extends Cell
{
    public function render(): string {
        return $this->view('form_modal/AddProduct');
    }
}