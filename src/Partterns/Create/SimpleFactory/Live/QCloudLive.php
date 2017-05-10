<?php

namespace Jonas\DP\Partterns\Create\SimpleFactory\Live;

class QCloudLive implements LiveInterface
{
    public function create()
    {
        return 'qCloud';
    }
}