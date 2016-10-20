<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';


require(__DIR__ . '/vendor/autoload.php');


use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

$serializerBuilder = SerializerBuilder::create();

$serializerBuilder->addMetadataDir('soap//metadata', 'ans');

$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
    
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling

    // $handler->registerSubscribingHandler(new YourhandlerHere());
});

$serializer = $serializerBuilder->build();

// deserialize the XML into Demo\MyObject object
$object = $serializer->deserialize('<some xml/>', 'ans\schemes\MensagemTISS', 'xml');
//echo '<pre>';
//var_dump($object);die();

// some code ....

// serialize the Demo\MyObject back into XML
$newXml = $serializer->serialize($object, 'xml');

//$serializer = JMS\Serializer\SerializerBuilder::create()->build();
//$jsonContent = $serializer->serialize($data, 'json');
//echo $jsonContent; // or return it in a Response