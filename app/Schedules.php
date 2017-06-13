<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Schedules extends Model {

    public function getGroup($group)
    {
        return DB::table('groups')->where('URL_title', $group)->select('id', 'isActive')->get();
    }

    public function getSchedule($group)
    {
        $groupForSchedule = $this -> getGroup($group);
        $group_id = $groupForSchedule[0] -> id;
        return $this->join(
            'lessons', 
            'lessons.id', 
            '=', 
            'schedules.lesson_id'
        )->join(
            'audiences',
            'audiences.id',
            '=',
            'schedules.audience_id'
        )->orderBy(
            'day_of_week',
            'asc'
        )->orderBy(
            'lesson_order',
            'asc'
        )->select(
            'schedules.day_of_week',
            'schedules.lesson_order',
            'schedules.lesson_type',
            'lessons.title',
            'lessons.teacher',
            'audiences.title as audience'
        )->where('group_id', $group_id)->get();
    }

    


}
