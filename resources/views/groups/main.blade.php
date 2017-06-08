@extends('layouts.main')

@section('content')
    <div class="container text-center groups-list">
        <label for="groups-list">Оберіть вашу навчальну групу</label><br>
        <select name="groups-list" id="groups-list" size="4" required>
            @foreach($groups as $group)
                <option>{{$group->title}}</option>
            @endforeach
        </select>
        <br>
        <button class="btn btn-default">Розклад</button>

    </div>


    <script src="{{asset('/js/groups.js')}}"></script>
@stop