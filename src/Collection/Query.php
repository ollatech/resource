<?php
namespace Olla\Resource;

use Olla\Prisma\MetadataInterface;
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
    public function __construct(MetadataInterface $metadata, Repository $repository, Guard $guard, Validator $validator) {
    	$this->metadata = $metadata;
        $this->repository = $repository;
        $this->guard = $guard;
        $this->validator = $validator;
    }
    
    public function getCollection(string $resourceClass,  array $args = []) {
        
    }
}
