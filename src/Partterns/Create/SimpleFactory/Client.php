<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/8
 * Time: 下午11:36
 */

namespace Jonas\DP\Partterns\Create\SimpleFactory;

use Jonas\DP\Partterns\Create\SimpleFactory\Live\AliYunLive;
use Jonas\DP\Partterns\Create\SimpleFactory\Live\QCloudLive;

require_once __DIR__ . '/../../../Bootstrap/config.php';

class Client extends \Jonas\DP\Partterns\Common\Client
{
    public function before()
    {
        $liveAli = new AliYunLive();
        var_dump($liveAli->create());



        $liveQCloud = new QCloudLive();
        var_dump($liveQCloud->create());
    }

    public function after()
    {
        $liveAli = Factory::getLiveHandler('AliYun');
        var_dump($liveAli->create());



        $liveQCloud = Factory::getLiveHandler('QCloud');
        var_dump($liveQCloud->create());
    }
}

(new Client())->run();
