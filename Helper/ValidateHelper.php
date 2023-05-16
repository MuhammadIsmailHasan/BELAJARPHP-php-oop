<?php

require_once __DIR__ . "/../exception/ValidateException.php";

class ValidateHelper
{
    public function validate($request) { // object bisa banyak, jadi tidak perlu membuat satu-satu function 
        $reflection = new ReflectionClass($request); // memasukan objeck request ke reflection
        $propertiesRequest = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        var_dump($propertiesRequest);
        
        foreach ($propertiesRequest as $property) {
            if (!$property->isInitialized($request)){
                throw new ValidateException("field $property->name belum diset");
            } else if (is_null($property->getValue($request))) {
                throw new ValidateException("field $property->name masih null");
            }
        }
    }
}