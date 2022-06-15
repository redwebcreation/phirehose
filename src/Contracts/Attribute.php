<?php

namespace RWC\TwitterStream\Contracts;

interface Attribute
{
    public function compile(): string;

    public function markAsNegated(): self;
}