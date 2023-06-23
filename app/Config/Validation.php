<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    public array $login = [
        'email' => 'required|max_length[255]|valid_email',
        'password' => 'required|max_length[255]|min_length[8]',
    ];

    public array $register = [
        'name' => 'required|max_length[255]',
        'country' => 'required|max_length[255]',
        'email' => 'required|max_length[255]|valid_email|is_unique[sstck_users.email]',
        'first_name' => 'required|max_length[255]',
        'last_name' => 'required|max_length[255]',
        'password' => 'required|max_length[255]|min_length[8]',
    ];

    public array $add_user = [
        'email' => 'required|max_length[255]|valid_email|is_unique[sstck_users.email]',
        'first_name' => 'required|max_length[255]',
        'last_name' => 'required|max_length[255]',
        'password' => 'required|max_length[255]|min_length[8]',
    ];

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
