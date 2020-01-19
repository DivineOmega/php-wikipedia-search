<?php

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
        }
    }

}
