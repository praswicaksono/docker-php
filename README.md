# PHP Docker SDK

Rewrite version of [Docker PHP](https://github.com/docker-php/docker-php)

Dependencies:

- [amphp/http-client](https://github.com/amphp/http-client)
- [jane-php/open-api-runtime](https://github.com/jane-php/open-api-runtime)

Not all streaming based endpoint have implemented yet.

# Usage

```php
use PRSW\Docker\Client;

$client = Client::withHttpClient();

$res = $client->systemEvents(fetch: Client::FETCH_STREAM);

forach ($res->stream() as $event) {
    var_dump($event);
}
```