<?php

describe('admin', function () {
    test("is admin", function () {
        expect(admin(1))->tobeTrue();
    });

    test("is not admin", function () {
        admin(99);
    })->throws(Exception::class);
});
