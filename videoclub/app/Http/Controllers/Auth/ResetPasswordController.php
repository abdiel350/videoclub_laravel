<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    // Métodos vacíos para evitar errores
    public function showResetForm(Request $request, $token = null) {}
    public function reset(Request $request) {}
}