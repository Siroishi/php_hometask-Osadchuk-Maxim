<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;

class Rendering{
    use DebugTrait;
    public function __construct(array $data){
        print_r($data);
    }
}
