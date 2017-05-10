<?php
namespace Jonas\DP\Partterns\Create\SimpleFactory;

use Jonas\DP\Partterns\Create\SimpleFactory\Live\AliYunLive;
use Jonas\DP\Partterns\Create\SimpleFactory\Live\QCloudLive;

class Factory
{
    public static function getLiveHandler($type = null)
    {
        switch ($type) {
            case 'QCloud':
                return new QCloudLive();
            default:
            case 'AliYun':
                return new AliYunLive();
                break;
        }
    }
}