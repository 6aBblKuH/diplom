@extends('layouts.main')

@section('content')

    <div class="container text-center groups-list">
        Оберіть потрібну вам навчальну групу
        <br>
        @foreach($groups as $group)
            <a href="/groups/{{$group->URL_title}}" class="btn btn-default">{{$group->title}}</a>
        @endforeach
    </div>


@stop