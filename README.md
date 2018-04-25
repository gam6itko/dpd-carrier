# DPD API library   
    
    [Documentation page](https://www.dpd.ru/dpd/integration/integration.do2)
    
# Usage


## OrderWebService

```php
use Gam6itko\DpdCarrier\Enum\OrderStatusName;
use Gam6itko\DpdCarrier\Enum\PaymentType;
use Gam6itko\DpdCarrier\Enum\ServiceCode;
use Gam6itko\DpdCarrier\Enum\ServiceVariant;
use Gam6itko\DpdCarrier\Type\Order\ClientAddress;
use Gam6itko\DpdCarrier\Type\Order\Header;
use Gam6itko\DpdCarrier\Type\Order\Order;
use Gam6itko\DpdCarrier\Type\Order\OrderStatus;
use Gam6itko\DpdCarrier\WebService\OrderWebService;

$svc = new OrderWebService('DPD_CLIENT_NUMBER', 'DPD_CLIENT_KEY', true); //switch 3rd argument to FALSE on production

// create order
$senderAddress = (new ClientAddress())
    ->setTerminalCode('M13')
    ->setName('ACME LTD')
    ->setContactFio('John Doe')
    ->setContactPhone('123 012 301 20 12');

$receiverAddress = (new ClientAddress())
    ->setName('John Lock')
    ->setContactFio('John Lock')
    ->setContactPhone('123456')
    ->setInstructions('fragile')
    ->setTerminalCode('OEL');

$pickupDate = new \DateTime('next month monday');

$header = (new Header())
    ->setDatePickup($pickupDate->format('Y-m-d'))
    ->setSenderAddress($senderAddress);
$order = (new Order())
    ->setOrderNumberInternal('gam6itko/dpd-carrier/' . uniqid())
    ->setServiceCode(ServiceCode::PCL)
    ->setServiceVariant(ServiceVariant::TerminalToTerminal)
    ->setCargoNumPack(1)
    ->setCargoWeight(10.23)
    ->setCargoValue(0.45)
    ->setCargoRegistered(true)
    ->setCargoCategory('something special')
    ->setPaymentType(PaymentType::Receiver)
    ->setReceiverAddress($receiverAddress);

$result = $svc->createOrder($header, $order);
print 'OrderStatus structure:' . PHP_EOL;
print json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL . PHP_EOL;
```

```text
OrderStatus structure:
{
    "orderNumberInternal": "gam6itko-dpd-carrier-5ae06205d326d",
    "orderNum": "RU004550775",
    "status": "OK"
}
```


## CalculatorWebService



```php
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\WebService\CalculatorWebService;

// service cost calculation
$svc = new CalculatorWebService('DPD_CLIENT_NUMBER', 'DPD_CLIENT_KEY', true); //switch 3rd argument to FALSE on production
$pickup = new DeliveryPoint(49694102);
$delivery = new DeliveryPoint(195664561);
$options = (new DeliveryOptions(true, true))
    ->setWeight(7.88)
    ->setVolume(0.04092)
    ->setDeclaredValue(34999);
$arrayOfServiceCost =  $svc->getServiceCost2($pickup, $delivery, $options);
$serviceCostObject = $arrayOfServiceCost[0];

print 'ServiceCost structure:' . PHP_EOL;
print json_encode($serviceCostObject, JSON_PRETTY_PRINT);
```

```text
{"serviceCode":"MAX","serviceName":"DPD MAX domestic","cost":531,"days":2}
```


## GeographyWebService

```php
use Gam6itko\DpdCarrier\Enum\ServiceCode;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\WebService\GeographyWebService;

$svc = new GeographyWebService('DPD_CLIENT_NUMBER', 'DPD_CLIENT_KEY', true); //switch 3rd argument to FALSE on production

//getCitiesCashPay
$arrayOfCity = $svc->getCitiesCashPay('RU'); //about 16868 elements
$cityObject = $arrayOfCity[0];
print 'City structure:' . PHP_EOL;
print json_encode($cityObject, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;

//getParcelShops
$point = (new DeliveryPoint())
    ->setCountryCode('RU')
    ->setRegionCode(77);
$arrayOfParcelShop = $svc->getParcelShops($point); //about 179 elements
$parcelShop = $arrayOfParcelShop[0];
print 'ParcelShop structure:' . PHP_EOL;
print json_encode($parcelShop, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

//terminalsSelfDelivery2
$arrayOfTerminal = $svc->getTerminalsSelfDelivery2(); //about 159 elements
$terminal = $arrayOfTerminal[0];
print 'Terminal structure:' . PHP_EOL;
print json_encode($terminal, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
```

```text
City structure:
{
    "countryName": "Россия",
    "regionName": "Тюменская",
    "abbreviation": "г",
    "indexMin": "627750",
    "indexMax": "627753",
    "countryCode": "RU",
    "regionCode": 72,
    "cityId": 10798925337,
    "cityCode": "72000003000",
    "cityName": "Ишим"
}
ParcelShop structure:
{
    "code": "001U",
    "parcelShopType": "ПВП",
    "state": "Open",
    "limits": {},
    "brand": "PICK-UP.RU",
    "clientDepartmentNum": "10027",
    "address": {
        "regionName": "Москва",
        "street": "Яблочкова",
        "streetAbbr": "ул",
        "houseNo": "21А",
        "descript": "ТЦ Тимирязевский расположен в 100 м от выхода из ст.м. и ж\/д платформы Тимирязевская. Первый вагон из центра, из стеклянных дверей направо, в конце перехода выход в город направо. Далее левее 50 м до ТЦ Депо-молл. Помещение ПВЗ расположено в левом крыле торгового центра, относительно центрального входа, на третьем этаже. Взимается комиссия за оплату банковскими картами: 2%",
        "index": "127322",
        "countryCode": "RU",
        "regionCode": "77",
        "cityId": 49694102,
        "cityCode": "77000000000",
        "cityName": "Москва"
    },
    "geoCoordinates": {
        "latitude": "55.819489",
        "longitude": "37.578271"
    },
    "schedule": [
        {
            "operation": "Payment",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "10:00 - 21:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 20:00"
                }
            ]
        },
        {
            "operation": "PaymentByBankCard",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "10:00 - 21:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 20:00"
                }
            ]
        },
        {
            "operation": "SelfDelivery",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "10:00 - 21:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 20:00"
                }
            ]
        }
    ],
    "extraService": [
        {
            "esCode": "НПП",
            "params": [
                {
                    "name": "sum_npp",
                    "value": "15000"
                }
            ]
        },
        {
            "esCode": "ТРМ"
        }
    ],
    "services": {
        "serviceCode": [
            "BZP",
            "CUR",
            "DIR",
            "DPI",
            "ECN",
            "PCL",
            "CSM",
            "MXO"
        ]
    }
}

Terminal structure:
{
    "terminalCode": "M11",
    "terminalName": "Москва -  M11 Илимская",
    "address": {
        "regionName": "Москва",
        "street": "Илимская",
        "streetAbbr": "улица",
        "houseNo": "3",
        "structure": "2",
        "index": "127576",
        "countryCode": "RU",
        "regionCode": "77",
        "cityId": 49694102,
        "cityCode": "77000000000",
        "cityName": "Москва"
    },
    "geoCoordinates": {
        "latitude": "55.888642",
        "longitude": "37.576126"
    },
    "schedule": [
        {
            "operation": "Payment",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "08:00 - 22:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 18:00"
                }
            ]
        },
        {
            "operation": "PaymentByBankCard",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "08:00 - 22:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 18:00"
                }
            ]
        },
        {
            "operation": "SelfDelivery",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "08:00 - 22:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 18:00"
                }
            ]
        },
        {
            "operation": "SelfPickup",
            "timetable": [
                {
                    "weekDays": "Пн,Вт,Ср,Чт,Пт",
                    "workTime": "08:00 - 22:00"
                },
                {
                    "weekDays": "Сб,Вс",
                    "workTime": "10:00 - 18:00"
                }
            ]
        }
    ],
    "extraService": [
        {
            "esCode": "НПП",
            "params": [
                {
                    "name": "sum_npp",
                    "value": "200000"
                }
            ]
        },
        {
            "esCode": "ОЖД",
            "params": [
                {
                    "name": "reason_delay",
                    "value": "ПРИМ, ПРОС, РАБТ"
                }
            ]
        },
        {
            "esCode": "ТРМ"
        }
    ],
    "services": {
        "serviceCode": [
            "NDY",
            "BZP",
            "CUR",
            "DIR",
            "DPE",
            "DPI",
            "ECN",
            "ECU",
            "MAX",
            "PCL",
            "CSM",
            "MXO"
        ]
    }
}
```