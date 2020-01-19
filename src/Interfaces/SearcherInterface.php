<?php

namespace DivineOmega\WikipediaSearch\Interfaces;

interface SearcherInterface
{
    public function search(string $query): array;
}