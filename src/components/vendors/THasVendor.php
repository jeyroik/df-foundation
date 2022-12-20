<?php
namespace df\components\vendors;

use df\interfaces\vendors\IHaveVendor;
use df\interfaces\vendors\IVendor;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository vendors()
 */
trait THasVendor
{
    public function getVendorId(): string
    {
        return $this->config[IHaveVendor::FIELD__VENDOR_ID] ?? '';
    }

    public function setVendorId(string $uuid): self
    {
        $this->config[IHaveVendor::FIELD__VENDOR_ID] = $uuid;

        return $this;
    }

    public function getVendor(): ?IVendor
    {
        return $this->vendors()->one([
            IVendor::FIELD__ID => $this->getVendorId()
        ]);
    }
}
