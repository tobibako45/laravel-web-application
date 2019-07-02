<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\Hoge;

use App\Facades\Calculation;
// use App\Services\CalculationService;


class SampleController extends Controller
{
    // private $Calculation;
    //
    // public function __construct(CalculationService $calculation)
    // {
    //     $this->Calculation = $calculation;
    // }

    public function index()
    {

        // 直接サービスコンテナから
        // $calculation = app()->make('App\Services\CalculationService');
        // $calculation = app('App\Services\CalculationService');
        // $calculation = app(CalculationService::class);

        // dd($calculation);

        $result = [

            // 直接サービスコンテナから
            // 'add' => $calculation->add(5, 1),
            // 'sub' => $calculation->sub(6, 1),
            // 'mul' => $calculation->mul(7, 2),
            // 'div' => $calculation->div(8, 2),

            // コンストラクタインジェクション
            // 'add' => $this->Calculation->add(1, 1),
            // 'sub' => $this->Calculation->sub(2, 1),
            // 'mul' => $this->Calculation->mul(3, 2),
            // 'div' => $this->Calculation->div(4, 2),

            // ファサードで
            'add' => Calculation::add(9, 1),
            'sub' => Calculation::sub(10, 1),
            'mul' => Calculation::mul(11, 2),
            'div' => Calculation::div(12, 2),
        ];


        $hoge = Hoge::echoHoge();

        return view('sample.index', compact('result', 'hoge'));
    }
}
