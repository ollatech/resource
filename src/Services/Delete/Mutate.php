<?php
namespace Olla\Resource\Services\Delete;

use Olla\Prisma\MetadataInterface;
use Olla\Flow\Repository;
use Olla\Flow\Guard;
use Olla\Flow\Validator;
use Olla\Resource\Delete;

final class Mutate implements Delete
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
    
    public function mutate(string $resourceClass,  array $args = [], array $context = []) {
        
    }
}
