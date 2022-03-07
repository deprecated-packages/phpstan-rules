<?php

declare(strict_types=1);

namespace Reveal\PHPStanRules\Tests\Rule\ValueObjectDestructRule\Source;

final class SomeValueObject
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $surname;
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    private function getFullname(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    protected function getTitle(): string
    {
        return 'Phd';
    }
}
