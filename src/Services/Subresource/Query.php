<?php
namespace Olla\Resource\Services\Subresource;

use Olla\Prisma\MetadataInterface;
use Olla\Flow\Repository;
use Olla\Flow\Guard;
use Olla\Flow\Validator;
use Olla\Resource\Subresource;

final class Query implements Subresource
{
	protected $metatada;
    protected $repository;
    protected $guard;
    protected $validator;
    public function __construct(MetadataInterface $metadata, Repository $repository, Guard $guard, Validator $validator) {
    	$this->metadata = $metadata;
        $this->repository = $repository;
        $this->guard = $guard;
        $this->validator = $validator;
    }
    public function get(string $resourceClass,  array $args = [], array $context = []) {
        
    }
    private function validate(array $args = [], array $context = []) {
        
    }
}
