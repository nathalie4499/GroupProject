<?php
namespace Project;

class Normalizer
{
    public function Normalize ($inputObject, $metadata)
    {
        // get the configuration from the metadata
        $config =  $metadata->getConfiguration();
        
        $intermediaryObject = [];
        // foreach line into the configuration
        foreach ($config as $methodName => $outputName) {
            // get the value from the object, using the configuration key
            $value = $inputObject->$methodName();
            
            // store the value into a intermediary array, located at the configuration value
            $intermediaryObject[$outputName] = $value;
        }
            
        // return the intermediary array
        return $intermediaryObject;
    }
}



