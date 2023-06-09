# Shop

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_id** | **int** | The unique positive non-zero numeric ID for an Etsy Shop. | [optional] 
**user_id** | **int** | The numeric user ID of the [user](/documentation/reference#tag/User) who owns this shop. | [optional] 
**shop_name** | **string** | The shop&#x27;s name string. | [optional] 
**create_date** | **int** | The date and time this shop was created, in epoch seconds. | [optional] 
**created_timestamp** | **int** | The date and time this shop was created, in epoch seconds. | [optional] 
**title** | **string** | A brief heading string for the shop\\&#x27;s main page. | [optional] 
**announcement** | **string** | An announcement string to buyers that displays on the shop&#x27;s homepage. | [optional] 
**currency_code** | **string** | The ISO (alphabetic) code for the shop&#x27;s currency. The shop displays all prices in this currency by default. | [optional] 
**is_vacation** | **bool** | When true, this shop is not accepting purchases. | [optional] 
**vacation_message** | **string** | The shop&#x27;s message string displayed when &#x60;is_vacation&#x60; is true. | [optional] 
**sale_message** | **string** | A message string sent to users who complete a purchase from this shop. | [optional] 
**digital_sale_message** | **string** | A message string sent to users who purchase a digital item from this shop. | [optional] 
**update_date** | **int** | The date and time of the last update to the shop, in epoch seconds. | [optional] 
**updated_timestamp** | **int** | The date and time of the last update to the shop, in epoch seconds. | [optional] 
**listing_active_count** | **int** | The number of active listings in the shop. | [optional] 
**digital_listing_count** | **int** | The number of digital listings in the shop. | [optional] 
**login_name** | **string** | The shop owner\\&#x27;s login name string. | [optional] 
**accepts_custom_requests** | **bool** | When true, the shop accepts customization requests. | [optional] 
**policy_welcome** | **string** | The shop&#x27;s policy welcome string (may be blank). | [optional] 
**policy_payment** | **string** | The shop&#x27;s payment policy string (may be blank). | [optional] 
**policy_shipping** | **string** | The shop&#x27;s shipping policy string (may be blank). | [optional] 
**policy_refunds** | **string** | The shop&#x27;s refund policy string (may be blank). | [optional] 
**policy_additional** | **string** | The shop&#x27;s additional policies string (may be blank). | [optional] 
**policy_seller_info** | **string** | The shop&#x27;s seller information string (may be blank). | [optional] 
**policy_update_date** | **int** | The date and time of the last update to the shop&#x27;s policies, in epoch seconds. | [optional] 
**policy_has_private_receipt_info** | **bool** | When true, EU receipts display private info. | [optional] 
**has_unstructured_policies** | **bool** | When true, the shop displays additional unstructured policy fields. | [optional] 
**policy_privacy** | **string** | The shop&#x27;s privacy policy string (may be blank). | [optional] 
**vacation_autoreply** | **string** | The shop&#x27;s automatic reply string displayed in new conversations when &#x60;is_vacation&#x60; is true. | [optional] 
**url** | **string** | The URL string for this shop. | [optional] 
**image_url_760x100** | **string** | The URL string for this shop&#x27;s banner image. | [optional] 
**num_favorers** | **int** | The number of users who marked this shop a favorite. | [optional] 
**languages** | **string[]** | A list of language strings for the shop&#x27;s enrolled languages where the default shop language is the first element in the array. | [optional] 
**icon_url_fullxfull** | **string** | The URL string for this shop&#x27;s icon image. | [optional] 
**is_using_structured_policies** | **bool** | When true, the shop accepted using structured policies. | [optional] 
**has_onboarded_structured_policies** | **bool** | When true, the shop accepted OR declined after viewing structured policies onboarding. | [optional] 
**include_dispute_form_link** | **bool** | When true, this shop\\&#x27;s policies include a link to an EU online dispute form. | [optional] 
**is_direct_checkout_onboarded** | **bool** | (**DEPRECATED: Replaced by _is_etsy_payments_onboarded_.) When true, the shop has onboarded onto Etsy Payments. | [optional] 
**is_etsy_payments_onboarded** | **bool** | When true, the shop has onboarded onto Etsy Payments. | [optional] 
**is_calculated_eligible** | **bool** | When true, the shop is eligible for calculated shipping profiles. (Only available in the US and Canada) | [optional] 
**is_opted_in_to_buyer_promise** | **bool** | When true, the shop opted in to buyer promise. | [optional] 
**is_shop_us_based** | **bool** | When true, the shop is based in the US. | [optional] 
**transaction_sold_count** | **int** | The total number of sales ([transactions](/documentation/reference#tag/Shop-Receipt-Transactions)) for this shop. | [optional] 
**shipping_from_country_iso** | **string** | The country iso the shop is shipping from. | [optional] 
**shop_location_country_iso** | **string** | The country iso where the shop is located. | [optional] 
**review_count** | **int** | Number of reviews of shop listings in the past year. | [optional] 
**review_average** | **float** | Average rating based on reviews of shop listings in the past year. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

