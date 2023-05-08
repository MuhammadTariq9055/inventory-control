<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndUser extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
