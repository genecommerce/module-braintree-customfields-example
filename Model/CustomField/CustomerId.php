<?php

namespace Gene\CustomFieldsExample\Model\CustomField;

use Magento\Braintree\Model\CustomFields\CustomFieldInterface;
use Magento\Braintree\Gateway\Helper\SubjectReader;

class CustomerId implements CustomFieldInterface
{
    /**
     * @var SubjectReader
     */
    protected $subjectReader;

    /**
     * CustomerId constructor.
     * @param SubjectReader $subjectReader
     */
    public function __construct(
        SubjectReader $subjectReader
    ) {
        $this->subjectReader = $subjectReader;
    }

    /**
     * @inheritdoc
     */
    public function getApiName()
    {
        return "customer_id";
    }

    /**
     * @inheritdoc
     */
    public function getValue($buildSubject)
    {
        try {
            $customerId = $this->subjectReader->readCustomerId($buildSubject);
        } catch (\InvalidArgumentException $exception) {
            // Return blank when the customer ID hasn't been defined
            $customerId = '';
        }

        return $customerId;
    }
}
