<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Latte\Engine;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;

class Rendering{
    use DebugTrait;
    public function __construct(array $data){

        $latte = new Engine();

        $latte->render('templates/default/index.latte', $data);

    }
}
