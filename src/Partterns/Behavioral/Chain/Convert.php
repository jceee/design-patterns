<?php

namespace Jceee\DP\Partterns\Behavioral\Chain;

class Convert extends Handler
{
    public function processing(Params $params)
    {
        $result = true;
        echo $params->getParam('id') . __CLASS__ . "  ing\n";
        if ($result) {
            $this->append(new Download());
            return false;
            return $result;
        }
        return false;
    }
}