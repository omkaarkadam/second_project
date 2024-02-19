<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class contact extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'msg'];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            return $item['email'];
            $adminEmail = $item['email'];
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
