<?php

namespace App\Repositories\Client;

use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Ticket;
use App\Repositories\Interfaces\Client\FlightRepositoryInterface;

class FlightRepository implements FlightRepositoryInterface
{
    public function __construct()
    {
        //
    }

    public function avail($request): array
    {
        $data = [
            [
                "flight_key" => "71715",
                "capacity" => 7,
                "currencyTitle" => "تومان",
                "adultPrice" => 1897200,
                "childPrice" => 1897200,
                "infantPrice" => 1897200,
                "discountPrice" => 1897200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6253",
                "pet" => 0,
                "aircraft" => "BOEING-MD",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "11:00",
                "arrivalTime" => "12:20",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "11",
                "minutesTimeDeparture" => "00",
                "dayTimeTextDeparture" => "صبح=>(08=>00-11=>00)",
                "dayTimeIdDeparture" => 2,
                "dayTimeArrival" => "12",
                "minutesTimeArrival" => "20",
                "dayTimeTextArrival" => "ظهر=>(11=>00-14=>00)",
                "dayTimeIdArrival" => 3,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "105629",
                "capacity" => 1,
                "currencyTitle" => "تومان",
                "adultPrice" => 2101200,
                "childPrice" => 2101200,
                "infantPrice" => 2101200,
                "discountPrice" => 2101200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6255",
                "pet" => 0,
                "aircraft" => "Boeing",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:45",
                "arrivalTime" => "17:05",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "45",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "17",
                "minutesTimeArrival" => "05",
                "dayTimeTextArrival" => "عصر=>(17=>00-21=>00)",
                "dayTimeIdArrival" => 5,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "71132",
                "capacity" => 7,
                "currencyTitle" => "تومان",
                "adultPrice" => 2142000,
                "childPrice" => 2142000,
                "infantPrice" => 2142000,
                "discountPrice" => 2142000,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6253",
                "pet" => 0,
                "aircraft" => "BOEING-MD",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "11:00",
                "arrivalTime" => "12:06",
                "api" => "",
                "flightDuration" => "1:06",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "11",
                "minutesTimeDeparture" => "00",
                "dayTimeTextDeparture" => "صبح=>(08=>00-11=>00)",
                "dayTimeIdDeparture" => 2,
                "dayTimeArrival" => "12",
                "minutesTimeArrival" => "06",
                "dayTimeTextArrival" => "ظهر=>(11=>00-14=>00)",
                "dayTimeIdArrival" => 3,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "71150",
                "capacity" => 7,
                "currencyTitle" => "تومان",
                "adultPrice" => 2142000,
                "childPrice" => 2142000,
                "infantPrice" => 2142000,
                "discountPrice" => 2142000,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6255",
                "pet" => 0,
                "aircraft" => "BOEING-MD",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:45",
                "arrivalTime" => "17:06",
                "api" => "",
                "flightDuration" => "1:21",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "45",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "17",
                "minutesTimeArrival" => "06",
                "dayTimeTextArrival" => "عصر=>(17=>00-21=>00)",
                "dayTimeIdArrival" => 5,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "81447",
                "capacity" => 9,
                "currencyTitle" => "تومان",
                "adultPrice" => 2203200,
                "childPrice" => 2203200,
                "infantPrice" => 2203200,
                "discountPrice" => 2203200,
                "airlineName" => "SJT",
                "airlineCode" => false,
                "airelineNamePersian" => "آساجت",
                "airlineLogo" => "https=>//respina24.ir/assets/images/them1/internal/37.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "8601",
                "pet" => 0,
                "aircraft" => "امبرائر",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:00",
                "arrivalTime" => "16:20",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => false,
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "00",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "16",
                "minutesTimeArrival" => "20",
                "dayTimeTextArrival" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdArrival" => 4,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "71717",
                "capacity" => 3,
                "currencyTitle" => "تومان",
                "adultPrice" => 2305200,
                "childPrice" => 2305200,
                "infantPrice" => 2305200,
                "discountPrice" => 2305200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6255",
                "pet" => 0,
                "aircraft" => "BOEING-MD",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:45",
                "arrivalTime" => "17:05",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "45",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "17",
                "minutesTimeArrival" => "05",
                "dayTimeTextArrival" => "عصر=>(17=>00-21=>00)",
                "dayTimeIdArrival" => 5,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "81070",
                "capacity" => 2,
                "currencyTitle" => "تومان",
                "adultPrice" => 2305200,
                "childPrice" => 2305200,
                "infantPrice" => 2305200,
                "discountPrice" => 2305200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6255",
                "pet" => 0,
                "aircraft" => "BOEING-MD",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:45",
                "arrivalTime" => "17:05",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "45",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "17",
                "minutesTimeArrival" => "05",
                "dayTimeTextArrival" => "عصر=>(17=>00-21=>00)",
                "dayTimeIdArrival" => 5,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "81690",
                "capacity" => 5,
                "currencyTitle" => "تومان",
                "adultPrice" => 2305200,
                "childPrice" => 2305200,
                "infantPrice" => 2305200,
                "discountPrice" => 2305200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6253",
                "pet" => 0,
                "aircraft" => "بوئينگ",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "11:00",
                "arrivalTime" => "12:20",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "11",
                "minutesTimeDeparture" => "00",
                "dayTimeTextDeparture" => "صبح=>(08=>00-11=>00)",
                "dayTimeIdDeparture" => 2,
                "dayTimeArrival" => "12",
                "minutesTimeArrival" => "20",
                "dayTimeTextArrival" => "ظهر=>(11=>00-14=>00)",
                "dayTimeIdArrival" => 3,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ],
            [
                "flight_key" => "82485",
                "capacity" => 5,
                "currencyTitle" => "تومان",
                "adultPrice" => 2305200,
                "childPrice" => 2305200,
                "infantPrice" => 2305200,
                "discountPrice" => 2305200,
                "airlineName" => "Taban",
                "airlineCode" => "HH",
                "airelineNamePersian" => "تابان",
                "airlineLogo" => "https://respina24.ir/assets/images/them1/internal/10.png",
                "from" => "MHD",
                "to" => "THR",
                "fromFa" => "مشهد",
                "toFa" => "تهران",
                "flightNumber" => "6255",
                "pet" => 0,
                "aircraft" => "بوئينگ",
                "departureDate" => "2023-11-16",
                "departureDateJalali" => [
                    "0" => "1700080200",
                    "seconds" => "0",
                    "minutes" => "0",
                    "hours" => "0",
                    "mday" => "25",
                    "wday" => "5",
                    "mon" => "8",
                    "year" => "1402",
                    "yday" => "240",
                    "weekday" => "پنجشنبه",
                    "month" => "آبان"
                ],
                "departureTime" => "15:45",
                "arrivalTime" => "17:05",
                "api" => "",
                "flightDuration" => "1:20",
                "class" => "",
                "lastUpdate" => "",
                "refresh" => "Taban",
                "CIP" => "",
                "cobin" => "ECONOMY",
                "noe" => "ticharter",
                "cobinPersian" => "اکونومی",
                "Baggage" => "20 کیلوگرم",
                "refundRules" => [
                    [
                        "penalty" => "70% جریمه",
                        "text" => "تا 72 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "80% جریمه",
                        "text" => "تا 24 ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "95% جریمه",
                        "text" => "تا یک ساعت قبل از پرواز"
                    ],
                    [
                        "penalty" => "100% جریمه",
                        "text" => "از یک ساعت مانده به پرواز"
                    ]
                ],
                "type" => "charter",
                "noe_en" => "charter",
                "typePersian" => "",
                "nextDay" => "1402-08-26",
                "previousDay" => "1402-08-24",
                "dayTimeDeparture" => "15",
                "minutesTimeDeparture" => "45",
                "dayTimeTextDeparture" => "بعدازظهر=>(14=>00-17=>00)",
                "dayTimeIdDeparture" => 4,
                "dayTimeArrival" => "17",
                "minutesTimeArrival" => "05",
                "dayTimeTextArrival" => "عصر=>(17=>00-21=>00)",
                "dayTimeIdArrival" => 5,
                "arrivalDate" => "08/25 پنجشنبه",
                "arrivalDateM" => "پنجشنبه 25 آبان",
                "stop" => 0,
                "stops" => 0,
                "isInternational" => 0,
                "isSuggest" => 0,
                "approvedRate" => 1714800,
                "isMoreThanApprovedRate" => 1,
                "moreThanApprovedText" => "همراه با یک شب اقامت",
                "mainMoreThanApprovedRate" => 1,
                "allClass" => [],
                "foreignClass" => 0,
                "from_airport_name" => " فرودگاه بین المللی شهید هاشمی نژاد ",
                "to_airport_name" => " فرودگاه مهر اباد ",
                "refundable" => true,
                "cabinTypeForReserveLink" => "Economy"
            ]
        ];
        $flight = Flight::query()->create([
            'origin' => $request['origin'],
            'destination' => $request['destination'],
            'date' => $request['date'],
            'flights' => $data,
        ]);
        return ['search_id' => $flight->id, 'flights' => $data];
    }

