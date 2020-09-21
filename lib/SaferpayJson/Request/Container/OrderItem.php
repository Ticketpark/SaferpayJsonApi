<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class OrderItem
{
    const TYPE_DIGITAL = 'DIGITAL';
    const TYPE_PHYSICAL = 'PHYSICAL';
    const TYPE_SERVICE = 'SERVICE';
    const TYPE_GIFTCARD = 'GIFTCARD';
    const TYPE_DISCOUNT = 'DISCOUNT';
    const TYPE_SHIPPINGFEE = 'SHIPPINGFEE';
    const TYPE_SALESTAX = 'SALESTAX';
    const TYPE_SURCHARGE = 'SURCHARGE';

    /**
     * @var string|null
     * @SerializedName("Type")
     */
    private $type;

    /**
     * @var string|null
     * @SerializedName("Id")
     */
    private $id;

    /**
     * @var string|null
     * @SerializedName("VariantId")
     */
    private $variantId;

    /**
     * @var string|null
     * @SerializedName("Name")
     */
    private $name;

    /**
     * @var string|null
     * @SerializedName("CategoryName")
     */
    private $categoryName;

    /**
     * @var string|null
     * @SerializedName("Description")
     */
    private $description;

    /**
     * @var string|null
     * @SerializedName("Quantity")
     */
    private $quantity;

    /**
     * @var string|null
     * @SerializedName("UnitPrice")
     */
    private $unitPrice;

    /**
     * @var string|null
     * @SerializedName("IsPreOrder")
     */
    private $isPreOrder;

    /**
     * @var string|null
     * @SerializedName("TaxRate")
     */
    private $taxRate;

    /**
     * @var string|null
     * @SerializedName("TaxAmount")
     */
    private $taxAmount;

    /**
     * @var string|null
     * @SerializedName("DiscountAmount")
     */
    private $discountAmount;


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
}
