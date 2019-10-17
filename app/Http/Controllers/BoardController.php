<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Test::latest()->paginate(5);
//        dd($messages);
        return view('board.show', compact('messages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        Test::create([
            'name' => 'lulu',
            'subject' => $request['subject'],
            'content' => $request['content'],

            ]
        );

        return redirect()->route('board.index')
            ->with('success', 'message created successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Test $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $board)
    {
        return view('board.edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Test $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $board)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $board->update($request->all());

        return redirect()->route('board.index')
            ->with('success', 'Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Test $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $board)
    {
        $board->delete();

        return redirect()->route('board.index')
            ->with('success', 'Message deleted successfully');
    }
}
