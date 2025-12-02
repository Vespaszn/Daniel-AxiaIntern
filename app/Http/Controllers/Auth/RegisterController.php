<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Assign role to user - INSIDE the create method
        $user->assignRole('Teacher');

        // Or assign multiple roles
        // $user->assignRole(['Teacher', 'SchoolAdmin']);

        return $user; // Make sure to return the user
    }

    // If you need role checking methods, add them as separate methods inside the class
    protected function checkUserRole($user)
    {
        // Check if user has role
        if ($user->hasRole('SuperAdmin')) {
            // Do something
        }

        // Check if user has any of given roles
        if ($user->hasAnyRole(['Teacher', 'SchoolAdmin'])) {
            // Do something
        }
    }
}