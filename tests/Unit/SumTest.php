<?php

/*
test('sum', function () {
    $result = sum(1, 2);

    expect($result)->toBe(3);
});
*/

describe('sum', function () {
    test('may sum integers', function () {
        $result = sum(1, 2);

        expect($result)->toBe(3);
    });

    test('may sum floats', function () {
        $result = sum(1.5, 2.5);

        expect($result)->toBe(4.0);
    });
});
