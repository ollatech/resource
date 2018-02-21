<?php
namespace Olla\Resource\Services\Create;

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
    
    public function mutate(string $resourceClass,  array $args = [], array $context = []) {
        
    }
    private function validate(array $args = [], array $context = []) {
        
    }
    private function args(array $configs = []) {
        return [
            'select' => 'object',
            'input' => 'object',
            'language' => 'string',
            'country' => 'string',
            'device' => 'string',
            'broker' => 'string',
            'domain' => 'string',
            'tenant' => 'string'
        ];
    }
}
