
# St Invoice Adapter

ST Invoice Adapter is a package for St Invoice integration that been linked to MyInvois LHDN.

## Requirement

- Api Key
- Secret Key
- Linked with Sankyu Tech MyInvois as Intermediary

## Reference



## Installation

```bash
composer require sankyutech/stinvoice-adapter
```
    
## Usage/Examples

## Invoice

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Sankyu\Client;
use Sankyu\One\Submission;
use Sankyu\CustomSankyuAuth;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as GuzzleClient;

use Sankyu\One\Mapper\ReferenceNumber;
use Sankyu\One\Mapper\Supplier;
use Sankyu\One\Mapper\Customer;
use Sankyu\One\Mapper\DocumentLine;
use Sankyu\One\Mapper\TaxTotal;
use Sankyu\One\Mapper\LegalMonitoryTotal;
use Sankyu\One\Mapper\Wrapper;

$config = [
    'api_key' => 'your_api_key',
    'api_secret' => 'your_secret_key',
    'use_sandbox'  => true,
];

$httpClient = new GuzzleClient(['verify' => false]);

$client = Client::make($httpClient, $config)
    ->provideAuth(new CustomSankyuAuth($config['api_key'], $config['api_secret']));

$referenceNumber = new ReferenceNumber();
$reference = $referenceNumber->setDocumentReferenceNo('INV0001');
$reference = $referenceNumber->setBillingReferenceNo('RECEIPT0001');
$reference = $referenceNumber->setUpInvoiceReference();

$supplier = new Supplier();
$supplierDetails = $supplier->setAddressLine1('Address 1');
$supplierDetails = $supplier->setAddressLine2('Address 2');
$supplierDetails = $supplier->setAddressLine3('Address 3');
$supplierDetails = $supplier->setCity('Bangi');
$supplierDetails = $supplier->setState('Selangor');
$supplierDetails = $supplier->setPostcode('43650');
$supplierDetails = $supplier->setCountryCode('MYS');
$supplierDetails = $supplier->setRegistrationName('Ahmad');
$supplierDetails = $supplier->setPhone('+60123456789');
$supplierDetails = $supplier->setTaxIdentificationNo('enter_valid_tax_no');
$supplierDetails = $supplier->setIdentificationNo('enter_valid_indentification_no');
// NRIC/BRN/ARMY/PASSPORT
$supplierDetails = $supplier->setIdentificationType('NRIC');
//Put NA if not available
$supplierDetails = $supplier->setSSTRegistrationNo('NA');
// Refer to Supplier SSM
$supplierDetails = $supplier->setMISCCode('47733');
$supplierDetails = $supplier->setUpSupplier();

$customer = new Customer();
$customerDetails = $customer->setAddressLine1('Address 1');
$customerDetails = $customer->setAddressLine2('Address 2');
$customerDetails = $customer->setAddressLine3('Address 3');
$customerDetails = $customer->setCity('KEMAMAN');
$customerDetails = $customer->setState('Terengganu');
$customerDetails = $customer->setPostcode('24000');
$customerDetails = $customer->setCountryCode('MYS');
$customerDetails = $customer->setRegistrationName('MOHAMMAD');
$customerDetails = $customer->setPhone('+60123456789');
$customerDetails = $customer->setEmail('mohammad@gmail.com');
$customerDetails = $customer->setTaxIdentificationNo('enter_valid_tax_no');
$customerDetails = $customer->setIdentificationNo('enter_valid_indentification_no');
// NRIC/BRN/ARMY/PASSPORT
$customerDetails = $customer->setIdentificationType('NRIC');
// Refer to Supplier SSM
$customerDetails = $customer->setSSTRegistrationNo('NA');
$customerDetails = $customer->setUpCustomer();

$documentLine = new DocumentLine();
$line = $documentLine->setItemRecordID('1');
$line = $documentLine->setItemDescription('Laptop');
$line = $documentLine->setItemCountryCode('MYS');
$line = $documentLine->setItemUnitPrice(1000);
$line = $documentLine->setItemQuantity(1);
$line = $documentLine->setItemSubtotal(1000);
$line = $documentLine->setItemTaxTotal(0);
$line = $documentLine->setItemTaxDetails();
//amount,charges description,percentage
$line = $documentLine->setItemCharges(20,'Postage',2);
//amount,discount description,percentage
$line = $documentLine->setItemDiscount(10,'Coupon',1);
$line = $documentLine->setItemDiscount(10,'Membership Discount',1);
//Specific product commodity
$line = $documentLine->setItemCommodity('022','CLASS');
$line = $documentLine->setItem();

$line = $documentLine->setItemRecordID('2');
$line = $documentLine->setItemDescription('Mouse');
$line = $documentLine->setItemCountryCode('MYS');
$line = $documentLine->setItemUnitPrice(100);
$line = $documentLine->setItemQuantity(1);
$line = $documentLine->setItemSubtotal(100);
$line = $documentLine->setItemTaxTotal(0);
$line = $documentLine->setItemTaxDetails();
//set 0 if the item does not have any charge(s)
$line = $documentLine->setItemCharges(0);
//set 0 if the item does not have any discount(s)
$line = $documentLine->setItemDiscount(0);
$line = $documentLine->setItemCommodity('022','CLASS');
$line = $documentLine->setItem();

