<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\Hoge;

use App\Facades\Calculation;

use App\Services\CalculationService;


class SampleController extends Controller
{
    // private $Calculation;
    //
    // public function __construct(CalculationService $calculation)
    // {
    //     $this->Calculation = $calculation;
    // }

    // public function index(CalculationService $calculation)
    public function index()
    {

        // 直接サービスコンテナから
        // $calculation = app()->make('App\Services\CalculationService');
        // $calculation = app('App\Services\CalculationService');
        // $calculation = app(CalculationService::class);

        // dd($calculation);

        $result = [

            // 直接サービスコンテナから
            // 'add' => $calculation->add(1, 1),
            // 'sub' => $calculation->sub(2, 1),
            // 'mul' => $calculation->mul(3, 2),
            // 'div' => $calculation->div(4, 2),

            // コンストラクタインジェクション
            // 'add' => $this->Calculation->add(5, 1),
            // 'sub' => $this->Calculation->sub(6, 1),
            // 'mul' => $this->Calculation->mul(7, 2),
            // 'div' => $this->Calculation->div(8, 2),

            // メソッドインジェクション
            // 'add' => $calculation->add(9, 1),
            // 'sub' => $calculation->sub(10, 1),
            // 'mul' => $calculation->mul(11, 2),
            // 'div' => $calculation->div(12, 2),

            // ファサードで
            'add' => Calculation::add(13, 1),
            'sub' => Calculation::sub(14, 1),
            'mul' => Calculation::mul(15, 2),
            'div' => Calculation::div(16, 2),
        ];


        $hoge = Hoge::echoHoge();

        return view('sample.index', compact('result', 'hoge'));
    }
}
