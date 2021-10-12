<?php


namespace App\Al7arefa\Interfaces\Resources;


interface ResourceInterface
{
    public function get($input);

    public function all(): ?array;
}
