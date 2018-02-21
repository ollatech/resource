<?php
namespace Olla\Resource;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class OllaResourceBundle extends Bundle
{
	public function build(ContainerBuilder $container)
	{
		parent::build($container);
	
	}
}
