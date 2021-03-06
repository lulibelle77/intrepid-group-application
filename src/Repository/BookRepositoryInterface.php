<?php
namespace IntrepidGroup\SampleApplication\Repository;

/**
 * Interface BookRepositoryInterface
 *
 * This interface defines the api contract for all implementing Repositories for the Book Entity
 *
 * @package IntrepidGroup\SampleApplication\Repository
 */
interface BookRepositoryInterface
{
    public function fetchAll();
}