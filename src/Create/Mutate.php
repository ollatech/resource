<?php
namespace Olla\Resource;

use Olla\Prisma\MetadataInterface;
use Olla\Flow\Repository;
use Olla\Flow\Guard;
use Olla\Flow\Validator;
use Olla\Resource\Create;

final class Mutate implements Create
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
    
    public function create(string $resourceClass,  array $args = []) {
        
    }
}
