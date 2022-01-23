<?php

interface JsonConvertible
{
    public function toJson(): string;

    public static function fromJson(string $json);
}
