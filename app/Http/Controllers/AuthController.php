<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // Login do usuário
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['cpf' => $credentials['cpf'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            return response()->json(['message' => 'Login bem-sucedido!', 'user' => $user]);
        }

        return response()->json(['message' => 'CPF ou senha incorretos!'], 401);
    }

    // Cadastro de usuário
    public function register(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'cpf' => 'required|string|unique:users',
            'telefone' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'telefone' => $data['telefone'],
            'password' => Hash::make($data['password']),
        ]);

        return response()->json(['message' => 'Conta criada com sucesso!', 'user' => $user], 201);
    }

    // Recuperação de senha
    public function recoverPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Um link de recuperação foi enviado para o seu email!']);
        }

        return response()->json(['message' => 'Email não encontrado!'], 404);
    }
}