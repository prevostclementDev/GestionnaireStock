<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AddReplenishmentCell extends Cell
{
    public function render(): string{
        return $this->view('form_modal/AddReplenishment');
    }
}