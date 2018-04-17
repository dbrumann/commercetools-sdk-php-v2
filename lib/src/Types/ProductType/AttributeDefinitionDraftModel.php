<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class AttributeDefinitionDraftModel extends JsonObjectModel implements AttributeDefinitionDraft {
    /**
     * @var mixed
     */
    protected $type;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $label;
    /**
     * @var mixed
     */
    protected $isRequired;
    /**
     * @var string
     */
    protected $attributeConstraint;
    /**
     * @var LocalizedString
     */
    protected $inputTip;
    /**
     * @var string
     */
    protected $inputHint;
    /**
     * @var mixed
     */
    protected $isSearchable;

    /**
     * @return mixed
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_LABEL);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->label = $value;
        }
        return $this->label;
    }
    /**
     * @return mixed
     */
    public function getIsRequired()
    {
        if (is_null($this->isRequired)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_IS_REQUIRED);
            $this->isRequired = $value;
        }
        return $this->isRequired;
    }
    /**
     * @return string
     */
    public function getAttributeConstraint()
    {
        if (is_null($this->attributeConstraint)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_ATTRIBUTE_CONSTRAINT);
            $value = (string)$value;
            $this->attributeConstraint = $value;
        }
        return $this->attributeConstraint;
    }
    /**
     * @return LocalizedString
     */
    public function getInputTip()
    {
        if (is_null($this->inputTip)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_INPUT_TIP);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->inputTip = $value;
        }
        return $this->inputTip;
    }
    /**
     * @return string
     */
    public function getInputHint()
    {
        if (is_null($this->inputHint)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_INPUT_HINT);
            $value = (string)$value;
            $this->inputHint = $value;
        }
        return $this->inputHint;
    }
    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        if (is_null($this->isSearchable)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_IS_SEARCHABLE);
            $this->isSearchable = $value;
        }
        return $this->isSearchable;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }
    /**
     * @param $isRequired
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }
    /**
     * @param string $attributeConstraint
     * @return $this
     */
    public function setAttributeConstraint(string $attributeConstraint)
    {
        $this->attributeConstraint = (string)$attributeConstraint;

        return $this;
    }
    /**
     * @param LocalizedString $inputTip
     * @return $this
     */
    public function setInputTip(LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }
    /**
     * @param string $inputHint
     * @return $this
     */
    public function setInputHint(string $inputHint)
    {
        $this->inputHint = (string)$inputHint;

        return $this;
    }
    /**
     * @param $isSearchable
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;

        return $this;
    }

    /**
     * @return AttributeType
     */
    public function getTypeAsAttributeType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            $resolvedClass = $this->resolveDiscriminator(AttributeType::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeBooleanType
     */
    public function getTypeAsAttributeBooleanType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeBooleanType::class, null);
            }
            $value = $this->mapData(AttributeBooleanType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeDateTimeType
     */
    public function getTypeAsAttributeDateTimeType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeDateTimeType::class, null);
            }
            $value = $this->mapData(AttributeDateTimeType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeDateType
     */
    public function getTypeAsAttributeDateType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeDateType::class, null);
            }
            $value = $this->mapData(AttributeDateType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeTimeType
     */
    public function getTypeAsAttributeTimeType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeTimeType::class, null);
            }
            $value = $this->mapData(AttributeTimeType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeEnumType
     */
    public function getTypeAsAttributeEnumType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeEnumType::class, null);
            }
            $value = $this->mapData(AttributeEnumType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeLocalizedEnumType
     */
    public function getTypeAsAttributeLocalizedEnumType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumType::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeMoneyType
     */
    public function getTypeAsAttributeMoneyType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeMoneyType::class, null);
            }
            $value = $this->mapData(AttributeMoneyType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeNestedType
     */
    public function getTypeAsAttributeNestedType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeNestedType::class, null);
            }
            $value = $this->mapData(AttributeNestedType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeNumberType
     */
    public function getTypeAsAttributeNumberType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeNumberType::class, null);
            }
            $value = $this->mapData(AttributeNumberType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeReferenceType
     */
    public function getTypeAsAttributeReferenceType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeReferenceType::class, null);
            }
            $value = $this->mapData(AttributeReferenceType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeSetType
     */
    public function getTypeAsAttributeSetType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeSetType::class, null);
            }
            $value = $this->mapData(AttributeSetType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @return AttributeTextType
     */
    public function getTypeAsAttributeTextType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(AttributeDefinitionDraft::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(AttributeTextType::class, null);
            }
            $value = $this->mapData(AttributeTextType::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

}
