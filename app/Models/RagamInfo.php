<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RagamInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model User.
     * Ini berarti setiap "RagamInfo" dimiliki oleh satu "User".
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
