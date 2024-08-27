<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'phone_number',
        'email',
        'username',
        'name',
        'user_image',
        'password_hash',
        'reset_hash',
        'reset_at',
        'reset_expires',
        'activate_hash',
        'status',
        'status_message',
        'active',
        'force_pass_reset',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules = [
        'phone_number' => 'required|min_length[10]|max_length[15]',
        'username' => 'required|min_length[3]|max_length[30]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password_hash' => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'phone_number' => [
            'required' => 'Phone number is required',
            'min_length' => 'Phone number is too short',
            'max_length' => 'Phone number is too long',
        ],
        'username' => [
            'required' => 'Username is required',
            'is_unique' => 'Username already taken',
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Invalid email address',
            'is_unique' => 'Email already taken',
        ],
        'password_hash' => [
            'required' => 'Password is required',
            'min_length' => 'Password must be at least 8 characters long',
        ],
    ];
}
