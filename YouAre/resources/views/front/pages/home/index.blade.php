

@extends('front.layout.app')





@section('content')
@php
$result = ['0'=>
    [
    'items'=>[[
        'title'=>'Love where you live, and who you live with',
        'description'=>'Move-in ready homes and a built-in community so you can feel at home, together—wherever you are.',
]
    ]]];
@endphp
    @include('front.pages.home.partials.section-1',['data'=>$result])

@php
$result = ['0'=>
        [
        'items'=>[[
            'title'=>'Stay with us',
            'subtitle'=>'Sed ut perspiciatis unde omnisiste natus error sit voluptatem  accusantium doloremque.',
            'images'=>['front/media/icons/house.svg']
    ],[
            'title'=>'Stay with us',
            'subtitle'=>'Sed ut perspiciatis unde omnisiste natus error sit voluptatem  accusantium doloremque.',
            'images'=>['front/media/icons/house-key-2.svg']
    ],
    [
            'title'=>'Stay with us',
            'subtitle'=>'Sed ut perspiciatis unde omnisiste natus error sit voluptatem  accusantium doloremque.',
            'images'=>['front/media/icons/house-4.svg']
    ],
]]];

$result2 = ['0'=>
        [
        'items'=>[[
            'images'=>['front/media/img/AdobeStock_178862047.jpg', 'front/media/img/AdobeStock_178862047.jpg','front/media/img/AdobeStock_178862047.jpg']
    ]
]]];
@endphp

    @include('front.pages.home.partials.initial-cards',['data'=>$result],['data2'=>$result2])
    @include('front.components.title-section',[
        'title_section'=>'Renters insurance for your place & everything in it. ',
        'sub_title_scetion'=>'WHY PORTO',
    ]
        )



@php



$result =
['0'=>
    [
    'id' =>'0',
    'filter'=>'Rent',
    'name'=>'All for rent ',
    'items'=>[[
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'8',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img5.jpg', 'front/media/img/img4.jpg','front/media/img/img2.jpg']
        ],
        [
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas ',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg', 'front/media/img/img2.jpg']
        ],
        [
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


    ],
    [
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']

        ],
        [
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ],
        [
        'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelasiaa',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ]
]],
    '1'=>
        [
        'id' =>'1',
        'filter'=>'Buy',
        'name'=>'All For Buy',
        'items'=>[[
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'240',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100.000',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']
            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ],
        [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T4',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T3',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img2.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']

            ],
]],'2'=>
    [
    'id' =>'2',
    'filter'=>'Invest',
    'name'=>'All For Invest',

    'items'=>[
        [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse111',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_3'=>'Cozinha Equipada',
        'inidvidual_field_2'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img3.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


    ],
    [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthous2e22222',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'17',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img3.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ],
        [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse3333',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'17',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img3.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ],
        [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse44444',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'17',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'WIFI',
        'inidvidual_field_2'=>'Cozinha Equipada',
        'inidvidual_field_3'=>'Maquina Lavar',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/img3.jpg', 'front/media/img/0e8ae7ac-c3a9-4cef-bb2c-20ced64b60d4.jpg']


        ]
]]];

@endphp




    @include('front.pages.home.partials.home-cards', ['data'=>$result])

    @php

$result = ['0'=>
    [
    'items'=>[[
        'title'=>'We simplify the way of buying, selling and investing in the national and international real estate market.',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'subtitle'=>'ABOUT US',
    ]  
    ]]];

    @endphp

    @include('front.pages.home.partials.tilles-2', ['data'=>$result])

    @include('front.components.button')
    @include('front.components.title-section',[
        'title_section'=>'Renters insurance for your place & everything in it.',
        'sub_title_scetion'=>'WHY PORTO',
    ]
        )

    @php

$result = ['0'=>
    [
    'items'=>[[
        'number'=>1,
        'title'=>'Clima fantástico',
        'description'=>'Um dos primeiros no ranking dos paises e cidades mais seguros do mundo.',
        ],
        [
        'number'=>2,
        'title'=>'Clima fantástico',
        'description'=>'Clima ameno, inverno menos rigoroso, primavera e verão com dias muito luminosos e ensolarados.',
        ],
        [
        'number'=>3,
        'title'=>'Clima fantástico',
        'description'=>'Clima ameno, inverno menos rigoroso, primavera e verão com dias muito luminosos e ensolarados.',
        ],
        [
        'number'=>4,
        'title'=>'Clima fantástico',
        'description'=>'Clima ameno, inverno menos rigoroso, primavera e verão com dias muito luminosos e ensolarados.',
        ],
        [
        'number'=>5,
        'title'=>'Clima fantástico',
        'description'=>'Clima ameno, inverno menos rigoroso, primavera e verão com dias muito luminosos e ensolarados.',
        ],
]]];
    
    @endphp

    @include('front.pages.home.partials.slider-section',[
        'data'=>$result,
])
    @include('front.pages.home.partials.section-3',[
        'title_section'=>'You Are Welcome!',
        'sub_title_section'=>'Creating strong partnerships.',
    ])
@endsection