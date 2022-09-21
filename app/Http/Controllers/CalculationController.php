<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function nCPr(Request $all_data)
    {
        $n1 = $all_data->input('n1');
        $r1 = $all_data->input('r1');
        $n2 = $all_data->input('n2');
        $r2 = $all_data->input('r2');

        $nCr = $this->fact($n1)/($this->fact($n1 - $r1) * $this->fact($r1));
        $nPr = $this->fact($n2)/($this->fact($n2 - $r2));

        return ['nCr' => $nCr, 'nPr' => $nPr];
    }

    public function fact($n)
    {
        $result = 1;
        for($i = 1; $i <= $n; $i++ )
            {
                $result *= $i;
            }
            return $result;
    }


}
