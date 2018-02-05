<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_api_doc.generator' shared service.

include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\DescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ExternalDocDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Util\\ControllerReflector.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\SwaggerPhpDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\RouteDescriber\\RouteDescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\RouteDescriber\\RouteDescriberTrait.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\RouteDescriber\\RouteMetadataDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\RouteDescriber\\FosRestDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\RouteDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\DefaultDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\ModelDescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\FormModelDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\SwaggerPropertyAnnotationReader.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\JMSModelDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\ObjectModelDescriber.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ApiDocGenerator.php';

$a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'};
$b = ${($_ = isset($this->services['nelmio_api_doc.routes']) ? $this->services['nelmio_api_doc.routes'] : $this->load(__DIR__.'/getNelmioApiDoc_RoutesService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$d = new \Nelmio\ApiDocBundle\Util\ControllerReflector($this, $a);

$e = new \Nelmio\ApiDocBundle\ModelDescriber\SwaggerPropertyAnnotationReader($c);

return $this->services['nelmio_api_doc.generator'] = new \Nelmio\ApiDocBundle\ApiDocGenerator(array(0 => new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(array()), 1 => new \Nelmio\ApiDocBundle\Describer\SwaggerPhpDescriber($b, $d, $c), 2 => new \Nelmio\ApiDocBundle\Describer\RouteDescriber($b, $d, array(0 => new \Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber(), 1 => new \Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber($c))), 3 => new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()), array(0 => new \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}), 1 => new \Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->load(__DIR__.'/getJmsSerializer_MetadataFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->load(__DIR__.'/getJmsSerializer_NamingStrategyService.php')) && false ?: '_'}, $e), 2 => new \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber(${($_ = isset($this->services['property_info']) ? $this->services['property_info'] : $this->load(__DIR__.'/getPropertyInfoService.php')) && false ?: '_'}, $e)));