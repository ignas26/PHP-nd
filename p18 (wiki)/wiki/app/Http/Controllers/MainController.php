<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class MainController extends BaseController
{
    public function index(){
    echo 'cia index puslapis (nes paleistas MainController index metodas), toliau pateikiame nuoroda i page puslapi. Prasome paspausti'."<br>";
    echo "<a href='http://localhost/backEnd/nd/p18%20(wiki)/wiki/public/page'>Link</a>"."<br>";
    echo "arba jeigu skiriasi localhost nustatymai prirasyti 'page' galune ";
        
    }
}
?>