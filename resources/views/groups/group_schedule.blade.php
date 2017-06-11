@extends('layouts.main')

@section('content')
    <div class="container">
        @foreach($schedules as $schedule)
            <div class="col-md-1 text-center">
                <p>{{$schedule->day_of_week}}</p>
                <p>{{$schedule->lesson_order}}</p>
                <p>{{$schedule->lesson_type}}</p>
                <p>{{$schedule->title}}</p>
                <p>{{$schedule->teacher}}</p>
            </div>
        @endforeach
    </div>


@stop