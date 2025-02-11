<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\ContactFormFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property Carbon $created_at
 */
class ContactForm extends Model
{
    /** @use HasFactory<ContactFormFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contact_form';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'message'];

}
