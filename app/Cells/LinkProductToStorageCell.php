<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class LinkProductToStorageCell extends Cell
{
    public function render(): string {
        return $this->view('form_modal/LinkProductToStorage');
    }
}