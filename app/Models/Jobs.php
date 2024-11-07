<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Jobs extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $table = "job_listings";
    protected $fillable = ['title', 'salary'];
    function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
