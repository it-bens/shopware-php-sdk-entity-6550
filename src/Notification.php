<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity;

use ITB\ShopwareSdkDataCore\Parsable;
use ITB\ShopwareSdkDataCore\Struct;

class Notification extends Struct implements Parsable
{
    public const string ERROR = 'error';

    public const string INFO = 'info';

    public const string SUCCESS = 'success';

    public const string WARNING = 'warning';

    /**
     * @param string[] $requiredPrivileges
     */
    private function __construct(
        private readonly string $status,
        private readonly string $message,
        private readonly bool $adminOnly = false,
        private readonly array $requiredPrivileges = []
    ) {
    }

    /**
     * @api
     *
     * @param string[] $requiredPrivileges
     */
    public static function create(string $status, string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return new self($status, $message, $adminOnly, $requiredPrivileges);
    }

    /**
     * @api
     *
     * @param string[] $requiredPrivileges
     */
    public static function createNotificationError(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::ERROR, $message, $adminOnly, $requiredPrivileges);
    }

    /**
     * @api
     *
     * @param string[] $requiredPrivileges
     */
    public static function createNotificationInfo(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::INFO, $message, $adminOnly, $requiredPrivileges);
    }

    /**
     * @api
     *
     * @param string[] $requiredPrivileges
     */
    public static function createNotificationSuccess(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::SUCCESS, $message, $adminOnly, $requiredPrivileges);
    }

    /**
     * @api
     *
     * @param string[] $requiredPrivileges
     */
    public static function createNotificationWarning(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::WARNING, $message, $adminOnly, $requiredPrivileges);
    }

    /**
     * @return array{status: string, message: string, adminOnly: bool, requiredPrivileges: string[]}
     */
    #[\Override]
    public function parse(): array
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'adminOnly' => $this->adminOnly,
            'requiredPrivileges' => $this->requiredPrivileges,
        ];
    }
}
