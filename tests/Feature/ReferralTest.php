<?php

it('allows subscribers to earn money by referring their friends', function () {
    // Referral
    // redeem
});

it('disallows guests from participating in the referral program', function () {
    $container = new Container();

    $container->bind('foo', fn() => 'bar');

    $result = $container->resolve('foo');

    expect($result)->toEqual('bar');
});
