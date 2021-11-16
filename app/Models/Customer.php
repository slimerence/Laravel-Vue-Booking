<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'sex', 'age_range', 'phone', 'wechat', 'is_member',
        'address', 'contact', 'favourite', 'hate', 'industry','extra'
    ];

    /**
     * @param $data
     * @param null $id
     * @return Customer
     */
    public static function dataSave($data, $id = null ): Customer
    {
        if($id){
            $customer = self::query()->where('id',$id)->update($data);
        }else{
            $customer = self::create($data);
        }
        return $customer;
    }
}
