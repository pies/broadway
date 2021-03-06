<?php

/*
 * This file is part of the broadway/broadway package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Broadway\EventStore;

use Broadway\Domain\DomainMessage;

interface EventVisitorInterface
{
    /**
     * @param DomainMessage $domainMessage
     */
    public function doWithEvent(DomainMessage $domainMessage);
}
