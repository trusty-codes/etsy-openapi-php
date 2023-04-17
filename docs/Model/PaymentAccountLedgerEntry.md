# PaymentAccountLedgerEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_id** | **int** | The ledger entry&#x27;s numeric ID. | [optional] 
**ledger_id** | **int** | The ledger&#x27;s numeric ID. | [optional] 
**sequence_number** | **int** | The sequence allows ledger entries to be sorted chronologically. The higher the sequence, the more recent the entry. | [optional] 
**amount** | **int** | The amount of money credited to the ledger. | [optional] 
**currency** | **string** | The currency of the entry on the ledger. | [optional] 
**description** | **string** | Details what kind of ledger entry this is: a payment, refund, reversal of a failed refund, disbursement, returned disbursement, recoupment, miscellaneous credit, miscellaneous debit, or bill payment. | [optional] 
**balance** | **int** | The amount of money in the shop&#x27;s ledger the moment after this entry was applied. | [optional] 
**create_date** | **int** | The date and time the ledger entry was created in Epoch seconds. | [optional] 
**created_timestamp** | **int** | The date and time the ledger entry was created in Epoch seconds. | [optional] 
**ledger_type** | **string** | The original reference type for the ledger entry. | [optional] 
**reference_type** | **string** | The object type the ledger entry refers to. | [optional] 
**reference_id** | **string** | The object id the ledger entry refers to. | [optional] 
**payment_adjustments** | [**\Swagger\Client\Model\AllOfPaymentAccountLedgerEntryPaymentAdjustmentsItems[]**](.md) | List of refund objects on an Etsy Payments transaction. All monetary amounts are in USD pennies unless otherwise specified. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

