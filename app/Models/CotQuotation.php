<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotQuotation extends Model
{
    use HasFactory;

    public function currency(){
        return this.belongsTo(CotCurrency::class);
    }
    public function exchangeHouse(){
        return this.belongsTo(CotExchangeHouse::class);
    }
}
