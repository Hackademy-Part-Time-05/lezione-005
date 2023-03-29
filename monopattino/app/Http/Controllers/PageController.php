<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $items = [
        [
              'id' => 1,
              'name' => 'Monopattino by Lamborghini', 
              'tag' => 'Premium',
              'image' => 'https://www.emuoviti.it/2384-home_default/lamborghini-al-ext-with-turn-signals-vers2022.jpg'
          ],
          [
              'id' => 2,
              'name' => 'Monopattino Economy', 
              'tag' => 'Base',
              'image' => 'https://m.media-amazon.com/images/I/61qzxAtDWPL._AC_SY450_.jpg'
          ],
          [
              'id' => 3,
              'name' => 'Monopattino by Elon Musk',  
              'tag' => 'Medium',
              'image' => 'https://www.grillosaverio.it/wp-content/uploads/2016/06/ape-car.jpg'
          ],

      ];

    public function index(){
        return view('index');
    }

    public function list(){
        return view('list', ['monopattini' => self::$items]);
    }

    public function detail($id){
        
        foreach (self::$items as $monopattino) {
            if($id == $monopattino['id']){
                return view('detail', ['monopattino' => $monopattino]);
            }
        } 
        abort(404); 
    }
}
