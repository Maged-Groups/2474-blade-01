<?php

namespace App\Http\Controllers;

class DirctvController extends Controller
{

    function page_1()
    {
        $list = '';

        $available = 5;

        $username = 'Maged Yaseen';

        return view('dirctv.page_1', compact('list', 'available', 'username'));
        // return view('dirctv.page_1', compact('list', 'available'));
    }

    function page_2()
    {
        return view('dirctv.page_2');
    }

    function page_3()
    {
        $day_num = '5';
        return view('dirctv.page_3', compact('day_num'));
    }

    function page_4()
    {
        $children = '5';
        return view('dirctv.page_4', compact('children'));
    }

    function page_5()
    {
        return view('dirctv.page_5');
    }

    function page_6()
    {
        $children = [
            ['name' => 'Soso', 'age' => 11],
            ['name' => 'Lolo', 'age' => 11],
            ['name' => 'Toto', 'age' => 11],
            ['name' => 'Mickey', 'age' => 30],
            ['name' => 'Mimi', 'age' => 24],
            ['name' => 'Batot', 'age' => 27],
            ['name' => 'Zizi', 'age' => 24],
        ];
        return view('dirctv.page_6', compact('children'));
    }

    function page_7()
    {
        $employees = [
            ['name' => 'Soso', 'skills' => ['HTML', 'CSS', 'JS', 'BS', 'React JS']],
            ['name' => 'Lolo', 'skills' => ['HTML', 'CSS', 'JS', 'BS', 'Flutter']],
            ['name' => 'Toto', 'skills' => ['HTML 5', 'CSS 3', 'JS', 'BS 5', 'React JS', 'React Native']],
            ['name' => 'Mickey', 'skills' => ['HTML', 'CSS', 'JS', 'BS', 'React']],
            ['name' => 'Mimi', 'skills' => ['HTML', 'CSS', 'PHP', 'MySQL', 'Laravel']],
            ['name' => 'Batot', 'skills' => ['Laravel', 'PHP 8', 'MySQL', 'BS', 'HTML']],
            ['name' => 'Zizi', 'skills' => ['HTML', 'CSS', 'JS', 'BS', 'React Native']],
        ];

        $employees2 = [
            [
                'name' => 'Soso',
                'skills' => [
                    'front-end' => [
                        'HTML', 'CSS', 'JS', 'BS', 'React JS'
                    ]
                ]
            ],
            [
                'name' => 'Lolo',
                'skills' => [
                    'front-end' => [
                        'HTML', 'CSS', 'JS', 'BS', 'Flutter'
                    ],
                    'back-end' => [
                        'MySQL', 'PHP', 'Laravel'
                    ]
                ]
            ],
            [
                'name' => 'Toto',
                'skills' => [
                    'front-end' => [
                        'HTML 5', 'CSS 3', 'JS', 'BS 5', 'React JS', 'React Native'
                    ]
                ]
            ],
            [
                'name' => 'Mickey',
                'skills' => [
                    'front-end' => [
                        'HTML', 'CSS', 'JS', 'BS', 'React'
                    ],
                    'back-end' => [
                        'MySQL', 'PHP', 'Laravel'
                    ]
                ]
            ],
            [
                'name' => 'Mimi',
                'skills' => [
                    'front-end' => [
                        'HTML', 'CSS', 'PHP', 'MySQL', 'Laravel'
                    ]
                ]
            ],
            [
                'name' => 'Batot',
                'skills' => [
                    'front-end' => [
                        'Laravel', 'PHP 8', 'MySQL', 'BS', 'HTML'
                    ],
                    'back-end' => [
                        'MySQL', 'PHP', 'Laravel'
                    ]
                ]
            ],
            [
                'name' => 'Zizi',
                'skills' => [
                    'front-end' => [
                        'HTML', 'CSS', 'JS', 'BS', 'React Native'
                    ]
                ]
            ],
        ];
        return view('dirctv.page_7', compact('employees', 'employees2'));
    }
}
