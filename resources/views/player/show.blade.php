@extends('template/main')

@section('title','Show detail')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3> All Player</h3>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Detail Player</h5>
                  <p class="card-text">Id :{{$player->id}}.</p>
                  <p class="card-text">Name Player : {{$player->player_name}}.</p>
                  <p class="card-text">Team : {{$player->team}}.</p>
                  <p class="card-text">Rank Player : {{$player->rank_player}}.</p>
                  <p class="card-text">Position : {{$player->position}}.</p>
                  <p class="card-text">Age : {{$player->age}}.</p>
                  <p class="card-text">
                      <form action="/players/{{$player->id}}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <a href="{{$player->id}}/change" class="btn btn-secondary">Change</a>
                      <a href="/players" class="btn btn-primary">Back</a>
                  </p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection()
