<?php

namespace Jonas\DP\Partterns\Behavioral\Chain;

class Concat extends Handler
{
    public function processing(Params $params)
    {
        $result = true;
        echo $params->getParam('id') . __CLASS__ . "  ing\n";
        if ($result) {
            $this->append(new Convert());
        }
        return false;
    }
}