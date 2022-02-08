<?php

namespace App\classes;

class Example
{
    public $name;
    public $data = [];
    public function index()
    {
        //ARRAY
        $this->data = [10, 20, 30, 'BASIS', 'BITM', 100.200, true];
       // echo $this->data[5];
        //echo $this->data[15]; //undefined array key error, ie, exception
        //4 type of error: notice, warning, parse error (syntax), fatal error (logic wrong-dangerous one)

//        foreach ($this->data as $item)
//        {
//            echo $item.' ';
//            //echo '<br/>';
//        }

//--------------to print index numbers------------
//        foreach ($this->data as $key=> $item)
//        {
//            echo $key.' '.$item.'<br/>';
//        }
//-----------------------end----------------------
        // => array object sign
        // index - array object sign - value
        // 'name' => 'jennifer'
        //the one below is also called associative array
//        $this->data = [
//            'name'=>'Jennifer',
//            'email'=>'jennifer@gmail.com',
//            'mobile'=> '0123456789'
//        ];
//        echo $this->data['name'];
//        echo '<br/>';
//        echo $this->data['email'];
//        echo '<br/>';
//        echo $this->data['mobile'];
        //----------print---------//
//        echo $this->data['name'];
//        echo '<br/>';
//        echo $this->data['email'];
//        echo '<br/>';
//        echo $this->data['mobile'];

        //for 2D ARRAY
//        $this->data = [
//            0 => [
//                'name'=>'Sanjeda',
//                'email'=>'sanjeda@gmail.com',
//                'mobile'=> [
//                    'personal' => '00000000',
//                    'parent' => '111111111'
//                ]
//            ],
//            1 => [
//                'name'=>'Sara',
//                'email'=>'sara@gmail.com',
//                'mobile'=> [
//                    'personal' => '00000000',
//                    'parent' => '111111111'
//                ]
//            ],
//            2 => [
//                'name'=>'Jennifer',
//                'email'=>'jennifer@gmail.com',
//                'mobile'=> [
//                    'personal' => '00000000',
//                    'parent' => '111111111'
//                ]
//            ]
//        ];
//       // echo $this->data[0]['name']; <---- ekta ekta kore ber kore info
//        foreach ($this->data as $item)
//        {
//            foreach ($item as $value){
//               if ( is_array($value)){
//                    foreach ($value as $v_value){
//                        echo $v_value.' ';
//                   }
//                }
//               else{
//                   echo $value.' ';
//               }
//            }
//            echo '<br/>';
//        }
//---------------------------------------------------------------------
        $this->data = [
            0 => [
                'name'=>'Sanjeda',
                'email'=>'sanjeda@gmail.com',
                'mobile'=> [
                    'personal' => '00000000',
                    'parent' => '111111111'
                ]
            ],
            1 => [
                'name'=>'Sara',
                'email'=>'sara@gmail.com',
                'mobile'=> [
                    'personal' => '00000000',
                    'parent' => '111111111'
                ]
            ],
            2 => 'BITM',
            3 => [
                'name'=>'Jennifer',
                'email'=>'jennifer@gmail.com',
                'mobile'=> ['7777777777']
            ]
        ];

//        foreach ($this->data as $item)
//        {
//            if (is_array ($item))
//            {
//                foreach ($item as $value){
//                    if ( is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value.' ';
//                        }
//                    }
//                    else{
//                        echo $value.' ';
//                    }
//                }
//            }
//            else{
//                echo $item;
//            }
//
//            echo '<br/>';
//        }
        //echo '<pre>';
        //print_r($this->data);
        //var_dump($this->data); //dissection - ekdom details e bhanga
    }
}