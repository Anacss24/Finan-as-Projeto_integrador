<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class conversor extends Controller
{
    public function index()
    {
        return redirect('/conversor');
    }
    }
?>