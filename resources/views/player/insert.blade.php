@extends('template/main')

@section('title','Insert Player')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3> Insert New Data Player</h3>

            <div class="card">
                <div class="card-body">
                  <form method="POST" action="/players">
                  @csrf
                        <div class="form-group">
                            <label for="name">Player Name </label>
                            <input type="text" class="form-control" id="player_name" name="player_name">
                        </div>
                        <div class="form-group">
                            <label for="team">Team </label>
                            <input type="text" class="form-control" id="team" name="team">
                       </div>
                       <div class="form-group">
                            <label for="rank">Rank Player </label>
                            <input type="text" class="form-control" id="rank_player" name="rank_player">
                        </div>
                        <div class="form-group">
                            <label for="position">Position </label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                        <div class="form-group">
                            <label for="age">Age </label>
                            <input type="text" class="form-control" id="age" name="age">
                        </div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection()
