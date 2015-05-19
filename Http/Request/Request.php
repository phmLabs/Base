<?php

namespace phmLabs\Base\Http\Request;

use PhmLabs\Base\Security\Credentials;

interface Request
{
    const POST = 'post';
    const GET = 'get';
    const PUT = 'put';

    public function getUri();

    public function getMethod();

    public function getParameters();

    public function setHttpBasicAuthenticationCredentials(Credentials $credentials);
}