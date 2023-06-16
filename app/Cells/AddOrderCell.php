<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AddOrderCell extends Cell
{
    public function render(): string {
        return $this->view('form_modal/AddOrder');
    }
}