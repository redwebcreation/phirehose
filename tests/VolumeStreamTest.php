<?php

use RWC\TwitterStream\VolumeStream;

it('has the correct endpoint', function () {
    $stream = new VolumeStream();

    expect($stream->endpoint())->toBe('https://api.twitter.com/2/tweets/sample/stream');
});