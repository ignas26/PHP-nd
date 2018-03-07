<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function main(){

        $reiksme = $this->paskaiciuok(100);

        return view('atskiras.index', array(
            'kintamsis' => $reiksme
        )); }
    
        public function main2(){
        echo "kazkas2";
    }


    private function paskaiciuok($a){
        return $a * 2.5;
    }
}
?>