$line = $documentLine->setUpDocumentLine();

$taxTotal = new TaxTotal();
$tax = $taxTotal->setTaxSubtotal();
$tax = $taxTotal->setUpTaxTotal();

$legalMonitoryTotal = new LegalMonitoryTotal();
$monitory = $legalMonitoryTotal->setTotalNetAmount(1000);
$monitory = $legalMonitoryTotal->setTotalExcludeTax(1000);
$monitory = $legalMonitoryTotal->setTotalIncludeTax(1000);
$monitory = $legalMonitoryTotal->setTotalDiscount(0);
$monitory = $legalMonitoryTotal->setTotalCharges(0);
$monitory = $legalMonitoryTotal->setRoundingAmount(0);
$monitory = $legalMonitoryTotal->setPayableAmount(1000);
$monitory = $legalMonitoryTotal->setUpLegalMonitoryTotal();

$wrapper = new Wrapper();
//wrapping all parameter
$submissionDetails = $wrapper->wrapUp($reference,$supplierDetails,$customerDetails,$line,$tax,$monitory);

$submission = $client->v1()->submissions()->invoice($submissionDetails);

$responseBody = $submission->getBody();
$result = json_decode($responseBody, true);

```

## Credit Note

```php
<?php

......

use Sankyu\One\Mapper\InvoiceReference;

.....

//Only applicable for Credit Note, Debit Note, Refund Note, Self Billed Credit Note, Self Billed Debit Note, Self Billed Refund Note

$invoiceReference = new InvoiceReference();
$invoiceRef = $invoiceReference->setInvoiceReferenceInvoiceNo('INV0001');
$invoiceRef = $invoiceReference->setInvoiceReferenceUUID('invoice_uuid_generated_by_LHDN');
$invoiceRef = $invoiceReference->setUpInvoiceReference();

$wrapper = new Wrapper();
$submissionDetails = $wrapper->wrapUp($invoiceRef,$reference,$supplierDetails,$customerDetails,$line,$tax,$monitory);

$submission = $client->v1()->submissions()->creditNote($submissionDetails);

$responseBody = $submission->getBody();
$result = json_decode($responseBody, true);

```

## Debit Note

```php
$submission = $client->v1()->submissions()->debitNote($submissionDetails);

```

## Refund Note

```php
$submission = $client->v1()->submissions()->refundNote($submissionDetails);

```

## Self Billed Invoice

```php
$submission = $client->v1()->submissions()->selfBilledInvoice($submissionDetails);

```

## Self Billed Credit Note

```php
$submission = $client->v1()->submissions()->selfBilledCreditNote($submissionDetails);

```


## Self Billed Debit Note

```php
$submission = $client->v1()->submissions()->selfBilledDebitNote($submissionDetails);

```

## Self Billed Refund Note

```php
$submission = $client->v1()->submissions()->selfBilledRefundNote($submissionDetails);

```


# Non Submission Examples

## Get Submision Details

```php
$parameter = ['submission_uuid' => 'submission_uuid_received_from_LHDN'];

$submission = $client->v1()->submissions()->getSubmissionDetails($parameter);

```

## Get Submision Document

```php
$parameter = ['document_uuid' => 'document_uuid_received_from_LHDN'];

$submission = $client->v1()->submissions()->getSubmissionDocument($parameter);

```

## Get Submission Document Details

```php
$parameter = ['document_uuid' => 'document_uuid_received_from_LHDN'];

$submission = $client->v1()->submissions()->getSubmissionDocumentDetails($parameter);

```

## Get Submission Document Details Qr
// get document details including url for QR code generation

```php
$parameter = ['document_uuid' => 'document_uuid_received_from_LHDN'];

$submission = $client->v1()->submissions()->getSubmissionDocumentDetailsQr($parameter);

```

## Get Recent Document

```php
$submission = $client->v1()->submissions()->getRecentDocument();

```


## Reject Document

```php
$parameter = [
    'document_einvois_id' => 'document_uuid_received_from_LHDN',
    'reason' => 'Reject',
];

$submission = $client->v1()->submissions()->setRejectDocument($parameter);

```

## Cancel Document

```php
$parameter = [
    'document_einvois_id' => 'document_uuid_received_from_LHDN',
    'reason' => 'Reject',
];

$submission = $client->v1()->submissions()->setCancelDocument($parameter);

```

## Get Document Types

```php
$submission = $client->v1()->submissions()->getDocumentTypes();

```

## Validate Tax No

```php
$parameter = [
    'tax_identification_no' => 'enter_tax_identification_no',
    'identification_type' => 'enter_identification_type',
    'identification_no' => 'enter_identification_no',
];

$submission = $client->v1()->submissions()->validateTaxNo($parameter);

```

## Get Document QR Url

```php
$parameter = [
    'document_einvois_id' => 'document_uuid_received_from_LHDN',
    'document_einvoics_long_id' => 'document_long_id_received_from_LHDN',
];

$submission = $client->v1()->submissions()->getDocumentQrUrl($parameter);

```
