@extends('template/main')

@section('title','Change Player')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3> Change Data Player</h3>

            <div class="card">
                <div class="card-body">
                  <form method="POST" action="/players/{{$player->id}}">
                  @method('patch')
                  @csrf
                        <div class="form-group">
                            <label for="name">Player Name </label>
                            <input type="text" class="form-control" id="player_name" name="player_name" value="{{$player->player_name}}" >
                        </div>
                        <div class="form-group">
                            <label for="team">Team </label>
                            <input type="text" class="form-control" id="team" name="team" value="{{$player->team}}">
                       </div>
                       <div class="form-group">
                            <label for="rank">Rank Player </label>
                            <input type="text" class="form-control" id="rank_player" name="rank_player" value="{{$player->rank_player}}">
                        </div>
                        <div class="form-group">
                            <label for="position">Position </label>
                            <input type="text" class="form-control" id="position" name="position" value="{{$player->position}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Age </label>
                            <input type="text" class="form-control" id="age" name="age" value="{{$player->age}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Update</button>
                        <a href="/players/{{$player->id}}" class="btn btn-warning">Back</a>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection()
