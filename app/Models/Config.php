<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'comment'];

    public function get($key)
    {
        return $this->newQuery()->where('key', $key)->first();
    }

    public function set($key, $value, $comment = null)
    {
        $config = $this->newQuery()->where('key', $key)->first();
        if ($config) {
            $config->value = $value;
            $config->save();
            return $config;
        } else {
            $newConfig = [
                'key' => $key,
                'value' => $value,
                'comment' => $comment
            ];
            return self::create($newConfig);
        }
    }
}
