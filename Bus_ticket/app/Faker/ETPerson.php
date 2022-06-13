<?php

namespace App\Faker;

use Faker\Provider\Base;

class ETPerson extends Base
{

   protected static $names = [
      'Addis Ababa' => [
         "Eyob",
         "Freyhiwot",
         "Fasil",
         "Arkebe",
         "Birhane",
         "Abel",
         "Seyoum",
         "Tefera",
         "Tewabech",
         "Taytu",
         "Getachew",
         "Gezahegn",
         "Elias",
         "Ermias"

      ],
      'Afar' => [
         "Awol",
         "Arba",
         "Habib",
         "Mirah",
         "Hanfareh",
         "Mirah",
         "Ismail",
         "Ali",
         "Serro",
         "Seyoum",
         "Awel",
      ],
      'Amhara' => [
         "Yidnekachew",
         "Yitbarek",
         "Yonathan",
         "Zekarias",
         "Zelalem",
         "Zeleke",
         "Zerihun",
         "Zewdu",
         "Girmachew",
         "Gizachew",
         "Getachew",
         "Dereje",
         "Dilnesaw",
         "Daniel",
         "Besufekad",
         "Belachew",
         "Befekadu",
         "Atlabachew",
         "Asmamaw",
         "Asheber",
         "Asrat",
         "Andualem",
         "Andargachew",
         "Amanuel",
         "Amare"
      ],
      'Benishangul Gumuz' => [
         "Atom ",
         "Mustafa",
         "Atieb",
         "Ahmed",
         "Abdu",
         "Mohammed",
         "Yaregal",
         "Aysheshum",
         "Ahmed",
         "Mikias",
         "Abenezer",
         "Abdu"
      ],
      'Dire Dawa' => [
         "Abate",
         "Abel",
         "Abdela",
         "Redwan",
         "Petros",
         "Tedla",
         "Nebil",
         "Negash",
         "Abdul",
         "Mikias",
         "Abenezer",
         "Abdu"
      ],
      'Gambela' => [
         "Obang",
         "Meto",
         "Ouman",
         "Akway",
         "Keat",
         "Ubong",
         "Obup",
         "Bithow",
         "Gatluak",
         "Omot",
         "Yitbarek",
         "Zeleke",
         "Besufekad",
         "Asrat"
      ],
      'Harari' => [
         "Sofonyas",
         "Solomon",
         "Taye",
         "Redwan",
         "Petros",
         "Tedla",
         "Nebil",
         "Negash",
         "Mussie",
         "Mikias",
         "Mamush",
         "Legesse"
      ],
      'Oromiya' => [
         "Gemechu",
         "Bekele",
         "Bekila",
         "Dibaba",
         "Lemma",
         "Abdisa",
         "Lemessa",
         "Megerssa",
         "Feyssa",
         "Ketessa"
      ],
      'Somali' => [
         "Mohamed",
         "Abdela",
         "Abdi",
         "Abdu",
         "Abdul",
         "Abdulahi",
         "Abubeker",
         "Ahmed",
         "Ali",
         "Abdulahi",
         "Hassan",
         "Farah",
         "Tahir"
      ],
      'Tigray' => [
         "Gebre-Egziabher",
         "Tekeste",
         "Sebhat",
         "Gebre-Mariam",
         "Wolde-Giorgis",
         "Paulos",
         "Isayas",
         "Gebre-Micheal",
         "Haile-Selassie",
         "Gebre-Meskel",
         "Haile-Mariam",
         "Hagos"
      ],
      'SNNPR' => [
         "Abate",
         "Kisho",
         "Hailemariam",
         "Desalegn",
         "Shigutie",
         "Shiferaw",
         "Dalke",
         "Dessie",
         "Mathewos",
         "Million"
      ],
      'Sidama' => [
         "Ledamo",
         "Desta",
         "Hailemariam",
         "Desalegn",
         "Dalke",
         "Dessie",
         "Mathewos",
         "Million"
      ],
      "SWEPR" => [
         "Wagesho",
         "Negash",
         "Hailemariam",
         "Desalegn",
      ]
   ];

   public function etname($region): string
   {
      return static::randomElement(static::$names[$region]);
   }

   public function etemail($name, $no): string
   {
      return $name . $no . "@gmail.com";
   }
}
