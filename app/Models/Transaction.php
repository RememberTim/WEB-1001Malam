<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
         'user_id',
        'transaction_total',
        'total_keuntungan',
        'transaction_status'
    ];

    protected $hidden = [
        
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class,'transactions_id');
    }
    public function users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    
    
   
}
