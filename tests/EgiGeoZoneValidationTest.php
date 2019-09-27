<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class EgiGeoZoneValidationTest extends TestCaseSymconValidation
{
    public function testValidateEgiGeoZone(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateEgiGeoZoneModule(): void
    {
        $this->validateModule(__DIR__ . '/../EgiGeoZone');
    }
}