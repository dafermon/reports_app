<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.xml_serialization_visitor' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\VisitorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\AbstractVisitor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\XmlSerializationVisitor.php';

$this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->load(__DIR__.'/getJmsSerializer_NamingStrategyService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->load(__DIR__.'/getJmsSerializer_AccessorStrategyService.php')) && false ?: '_'});

$instance->setFormatOutput(true);

return $instance;
