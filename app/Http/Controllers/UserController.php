<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();


        return view('usuarios', [
            'users' => $users
        ]);
    }


    public function create() 
    {
        //
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user['password'] = \Hash::make($request['password']);
        $user->save();

        // dd($request->all());

        return redirect()->route('user.index');//->with('success', 'Usuário cadastrado com sucesso!');
        
    }


    public function destroy(User $user) 
    {
        $user->delete();
        return redirect()->route('user.index');
        //dd($user);
    }

    

    // /**
    //  * @var User
    //  */
    // private $user;

    // public function __construct(User $user)
    // {
    //     $this->user = $user;
    // }

    // /**
    //  * @param Request $request
    //  * @return JsonResponse
    //  */
    // public function login(Request $request): JsonResponse
    // {
    //     $credentials = $request->only('email', 'password');
    //     try {
    //         $token = $this
    //             ->user
    //             ->login($credentials);
    //     } catch (\Throwable | \Exception $e) {
    //         return response()->json($e->getMessage());
    //     }
    //     return response()->json(compact('token'));
    // }

    // /**
    //  * @param Request $request
    //  * @return Application|ResponseFactory|JsonResponse|Response
    //  */
    // public function logout(Request $request)
    // {
    //     try {
    //         $this->user->logout($request->input('token'));
    //     } catch (\Throwable | \Exception $e) {
    //         return response()->json($e->getMessage());
    //     }

    //     return response(['status' => true, 'mensagem' => 'Deslogado com sucesso'], 200);
    // }
}
