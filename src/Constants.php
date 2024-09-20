<?php

namespace Sankyu;

class Constants
{   
    public static function ClassificationCodes(){

        $jsonFilePath = dirname(__DIR__) . '/json/ClassificationCodes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function CountryCodes(){

        $jsonFilePath = dirname(__DIR__) . '/json/CountryCodes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function CurrencyCodes(){

        $jsonFilePath = dirname(__DIR__) . '/json/CurrencyCodes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function EInvoiceTypes(){

        $jsonFilePath = dirname(__DIR__) . '/json/EInvoiceTypes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function MSICSubCategoryCodes(){

        $jsonFilePath = dirname(__DIR__) . '/json/MSICSubCategoryCodes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function PaymentMethods(){

        $jsonFilePath = dirname(__DIR__) . '/json/PaymentMethods.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function StateCodes(){

        $jsonFilePath = dirname(__DIR__) . '/json/StateCodes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function TaxTypes(){

        $jsonFilePath = dirname(__DIR__) . '/json/TaxTypes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function UnitTypes(){

        $jsonFilePath = dirname(__DIR__) . '/json/UnitTypes.json';

        return Constants::checkAndReturn($jsonFilePath);
    }

    public static function checkAndReturn($jsonFilePath){

        if (!file_exists($jsonFilePath)) {
            throw new \Exception("JSON file not found: " . $jsonFilePath);
        }

        $jsonContent = file_get_contents($jsonFilePath);

        $json = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Error decoding JSON: " . json_last_error_msg());
        }

        return $json;

    }


}


