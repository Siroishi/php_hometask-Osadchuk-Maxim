<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class ForumController implements ControllerMethodName
{

    public function index(): void
    {
        $topics = [
            [
                'author' => 'Tubik',
                'title' => 'Prodam garaj',
                'text' => 'Garaj 6x7 s pogrebom'
            ],
            [
                'author' => 'Danya i Dima',
                'title' => 'Prodam barkhatnue tyagi',
                'text' => 'Prodam barkhatnue tyagi nedorogo'
            ]
        ];

        $data = ['topics' => $topics, 'page' => 'forum'];

        new Rendering($data);
    }
}
