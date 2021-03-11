<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $guarded = [];
	protected $table='tbl_orders';
	public $timestamps = false;		
	
	public function user()
    {
        return $this->belongs(User::class,'user_id','id');
    }
}
