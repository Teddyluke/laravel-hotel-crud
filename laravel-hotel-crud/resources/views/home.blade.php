@extends('layouts.main-layout')
@section('content')

  <h1>
    <ul>
      @foreach ($stanze as $stanza)
        <li>
          Stanza N: <a href="{{route('stanze-show', $stanza -> id)}}">{{$stanza -> room_number}}</a>;
        </li>
      @endforeach
    </ul>
  </h1>

  <form action="{{route('stanze-create')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="room_number">N. CAMERA</label>
      <input type="number" name="room_number" value="">
    </div>
    <div class="form-group">
      <label for="floor">PIANO</label>
      <input type="number" name="floor" value="">
    </div>
    <div class="form-group">
      <label for="beds">LETTI</label>
      <input type="number" name="beds" value="">
    </div>
    <button type="submit" name="button">INSERISCI CAMERA</button>
  </form>
@endsection
