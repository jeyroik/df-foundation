<?php
namespace df\interfaces\vendors;

interface IHaveVendor
{
    public const FIELD__VENDOR_ID = 'vendor_id';

    public function getVendorId(): string;
    public function setVendorId(string $uuid): self;

    public function getVendor(): ?IVendor;
}
