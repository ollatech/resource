<?php
namespace Olla\Resource\Services\Collection;

use Olla\Prisma\Metadata;
use Olla\Flow\Repository;
use Olla\Flow\Guard;
use Olla\Flow\Validator;
use Olla\Resource\Collection;

final class Query implements Collection
{
    protected $metatada;
    protected $repository;
    protected $guard;
    protected $validator;
    public function __construct(Metadata $metadata, Repository $repository, Guard $guard, Validator $validator) {
        $this->metadata = $metadata;
        $this->repository = $repository;
        $this->guard = $guard;
        $this->validator = $validator;
    }
    public function get(string $resourceClass,  array $args = [], array $context = []) {
        return $this->repository->get($resourceClass)->get($args);
    }
    private function validate(array $args = [], array $context = []) {
        
    }
    private function args(array $configs = []) {
        return [
            'select' => 'object',
            'filter' => 'object',
            'page' => 'integer',
            'limit' => 'integer',
            'sort' => [
                '{property}' => 'string'
            ],
            'language' => 'string',
            'country' => 'string',
            'device' => 'string',
            'broker' => 'string',
            'domain' => 'string',
            'tenant' => 'string'
        ];
    }
}
