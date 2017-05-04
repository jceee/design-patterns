<?php
namespace Jceee\DP\Partterns\Behavioral\Chain;

class TransCode extends Handler
{
    public function processing(Params $params)
    {
        $result = true;
        echo $params->getParam('id') . __CLASS__ . "  ing\n";
        if ($result) {
            return $result;
        }
        return false;
    }
}