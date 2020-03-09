Intacct Accounts Aging Module
=============================

Module utilized with [Intacct PHP SDK](https://developer.intacct.com/tools/sdk-php/).

### Example Usage:

```php
    /** @var ClientConfig $clientConfig */
    $clientConfig = new ClientConfig();

    $client = new OnlineClient($clientConfig);

    /** @var ArAging $accountsReceivableRequest **/
    $accountsReceivableRequest = new ArAging();
    $accountsReceivableRequest->setAgingPeriods('0-');
    $accountsReceivableRequest->setLocationId('03');
    $accountsReceivableRequest->setShowDetails(true);

    $response = $client->execute($accountsReceivableRequest);
```
