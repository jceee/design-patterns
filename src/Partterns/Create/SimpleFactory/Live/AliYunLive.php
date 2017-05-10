<?php

namespace Jonas\DP\Partterns\Create\SimpleFactory\Live;

class AliYunLive implements LiveInterface
{
    public function create()
    {
        return 'ali yun';
    }
}