<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\CotExchangeHouse;
use App\Models\CotCurrency;
use App\Models\CotQuotation;
use App\Models\CotArbitration;
use App\Models\CotLowerValue;


class CotQuotationController extends Controller
{
    protected function index(){
        // $LM_cotizaciones = DB::select('SELECT TOP 4 * FROM cot_quotations WHERE id_casacambio = 1 ORDER BY updated_at DESC, id_moneda ASC');
        $LM_cotizaciones = DB::table('cot_quotations')
        ->select('cot_quotations.*')
        ->where('id_casacambio', '=', '1')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('4')
        ->get();
        
        $CC_cotizaciones = DB::table('cot_quotations')
        ->select('cot_quotations.*')
        ->where('id_casacambio', '=', '2')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('4')->get();

        $MC_cotizaciones = DB::table('cot_quotations')
        ->select('cot_quotations.*')
        ->where('id_casacambio', '=', '3')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('4')->get();

        $BC_cotizaciones = DB::table('cot_quotations')
        ->select('cot_quotations.*')
        ->where('id_casacambio', '=', '4')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('4')->get();

        $monedas = CotCurrency::all();


        $LM_arbitrajes = DB::table('cot_arbitrations')
        ->select('cot_arbitrations.*')
        ->where('id_casacambio', '=', '1')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('3')
        ->get();
        
        $CC_arbitrajes = DB::table('cot_arbitrations')
        ->select('cot_arbitrations.*')
        ->where('id_casacambio', '=', '2')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('3')->get();

        $MC_arbitrajes = DB::table('cot_arbitrations')
        ->select('cot_arbitrations.*')
        ->where('id_casacambio', '=', '3')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('3')->get();

        $BC_arbitrajes = DB::table('cot_arbitrations')
        ->select('cot_arbitrations.*')
        ->where('id_casacambio', '=', '4')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('3')->get();

        $lower_values = DB::table('cot_lower_values')
        ->select('cot_lower_values.*')
        ->orderBy('updated_at', 'DESC')
        ->orderBy('id_moneda', 'ASC')
        ->limit('4')->get();

        return view('welcome', 
        [
        'LM_cotizaciones' => $LM_cotizaciones, 
        'CC_cotizaciones' => $CC_cotizaciones, 
        'MC_cotizaciones' => $MC_cotizaciones, 
        'BC_cotizaciones' => $BC_cotizaciones, 
        'monedas' => $monedas, 
        'LM_arbitrajes' => $LM_arbitrajes, 
        'CC_arbitrajes' => $CC_arbitrajes, 
        'MC_arbitrajes' => $MC_arbitrajes, 
        'BC_arbitrajes' => $BC_arbitrajes,
        'lower_values' => $lower_values
    ]);
    }
}
