<?php

namespace DivineOmega\WikipediaSearch\Interfaces;

interface SearchResultInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
    public function getUrl(): string;
    public function getScore(): float;
}