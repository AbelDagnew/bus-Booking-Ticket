<?php

namespace App\Faker;

use Faker\Provider\Base;

class ETAddress extends Base
{
    protected static $names = [
        'CakePHP',
        'CodeIgniter',
        'Laravel',
        'Lumen',
        'Phalcon',
        'Slim',
        'Symfony',
    ];
    public function framework(): string
    {
        return static::randomElement(static::$names);
    }


    protected static $regions = [
        "Addis Ababa", "Afar", "Amhara", "Benishangul Gumuz", "Dire Dawa", "Gambela", "Harari", "Oromiya", "Somali", "Tigray", "SNNPR"
    ];

    protected static $cities = [
        "Addis Ababa" => [
            "Addis Ketema" => [
                "Amanuel Area",
                "Aserasement",
                "Autobus Tera",
                "Bomb Tera",
                "Chew Berenda",
                "Chid Tera",
                "District 3",
                "Doro Tera",
                "Dubai Tera",
                "Ferash Tera",
                "Hadere Sefer",
                "Kolfe Tiwan",
                "Mentaf Tera",
                "Mesalemiya",
                "Military Tera",
                "Minalesh Tera",
                "Paster",
                "Quasmeda",
                "Satin Tera",
                "Sebategna",
                "Sehan Tera",
                "Shanta Tera",
                "Shema Tera",
                "Shera Tera",
                "Worik Tera"
            ],
            "Akaky Kaliti" => [
                "Endorro",
                "Koye",
                "Habitate",
                "Adiss",
                "Ak'Ak'I Bota",
                "Akaki-Kaliti",
                "Cabana",
                "Gelan Bota",
                "Saris",
                "Saris Abo Area",
                "Selbane",
                "Tug Cabana",
                "Tulu Dimtu"
            ],
            "Arada" => [
                "Abacoran Sefer",
                "American Gibi",
                "Amist Kilo",
                "Arat Kilo",
                "Aroge Kera",
                "Atekelet Tera",
                "Aware",
                "Biss Meberat",
                "Doro Manekiya",
                "Enqulal Faberika",
                "Eri Bekentu",
                "Gedam Seffer",
                "Giorgis",
                "Habete Giorgis",
                "Piassa (piazza)",
                "Posta Bet",
                "Ras Mekonnen Deldey",
                "Sebara Babur",
                "Shola",
                "Somale Tera",
                "Taliyan Sefer",
                "Webe Berha",
                "Yohannes"
            ],
            "Bole" => [
                "arabsa ????????????",
                "Ayat condominiums",
                "Ayat zone 2",
                "Ayat zone 3",
                "Ayat zone 5",
                "BlockLHS",
                "BlockRHS",
                "Chefie condominiums",
                "CMC",
                "Flintstonehomes Condominium",
                "Natan Feleke Kibret Residence",
                "Noah Real-estate",
                "private",
                "Villas",
                "Bole Lemi Industrial Park",
                "Bole Mikael",
                "Gerji",
                "Gewasa",
                "Ghiliffalegn Stream",
                "Kotabe",
                "Kotebe Shet'",
                "Rwanda",
                "T'Afo Shet'",
                "Urael",
                "Wereda 11 Administration Office",
                "Yeka Bole Bota"
            ],
            "Gullele" => [
                "condominium",
                "Sidist Kilo",
                "Abadina Area",
                "Kolobo",
                "Medhanialem",
                "Rufael",
                "Semien Mezegaja",
                "Shegole",
                "Shero Meda",
                "Winget"
            ],
            "Kirkos" => [
                "Ambassador",
                "Bantyiketu",
                "Beg Tera",
                "Beherawi",
                "Bekelo Bet",
                "Bulgariya Mazoriya",
                "Enderase",
                "Gotera",
                "Kazanchis",
                "Kera",
                "Lancha",
                "Legahar",
                "Meshuwalekiya",
                "Meskel Flower",
                "Mexico",
                "Olympia",
                "Riche",
                "Sarbet",
                "Wello Sefer"
            ],
            "Kolfe Keranio" => [
                "?????? ???????????? ??????",
                "Jemo-2",
                "Mickey leland condo site",
                "Repi upper",
                "Admin Level: 11",
                "Asko Area",
                "Asko Bercheko Faberika Area",
                "Atena Tera",
                "Ayertena",
                "Kolfe Keranyo",
                "Koshim",
                "Kurtume Stream",
                "Lekwuanda",
                "Lideta Gebri'El Bete Kristiyan",
                "Nefro neighborhood",
                "Zenebework"
            ],
            "Lideta" => [
                "Little Texas",
                "Abnet Square",
                "Agusta",
                "Berberee Berenda",
                "Ched Tera",
                "Coca",
                "Darmar",
                "Geja Seffer",
                "Golla Mikael",
                "Goma Kuteba",
                "Goma Tera",
                "Jos Hanssen",
                "Ketena Hulet",
                "Mechare Meda",
                "Microlink Project",
                "Mobil",
                "Molla Maru",
                "Sengatera",
                "Shekela Tera",
                "Tekelehaymanot",
                "Tor Hiylloch"
            ],
            "Nifas Silk-Lafto" => [
                "Jemo-1",
                "Jemo-3",
                "Repi",
                "Admin Level: 11",
                "Addis Sefer",
                "Besrat Gebriel",
                "EECMY Residential Area",
                "Gebre Kristos Bete Kristiyan",
                "Great Acachi",
                "Gulele Bota",
                "Haile Garment",
                "Hana",
                "Harbu Shet'",
                "Irtu Bota",
                "Jemo",
                "Lafto",
                "Lebu",
                "Lebu Mebrathayil",
                "Mekanisa",
                "Mekanisa Abo",
                "Menisa",
                "Nefas Silk-Lafto",
                "Soste Kuter Mazoria (Total)",
                "Vatican"
            ],
            "Yeka" => [
                "Abado Project 13",
                "Ayat Real Estate Development",
                "??????????????? ????????????",
                "Balderas Condominiums",
                "Signal",
                "Admin Level: 11",
                "Ayat",
                "?????? ?????? Beg Tera",
                "Bole Ayat",
                "Kara",
                "Kara Alo",
                "Kebena",
                "Kotebe",
                "Megenagna",
                "Menahereya Kazanchis",
                "Sunshine Real state",
                "Yedejazmach Alula Irsha"
            ],
        ],
        "Afar" => [
            "Administrative Zone 2",
            "Administrative Zone 3",
            "Asaita",
            "??wash",
            "Dubti",
            "Gewan??",
            "Semera",
        ],
        "Amhara" => [
            "Abomsa",

            "Addiet Canna",

            "??d??s Zemen",

            "Bahir Dar",

            "Bat??",

            "Bichena",

            "Bur??",

            "Dabat",

            "Debark???",

            "Debre Berhan",

            "Debre Markos",

            "Debre S??na",

            "Debre Tabor",

            "Debre Werk???",

            "Dejen",

            "Dessie",

            "Finote Selam",

            "Gondar",

            "Kemis??",

            "Kombolcha",

            "Lal??bela",

            "North Shewa Zone",

            "North Wollo Zone",

            "Rob??t",

            "South Gondar Zone",

            "South Wollo Zone",

            "Wag Hemra Zone",

            "Were ??lu",

            "Werota",

            "Woldiya"
        ],
        "Benishangul Gumuz" => [
            "Assosa",
            "Metekel"
        ],
        "Dire Dawa" => [
            "Dire Dawa"
        ],
        "Gambela" => [
            "Administrative Zone 1",
            "Gambela"
        ],
        "Harari" => [
            "Harar"
        ],
        "Oromiya" => [
            "??d??s ???Alem",
            "??garo",
            "Arsi Zone",
            "??sasa",
            'Adama',
            "??sbe Tefer??",
            "Bedel??",
            "Bed??sa",
            "Bishoftu",
            "Deder",
            "Demb?? Dolo",
            "Dodola",
            "East Harerghe Zone",
            "East Shewa Zone",
            "East Wellega Zone",
            "Fich??",
            "Gebre Guracha",
            "G??do",
            "Gelemso",
            "Genet",
            "Gimbi",
            "Ginir",
            "Goba",
            "Gor??",
            "Guji Zone",
            "H??gere Hiywet",
            "Hagere Maryam",
            "H??rna",
            "Huruta",
            "Illubabor Zone",
            "Jimma",
            "Jimma Zone",
            "Kibre Mengist",
            "Kofel??",
            "M??ga",
            "Mend??",
            "Metah??ra",
            "Metu",
            "Mojo",
            "Nazr??t",
            "Nejo",
            'Nekemte',
            "North Shewa Zone",
            "Sebeta",
            "Sendafa",
            "Shakiso",
            "Shambu",
            "Shashemene",
            "Sirre",
            "Tulu Bolo",
            "Waliso",
            "Wenj??",
            "West Harerghe Zone",
            "West Wellega Zone",
            "Yab??lo",
            "Ziway",
        ],
        "Somali" => [
            "Afder Zone",
            "Degehabur Zone",
            "Gode Zone",
            "Jigjiga",
            "Liben zone",
            "Shinile Zone",
        ],
        "Tigray" => [
            "??d??grat",
            "Axum",
            "Inda Silas??",
            "Korem",
            "Maych???ew",
            "Mekelle",
            'Shire',
            'Adwa',
            "Southeastern Tigray Zone",
            "Southern Tigray Zone",
        ],
        "SNNPR" => [
            "Alaba Special Wereda",
            "Arba Minch",
            "??reka",
            "Bako",
            "Bench Maji Zone",
            "Bod??t??",
            "Bonga",
            "Butaj??ra",
            "D??la",
            "Felege Neway",
            "Gedeo Zone",
            "G??dol??",
            "Guraghe Zone",
            "Hadiya Zone",
            "H??gere Selam",
            "Hawassa",
            "Hosaena",
            "Jinka",
            "K???ol??to",
            "Kembata Alaba Tembaro Zone",
            "Konso",
            "Leku",
            "Lobuni",
            "M??zan Tefer??",
            "Sheka Zone",
            "Sidama Zone",
            "Sodo",
            "Tippi",
            "Turmi",
            "Wendo",
            "Wolayita",
            "Yem",
            "Yirga ???Alem",
        ]
    ];

    public static $subcity = [
        "Addis Ababa" => [
            "Addis Ketema",
            "Akaky Kaliti",
            "Arada",
            "Bole",
            "Gullele",
            "Kirkos",
            "Kolfe Keranio",
            "Lideta[",
            "Nifas Silk-Lafto",
            "Yeka",
            "Lemi Kura"
        ],
    ];

    public function region(): string
    {
        return static::randomElement(static::$regions);
    }

    public function city($region): string
    {
        return $region == "Addis Ababa" ? $region : static::randomElement(static::$cities[$region]);
    }

    /**
     * @param  string city
     * @return string region name 
     */
    public function regionByCity($city): string
    {
        if ($city == "Addis Ababa" || $city == "Dire Dawa")
            return $city;
        foreach (static::$cities as $key => $value) {
            if (($i = array_search($city, $value)) !== FALSE) {
                return $key;
            }
        }
        return $city;
    }
}
