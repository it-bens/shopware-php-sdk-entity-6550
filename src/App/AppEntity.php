<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\App;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AclRole\AclRoleEntity;
use ITB\ShopwareSdkEntity\AppActionButton\AppActionButtonCollection;
use ITB\ShopwareSdkEntity\AppCmsBlock\AppCmsBlockCollection;
use ITB\ShopwareSdkEntity\AppFlowAction\AppFlowActionCollection;
use ITB\ShopwareSdkEntity\AppFlowEvent\AppFlowEventCollection;
use ITB\ShopwareSdkEntity\AppPaymentMethod\AppPaymentMethodCollection;
use ITB\ShopwareSdkEntity\AppScriptCondition\AppScriptConditionCollection;
use ITB\ShopwareSdkEntity\AppTemplate\AppTemplateCollection;
use ITB\ShopwareSdkEntity\AppTranslation\AppTranslationCollection;
use ITB\ShopwareSdkEntity\CustomFieldSet\CustomFieldSetCollection;
use ITB\ShopwareSdkEntity\Integration\IntegrationEntity;
use ITB\ShopwareSdkEntity\Script\ScriptCollection;
use ITB\ShopwareSdkEntity\TaxProvider\TaxProviderCollection;
use ITB\ShopwareSdkEntity\Webhook\WebhookCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppEntity extends Entity
{
    public ?AclRoleEntity $aclRole = null;

    public ?string $aclRoleId = null;

    public ?AppActionButtonCollection $actionButtons = null;

    public ?bool $active = null;

    public ?bool $allowDisable = null;

    public ?array $allowedHosts = null;

    public ?string $appSecret = null;

    public ?string $author = null;

    public ?string $baseAppUrl = null;

    public ?AppCmsBlockCollection $cmsBlocks = null;

    public ?bool $configurable = null;

    public ?array $cookies = null;

    public ?string $copyright = null;

    public ?CustomFieldSetCollection $customFieldSets = null;

    public ?string $description = null;

    public ?AppFlowActionCollection $flowActions = null;

    public ?AppFlowEventCollection $flowEvents = null;

    public ?string $icon = null;

    public ?string $iconRaw = null;

    public ?IntegrationEntity $integration = null;

    public ?string $integrationId = null;

    public ?string $label = null;

    public ?string $license = null;

    public ?array $mainModule = null;

    public ?array $modules = null;

    public ?string $name = null;

    public ?string $path = null;

    public ?AppPaymentMethodCollection $paymentMethods = null;

    public ?string $privacy = null;

    public ?string $privacyPolicyExtensions = null;

    public ?AppScriptConditionCollection $scriptConditions = null;

    public ?ScriptCollection $scripts = null;

    public ?TaxProviderCollection $taxProviders = null;

    public ?int $templateLoadPriority = null;

    public ?AppTemplateCollection $templates = null;

    public ?AppTranslationCollection $translations = null;

    public ?string $version = null;

    public ?WebhookCollection $webhooks = null;
}
