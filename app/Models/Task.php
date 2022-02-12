<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property $title
 * @property $creator_id
 * @property $content
 * @property $status_id
 * @property $labels
 */
class Task extends Model
{
    use HasFactory;
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function labels()
    {
        return $this->belongsToMany(Label::class, 'task_label');
    }
}
