<?php

use Gam6itko\DpdCarrier\Type\Order\ClientAddress;
use PHPUnit\Framework\TestCase;

class ClientAddressTest extends TestCase
{
    public function testJson()
    {
        $ca = new ClientAddress();
        $ca
            ->setCode('code')
            ->setName('name')
            ->setTerminalCode('terminalCode')
            ->setAddressString('addressString')
            ->setCountryName('countryName')
            ->setIndex('123456')
            ->setRegion('region')
            ->setCity('city')
            ->setStreet('street')
            ->setStreetAbbr('abbr')
            ->setHouse('house')
            ->setHouseKorpus('houseKorpus')
            ->setStr('str')
            ->setVlad('vlad')
            ->setExtraInfo('extraInfo')
            ->setOffice('office')
            ->setFlat('flat')
            ->setWorkTimeFrom('workTimeFrom')
            ->setWorkTimeTo('workTimeTo')
            ->setDinnerTimeFrom('dinnerTimeFrom')
            ->setDinnerTimeTo('dinnerTimeTo')
            ->setContactFio('contactFio')
            ->setContactPhone('contactPhone')
            ->setContactEmail('contactEmail')
            ->setInstructions('instructions')
            ->setNeedPass('needPass');

        $expectedJson = <<<JSON
{
  "code": "code",
  "name": "name",
  "terminalCode": "terminalCode",
  "addressString": "addressString",
  "countryName": "countryName",
  "index": "123456",
  "region": "region",
  "city": "city",
  "street": "street",
  "streetAbbr": "abbr",
  "house": "house",
  "houseKorpus": "houseKorpus",
  "str": "str",
  "vlad": "vlad",
  "extraInfo": "extraInfo",
  "office": "office",
  "flat": "flat",
  "workTimeFrom": "workTimeFrom",
  "workTimeTo": "workTimeTo",
  "dinnerTimeFrom": "dinnerTimeFrom",
  "dinnerTimeTo": "dinnerTimeTo",
  "contactFio": "contactFio",
  "contactPhone": "contactPhone",
  "contactEmail": "contactEmail",
  "instructions": "instructions",
  "needPass": "needPass"
}
JSON;

        self::assertJsonStringEqualsJsonString(json_encode($ca), $expectedJson);
    }
}
