@extends('template/main')

@section('title','Show all player')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3> All Player</h3>

            <a href="/players/addplayer" class="btn btn-primary my-2">Insert a new player</a>
            @if(session('notify'))
            <div class="alert alert-success my-2" role="alert">
                {{session('notify')}}
            </div>
             @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Player Name</th>
                    <th scope="col">Team</th>
                    <th scope="col">Rank Player</th>
                    <th scope="col">Act</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($player as $plr)
                  <tr>
                    <th scope="row">{{$plr->id}}</th>
                    <td>{{$plr->player_name}}</td>
                    <td>{{$plr->team}}</td>
                    <td>{{$plr->rank_player}}</td>
                    <td>
                        <a href="/players/{{$plr->id}}" class="btn btn-info">Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection()
