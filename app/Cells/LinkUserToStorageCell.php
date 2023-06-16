<?php

namespace App\Cells;

use \CodeIgniter\View\Cells\Cell;

class LinkUserToStorageCell extends Cell
{
    public function render(): string
    {
        return $this->view('form_modal/LinkUserToStorage');
    }
}