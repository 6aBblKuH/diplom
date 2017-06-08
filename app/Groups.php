<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model {

    public function getActiveGroups()
    {
        return $this->orderBy('title')->active()->get();
	}

    public function scopeActive($query)
    {
        $query->where(['isActive'=>'1']);
    }

}
