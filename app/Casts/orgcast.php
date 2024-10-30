<?php

namespace App\Casts;

use App\Models\orgSetad;
use App\Models\proListOrg;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class orgcast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
//        dd($value);
        return(orgSetad::where('mainOrg',$value)->get()->first()->_id);
//        dd(proListOrg::where('poOrg',$value)->get());
//        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value;
    }
}
