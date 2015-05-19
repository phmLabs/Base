<?php

/*
 * This file is part of the LiveTest package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phmLabs\Base\Http\Client;

use Base\Security\Credentials;

use Base\Http\Request\Request;

interface Client
{
    public function request(Request $request);

    public function setTimeout($timeInSeconds);

    public function setMaxRedirect($maxRedirects);
}