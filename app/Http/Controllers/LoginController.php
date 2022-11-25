<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class LoginController extends Controller
{
    public function index(Request $request) {

        $erro = '';

        if($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe.';
        };

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function authenticate(Request $request) {
        $regras = [
            'user' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'user.email' => 'O campo usuário (e-amil) é obrigatório',
            'senha.required' => 'O campo de senha é obrigatório',
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('user');
        $password = $request->get('senha');

        // echo "User: $email | senha: $password";
        // echo '<br>';

        // $user = new User();
        $user = new Client();

        $userDados = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();
 

        if(isset($userDados->name)) {
            session_start();
            $_SESSION['nome'] = $userDados->name;
            $_SESSION['email'] = $userDados->email;

            // dd($_SESSION);
            return redirect()->route('home');
        }  else {
            return redirect()->route('site.login', ['erro' => 1]);        
        }             
        // print_r($request->all());
        // echo '<pre>';
        // print_r($userDados);
        // echo '<pre>';
        
    }
}
