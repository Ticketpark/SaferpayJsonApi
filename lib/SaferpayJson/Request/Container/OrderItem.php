<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class OrderItem
{
    public const TYPE_DIGITAL = 'DIGITAL';
    public const TYPE_PHYSICAL = 'PHYSICAL';
    public const TYPE_SERVICE = 'SERVICE';
    public const TYPE_GIFTCARD = 'GIFTCARD';
    public const TYPE_DISCOUNT = 'DISCOUNT';
    public const TYPE_SHIPPINGFEE = 'SHIPPINGFEE';
    public const TYPE_SALESTAX = 'SALESTAX';
    public const TYPE_SURCHARGE = 'SURCHARGE';

    /**
     * @SerializedName("Type")
     */
    private ?string $type = null;

    /**
     * @SerializedName("Id")
     */
    private ?string $id = null;

    /**
     * @SerializedName("VariantId")
     */
    private ?string $variantId = null;

    /**
     * @SerializedName("Name")
     */
    private ?string $name = null;

    /**
     * @SerializedName("CategoryName")
     */
    private ?string $categoryName = null;

    /**
     * @SerializedName("Description")
     */
    private ?string $description = null;

    /**
     * @SerializedName("Quantity")
     */
    private ?string $quantity = null;

    /**
     * @SerializedName("UnitPrice")
     */
    private ?string $unitPrice = null;

    /**
     * @SerializedName("IsPreOrder")
     */
    private ?string $isPreOrder = null;

    /**
     * @SerializedName("TaxRate")
     */
    private ?string $taxRate = null;

    /**
     * @SerializedName("TaxAmount")
     */
    private ?string $taxAmount = null;

    /**
     * @SerializedName("DiscountAmount")
     */
    private ?string $discountAmount = null;

    /**
     * @SerializedName("ProductUrl")
     */
    private ?string $productUrl = null;

    /**
     * @SerializedName("ImageUrl")
     */
    private ?string $imageUrl = null;


    public function getType(): ?string
    {
        return $this->type;
    }


    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }


    public function getId(): ?string
    {
        return $this->id;
    }


    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getVariantId(): ?string
    {
        return $this->variantId;
    }


    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }


    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getQuantity(): ?string
    {
        return $this->quantity;
    }


    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }


    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }


    public function getIsPreOrder(): ?string
    {
        return $this->isPreOrder;
    }


    public function setIsPreOrder(?string $isPreOrder): self
    {
        $this->isPreOrder = $isPreOrder;

        return $this;
    }


    public function getTaxRate(): ?string
    {
        return $this->taxRate;
    }


    public function setTaxRate(?string $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }


    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }


    public function setTaxAmount(?string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }


    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }


    public function setDiscountAmount(?string $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getProductUrl(): ?string
    {
        return $this->productUrl;
    }

    public function setProductUrl(?string $productUrl): self
    {
        $this->productUrl = $productUrl;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
