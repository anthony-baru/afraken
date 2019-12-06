<?php
$examData = new \App\Classes\Data\AfrakenData();

return [
    'secret' => $examData->GetNocaptchaSecret(),
    'sitekey' => $examData->GetNocaptchaSitekey(),
    'options' => [
        'timeout' => 2.0,
    ],
];
