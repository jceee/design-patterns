<?php

namespace Jceee\DP\Partterns\Behavioral\Chain;

class Download extends Handler
{
    public function processing(Params $params)
    {
        $result = true;
        echo $params->getParam('id') . __CLASS__ . "  ing\n";
        if ($result) {
            $this->append(new Upload());
            return false;
        }
        return false;
    }
}