<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = Player::all();
        return view('player.index', ['player' => $player]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if Model Player not available variable $fillable
        // Player::create([
        //     'player_name' => $request->player_name,
        //     'team' => $request->team,
        //     'rank_player' => $request->rank_player,
        //     'position' => $request->position,
        //     'age' => $request->age
        // ]);

        //Model Player have variable $fillable
        $validateData = $request->validate([
            'player_name' => 'required',
            'team' => 'required',
            'rank_player' => 'required',
            'position' => 'required',
            'age' => 'required'
        ]);
        Player::create($request->all());
        return redirect('/players')->with('notify', 'Data a new player successfully insert !');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('player.change', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $request->validate([
            'player_name' => 'required',
            'team' => 'required',
            'rank_player' => 'required',
            'position' => 'required',
            'age' => 'required'
        ]);
        Player::where('id', $player->id)
            ->update([
                'player_name' => $request->player_name,
                'team' => $request->team,
                'rank_player' => $request->rank_player,
                'position' => $request->position,
                'age' => $request->age
            ]);
        return redirect('/players')->with('notify', 'Data a player successfully change !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        Player::destroy($player->id);
        return redirect('/players')->with('notify', 'Data a player successfully delete !');

        //return $player;
    }
}
