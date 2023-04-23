<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class NewsController implements ControllerMethodName
{

    public function index(): void
    {
        // Створили масив з темами (топіками) форуму
        $news = [
            [
                'Title' => 'Bebik',
                'Text' => 'Z - Zasudjuy',
                'Data' => '2004-05-32'
            ],
            [
                'Title' => 'Danya i Dima',
                'Text' => 'Kyply Garage',
                'Data' => '2002-05-35'
            ],
            [
                'Title' => 'KAY/O',
                'Text' => 'KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities cripples his opponents capacity to fight back, securing him and his allies the ultimate edge.',
                'Data' => '2022-06-23'
            ]
        ];
        // Передали масив з темами в шаблон
        $data = ['news' => $news, 'page' => 'news'];
        // створили об'єкт класу Rendering, передали в нього масив з темами та назву сторінки
        new Rendering($data);
    }
}
