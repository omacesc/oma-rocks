<?php

namespace Omacesc\OmaRocks\Tests;

use Omacesc\OmaRocks\QuoteFactory;
use PHPUnit\Framework\TestCase;

class QuotesFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_an_specific_quote()
    {
        $testQuote = [
            'author' => 'Agustí',
            'quote' => 'Pam!'
        ];

        $quoteFactory = new QuoteFactory($testQuote);

        $quote = $quoteFactory->getRandomQuote();

        $this->assertSame($quote, $testQuote);
    }

    /** @test */
    public function it_returns_a_random_quote()
    {
        $quoteFactory = new QuoteFactory();

        $quote = $quoteFactory->getRandomQuote();

        $this->assertArrayHasKey('author', $quote);
        $this->assertArrayHasKey('quote', $quote);
    }
}