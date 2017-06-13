@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/" class="btn btn-default schedule-back-btn">Назад</a>
        </div>
        <table class="schedule-table text-center">
            <thead>
            <tr>
                <td>День тижня</td>
                <td>Номер пари</td>
                <td>Тип заняття</td>
                <td>Аудиторія</td>
                <td>Дисципліна</td>
                <td>Викладач</td>
            </tr>
            </thead>
            <tbody>
            @foreach($schedules as $schedule)
                <tr class="schedule-item">
                    <td>{{$schedule->day_of_week}}</td>
                    <td>{{$schedule->lesson_order}}</td>
                    <td>{{$schedule->lesson_type}}</td>
                    <td>{{$schedule->audience}}</td>
                    <td>{{$schedule->title}}</td>
                    <td>{{$schedule->teacher}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>


@stop