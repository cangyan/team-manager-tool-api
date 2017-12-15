<?php

declare(strict_types=1);

namespace Domain\Tool\Common;

final class JiraTaskConfigId
{
    /**
     * @var int|null
     */
    private $value;

    /**
     * JiraTaskConfigId constructor.
     * @param int|null $value
     */
    private function __construct(?int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int|null $value
     * @return JiraTaskConfigId
     */
    public static function of(?int $value): self
    {
        return new self($value);
    }
}