<?php

namespace DivineOmega\WikipediaSearch\Tests;

use DivineOmega\BaseSearch\Interfaces\SearchResultInterface;
use DivineOmega\WikipediaSearch\Enums\Languages;
use DivineOmega\WikipediaSearch\WikipediaSearcher;
use DivineOmega\WikipediaSearch\WikipediaSearchResult;
use PHPUnit\Framework\TestCase;

final class SearchTest extends TestCase
{
    public function testSearch()
    {
        $searcher = new WikipediaSearcher(Languages::ENGLISH);

        $results = $searcher->search('PHP programming language');

        $this->assertGreaterThanOrEqual(1, count($results));

        foreach($results as $result) {
            $this->assertTrue($result instanceof WikipediaSearchResult);
            $this->assertTrue($result instanceof SearchResultInterface);

            $this->assertGreaterThanOrEqual(0, $result->getScore());
            $this->assertLessThanOrEqual(1, $result->getScore());
        }
    }

}
