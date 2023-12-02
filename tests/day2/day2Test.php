<?php
declare(strict_types=1);

use Solutions\Day2\Present;
use Solutions\Day2\Ribbon;
use Solutions\Day2\WrappingPaper;

test('Formule de calcul WrappingPaper', function() {
    expect(WrappingPaper::calculSurface(2, 3, 4))->toBe(58);
    expect(WrappingPaper::calculSurface(1, 1, 10))->toBe(43);
});

test('Parsing Present', function() {
    $present = Present::createFromText('2x3x4');

    expect($present->l)->toBe(2);
    expect($present->w)->toBe(3);
    expect($present->h)->toBe(4);
});

test('Formule de calcul WrappingPaper sur Present', function() {
    $present = Present::createFromText('2x3x4');
    expect($present->getWrappingPaperSurface())->toBe(58);
});

test('Formule de calcul Ribbon', function() {
    expect(Ribbon::calculLength(2, 3, 4))->toBe(34);
    expect(Ribbon::calculLength(1, 1, 10))->toBe(14);
});

test('Formule de calcul Ribbon sur Present', function() {
    $present = Present::createFromText('2x3x4');
    expect($present->getRibbonLength())->toBe(34);
});