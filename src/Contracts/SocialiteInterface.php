<?php

namespace Lijinhua\HyperfSocialite\Contracts;

use Lijinhua\HyperfSocialite\Two\AbstractProvider;

interface SocialiteInterface
{
    /**
     * @param string|null $driver
     * @return AbstractProvider
     */
    public function driver($driver = null);
}