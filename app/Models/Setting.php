<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'whatsapp',
    ];

    public function settingImage()
    {
        return $this->hasOne(SettingImage::class);
    }
}
