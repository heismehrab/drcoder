<?php

return [
    'sign' => env('ENCODER_SERVICE_SIGN'),
    'mode' => env('ENCODER_SERVICE_MODE'),
    'blockSize' => constant("MCRYPT_RIJNDAEL_" . env('ENCODER_SERVICE_BLOCK_SIZE')),
    'iv' => env('ENCODER_SERVICE_IV'),
    'key' => env('ENCODER_SERVICE_KEY')
];
