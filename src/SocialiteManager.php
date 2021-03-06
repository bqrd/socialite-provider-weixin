<?php

/*
 * This file is part of the arch client php package.
 *
 * (c) liugj <liugj@boqii.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bqrd\Socialite;

use Bqrd\Socialite\Two\WeiXinProvider;
use Laravel\Socialite\SocialiteManager as Manager;

class SocialiteManager extends Manager
{
    /**
     * Create an instance of the specified driver.
     *
     * @return \Bqrd\Socialite\Two\AbstractProvider
     */
    protected function createWeiXinDriver()
    {
        $this->app->configure('services');
        $config = $this->app['config']['services.weixin'];

        return $this->buildProvider(
            WeiXinProvider::class, $config
        );
    }
}