    public function preReserve($request): array
    {
        $search = Flight::query()->find($request['search_id']);
        $flights = $search->flights;
        $flight = array_filter($flights, function ($item) use ($request) {
            return $item['flight_key'] == $request['flight_key'];
        });
        $flight =(object) reset($flight);
        $id = auth()->id() ?? 1;
        if (!$flight)
            return [];
        $ticket = Ticket::query()->create([
            'user_id' => $id,
            'origin' => $search->origin,
            'destination' => $search->destination,
            'date' => $search->date,
            'flight_id' => $search->id,
            'flight_key' => $request['flight_key'],
            'flight_number' => $flight->flightNumber,
            'flight_airline' => $flight->airlineName,
            'flight_departure' => $flight->departureDate.' '.$flight->departureTime,
            'flight_arrival' => $flight->departureDate.' '.$flight->arrivalTime,
            'flight_duration' => $flight->flightDuration,
            'flight_class' => $flight->class,
            'status' => 'pending',
            'flight' => $flight
        ]);
        return [
            'ticket_id' => $ticket->id,
            'ticket' => $ticket,
            'flight' => $flight
        ];
    }

    public function reserve($request): array
    {
        $request = json_decode(json_encode($request));
        $ticket = Ticket::query()->find($request->ticket_id);
        $flight = $ticket->flight;
        $passengers = [];
        foreach ($request->passengers as $passenger)
        {
            $passengers[]=[
                'ticket_id'=>$request->ticket_id,
                'name'=>$passenger->first_name,
                'lastname'=>$passenger->last_name,
                'gender'=>$passenger->gender,
                'type'=>$passenger->type,
                'birthday'=>$passenger->birthday,
                'nationality'=>$passenger->nationality,
                'na_code'=>$passenger->na_code,
            ];
        }
        $ticket->passengers()->delete();
        Passenger::query()->insert($passengers);
        $ticket->update([
            'status'=>'reserved'
        ]);
        return [
            'ticket_id' => $ticket->id,
            'ticket' => $ticket,
            'flight' => $flight,
            'passengers' => $passengers
        ];
    }

    public function confirm($request): array
    {
        $ticket = Ticket::query()->find($request['ticket_id']);
        $ticket->update([
            'status'=>'confirmed'
        ]);
        return [
            'ticket_id' => $ticket->id,
            'ticket' => $ticket,
            'flight' => $ticket->flight,
            'passengers' => $ticket->passengers
        ];
    }

}
