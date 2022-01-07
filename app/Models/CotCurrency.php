<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotCurrency extends Model
{
    use HasFactory;

    public function quotation(){
        return this.hasMany(CotQuotation::class);
    }

    public function arbitration(){
        return this.hasMany(CotArbitration::class);
    }
}
