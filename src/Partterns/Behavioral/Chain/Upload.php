<?php

namespace Jonas\DP\Partterns\Behavioral\Chain;

class Upload extends Handler
{
    public function processing(Params $params)
    {
        $result = true;
        echo $params->getParam('id') . __CLASS__ . "  ing\n";
        if ($result) {
            return $result;
        }

    }
}