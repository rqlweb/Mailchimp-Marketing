<?php

 require_once('../MailchimpMarketing/vendor/autoload.php');

class AddMember {
    

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
  'apiKey' => 'YOUR_API_KEY',
  'server' => 'YOUR_SERVER_PREFIX'
]);

$response = $mailchimp->ping->get();
print_r($response);

}
