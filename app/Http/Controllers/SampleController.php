<?php

namespace App\Http\Controllers;

use App\Services\CalculationService;
use Illuminate\Http\Request;
use App\Facades\Hoge;


class SampleController extends Controller
{
    private $Calculation;

    public function __construct(CalculationService $calculation)
    {
        $this->Calculation = $calculation;
    }

    public function index()
    {
        $result = [
            'add' => $this->Calculation->add(1, 1),
            'sub' => $this->Calculation->sub(2, 1),
            'mul' => $this->Calculation->mul(3, 2),
            'div' => $this->Calculation->div(4, 2),
        ];

        $hoge = Hoge::echoHoge();


        return view('sample.index', compact('result', 'hoge'));
    }
}
