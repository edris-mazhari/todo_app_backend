<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Todo\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $todos = auth()->user()->todos()->get();
            return response()->json([
                'todos' => $todos
            ]);
            //code...
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
            //throw $th;
        }
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoCreateRequest $request)
    {
        $user = auth()->user();
        // $request['owner'] = $user;
        $todo = $user->todos()->create($request->validated());
        // $todo = Todo::create($request->validated());
        return response()->json(['data' => $todo]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {


        if ($todo->owner == auth()->user()->id){
            return response()->json(['data' => $todo]);
        }

        return response()->json(['data' => null]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
