<?php

/*
 * This file is part of the LiveTest package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phmLabs\Base\Www\Html;

use PhmLabs\Base\Www\Html\Document;

/**
 * Interface for HTML validator implementations.
 *
 * @author Jan Brinkmann <lucky@the-luckyduck.de>
 */
interface Validator
{
    /**
     * @param Document A document we want to validate
     * @return bool valid: true | invalid: false
     */
    public function validate(Document $htmlDocument);
}

?>