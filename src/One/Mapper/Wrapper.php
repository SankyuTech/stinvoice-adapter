<?php

namespace Sankyu\One\Mapper;

class Wrapper
{
    public function wrapUp(...$arrays){

        $mergedData = array_merge(...$arrays);

        return $mergedData;
    }
}