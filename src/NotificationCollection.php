<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity;

use ITB\ShopwareSdkDataCore\Collection;

/**
 * @extends Collection<Notification>
 */
class NotificationCollection extends Collection
{
    /**
     * @param iterable<Notification> $notifications
     */
    public function __construct(
        iterable $notifications = [],
        private readonly ?string $latestTimestamp = null
    ) {
        $notifications = $notifications instanceof \Traversable ? iterator_to_array($notifications) : $notifications;
        parent::__construct($notifications);
    }

    #[\Override]
    public function getExpectedClass(): string
    {
        return Notification::class;
    }

    /**
     * @api
     */
    public function getLatestTimestamp(): ?string
    {
        return $this->latestTimestamp;
    }
}
