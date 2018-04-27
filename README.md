# testing-ver

# token-generator (MD5) - testing version - I suggest not to use for now
Generate one minute token to authenticate on remote server or random token.


---

## USAGE:
#install:
`composer require mirek001/token-generator:dev-master`

## USAGE:

```php
require 'vendor/mirek001/token-generator/src/token-generator.php';

$token = new TOKEN_GENERATOR;

$minute_token = $token->get_minute_token('YourSecretKeyHear');
echo $minute_token;

$random_token = $token->get_random_token('YourSecretKeyHear');
echo $random_token;

exit();
```

