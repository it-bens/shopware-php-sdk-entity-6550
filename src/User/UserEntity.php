<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\User;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AclRole\AclRoleCollection;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\ImportExportLog\ImportExportLogCollection;
use ITB\ShopwareSdkEntity\Locale\LocaleEntity;
use ITB\ShopwareSdkEntity\Media\MediaCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\NotificationCollection;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\StateMachineHistory\StateMachineHistoryCollection;
use ITB\ShopwareSdkEntity\UserAccessKey\UserAccessKeyCollection;
use ITB\ShopwareSdkEntity\UserConfig\UserConfigCollection;
use ITB\ShopwareSdkEntity\UserRecovery\UserRecoveryEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserEntity extends Entity
{
    public ?UserAccessKeyCollection $accessKeys = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?bool $active = null;

    public ?bool $admin = null;

    public ?string $avatarId = null;

    public ?MediaEntity $avatarMedia = null;

    public ?UserConfigCollection $configs = null;

    public ?CustomerCollection $createdCustomers = null;

    public ?NotificationCollection $createdNotifications = null;

    public ?OrderCollection $createdOrders = null;

    public ?string $email = null;

    public ?string $firstName = null;

    public ?ImportExportLogCollection $importExportLogEntries = null;

    public ?string $lastName = null;

    public ?\DateTimeInterface $lastUpdatedPasswordAt = null;

    public ?LocaleEntity $locale = null;

    public ?string $localeId = null;

    public ?MediaCollection $media = null;

    public ?string $password = null;

    public ?UserRecoveryEntity $recoveryUser = null;

    public ?StateMachineHistoryCollection $stateMachineHistoryEntries = null;

    public ?string $storeToken = null;

    public ?string $timeZone = null;

    public ?string $title = null;

    public ?CustomerCollection $updatedCustomers = null;

    public ?OrderCollection $updatedOrders = null;

    public ?string $username = null;
}
