// Visit https://developers.google.com/gmail/api/quickstart/php
// for an example of how to build the getClient() function.
$client = getClient();

$service = new \Google_Service_Gmail($client);
$mailer = $service->users_messages;

$message = (new \Swift_Message('Here is my subject'))
    ->setFrom('aarthymaha2000@gmail.com')
    ->setTo(['akhilapadmanaban@gmail.com'=>'Test Name'])
    ->setContentType('text/html')
    ->setCharset('utf-8')
    ->setBody('<h4>Here is my body</h4>');

$msg_base64 = (new \Swift_Mime_ContentEncoder_Base64ContentEncoder())
    ->encodeString($message->toString());

$message = new \Google_Service_Gmail_Message();
$message->setRaw($msg_base64);
$message = $mailer->send('me', $message);
print_r($message);
