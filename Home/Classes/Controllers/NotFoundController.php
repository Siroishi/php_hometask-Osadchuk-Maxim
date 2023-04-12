<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class NotFoundController
{
    use DebugTrait;

    public function showErrorPage(
        string $message,
        string $code,
    ): void
    {
        $data = [
            'title' => $code,
            'message' => $message,
            'code' => $code,
            'page' => '404'
        ];
        new Rendering($data);
    }
}
