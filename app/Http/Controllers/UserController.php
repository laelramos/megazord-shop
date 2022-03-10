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

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        try {
            $token = $this
                ->user
                ->login($credentials);
        } catch (\Throwable | \Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json(compact('token'));
    }

    /**
     * @param Request $request
     * @return Application|ResponseFactory|JsonResponse|Response
     */
    public function logout(Request $request)
    {
        try {
            $this->user->logout($request->input('token'));
        } catch (\Throwable | \Exception $e) {
            return response()->json($e->getMessage());
        }

        return response(['status' => true, 'mensagem' => 'Deslogado com sucesso'], 200);
    }
}
