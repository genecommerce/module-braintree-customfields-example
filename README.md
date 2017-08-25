# Braintree Custom Fields Example for Magento 2
This is an example module demonstrating how to add a custom field to the Braintree transaction request within Magento 2.

Custom fields provide an easy way to collect additional information about your customers or their purchase, like the name of the product they purchased. They can be included when creating a transaction or adding a customer to the Vault, and can be stored in the Braintree gateway for reporting purposes.

## Useful Links
- [Registering your custom field within the Braintree Control Panel](https://articles.braintreepayments.com/control-panel/custom-fields)
- [Developer documentation on custom fields](https://developers.braintreepayments.com/reference/request/transaction/sale/php#custom-fields) (this is not strictly relevant, as the Baintree Magento 2 Module handles this)

## Instructions
1. Define a class that implements `Magento\Braintree\Model\CustomFields\CustomFieldInterface` [[Example](https://github.com/genecommerce/module-braintree-customfields-example/blob/master/Model/CustomField/CustomerId.php)]
2. Within `di.xml` define an additional argument for the `Magento\Braintree\Model\CustomFields\Pool` passing through an instance of your object [[Example](https://github.com/genecommerce/module-braintree-customfields-example/blob/master/etc/di.xml#L6)]
