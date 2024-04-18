<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'date', 'clock_in_time', 'departure_time'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
