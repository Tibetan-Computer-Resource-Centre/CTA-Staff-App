<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $india_id = Country::where('name','India')->first()->id;
        $usa_id = Country::where('name','United States of America')->first()->id;
        $austria_id = Country::where('name','Austria')->first()->id;
        $nepal_id = Country::where('name', 'Nepal')->first()->id;
        $russia_id = Country::where('name', 'Russia')->first()->id;
        $taiwan_id = Country::where('name', 'Taiwan')->first()->id;
        State::insert([
            [
                'name' => 'Andhra Pradesh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Arunachal Pradesh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Assam',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Bihar',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Chhattisgarh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Goa',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Gujarat',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Haryana',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Himachal Pradesh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Jharkhand',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Karnataka',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Kerala',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Madhya Pradesh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Maharashtra',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Manipur',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Meghalaya',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Mizoram',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Nagaland',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Odisha',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Punjab',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Rajasthan',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Sikkim',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Tamil Nadu',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Telangana',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Tripura',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Uttar Pradesh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Uttarakhand',
                'country_id' => $india_id,
            ],
            [
                'name' => 'West Bengal',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Andaman and Nicobar',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Chandigarh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Dadra and Nagar Haveli and Daman and Diu',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Delhi',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Jammu and Kashmir',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Ladakh',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Lakshadweep',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Puducherry',
                'country_id' => $india_id,
            ],
            [
                'name' => 'Alabama',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Alaska',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Arizona',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Arkansas',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'California',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Colorado',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Connecticut',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Delaware',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Florida',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Georgia',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Hawaii',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Idaho',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Illinois',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Indiana',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Iowa',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Kansas',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Kentucky',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Louisiana',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Maine',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Maryland',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Massachusetts',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Michigan',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Minnesota',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Mississippi',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Missouri',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Montana',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Nebraska',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Nevada',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'New Hampshire',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'New Jersey',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'New Mexico',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'New York',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'North Carolina',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'North Dakota',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Ohio',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Oklahoma',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Oregon',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Pennsylvania',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Rhode Island',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'South Carolina',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'South Dakota',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Tennessee',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Texas',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Utah',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Vermont',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Virginia',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Washington',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'West Virginia',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Wisconsin',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Wyoming',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'District of Columbia',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'American Samoa',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Guam',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Northern Mariana Islands',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Puerto Rico',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'U.S. Virgin Islands',
                'country_id' => $usa_id,
            ],
            [
                'name' => 'Burgenland',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Carinthia',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Lower Austria',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Upper Austria',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Salzburg',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Styria',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Tyrol',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Vorarlberg',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Vienna',
                'country_id' => $austria_id,
            ],
            [
                'name' => 'Province No. 1',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Madhesh Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Bagmati Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Gandaki Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Lumbini Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Karnali Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Sudurpashchim Province',
                'country_id' => $nepal_id,
            ],
            [
                'name' => 'Amur Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Arkhangelsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Astrakhan Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Belgorod Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Bryansk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Chelyabinsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Irkutsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Ivanovo Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kaliningrad Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kaluga Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kemerovo Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kirov Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kostroma Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kurgan Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Kursk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Leningrad Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Lipetsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Magadan Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Moscow Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Murmansk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Nizhny Novgorod',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Novgorod Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Novosibirsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Omsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Orenburg Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Oryol Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Penza Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Pskov Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Rostov Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Ryazan Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Sakhalin Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Samara Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Saratov Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Smolensk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Sverdlovsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Tambov Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Tomsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Tver Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Tula Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Tyumen Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Ulyanovsk Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Vladimir Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Volgograd Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Vologda Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Voronezh Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Yaroslavl Oblast',
                'country_id' => $russia_id,
            ],
            [
                'name' => 'Taipeh Prefecture',
                'country_id' => $taiwan_id,
            ],
            [
                'name' => 'Taiwan Prefecture',
                'country_id' => $taiwan_id,
            ],
            [
                'name' => 'Tainan Prefecture',
                'country_id' => $taiwan_id,
            ],
            [
                'name' => 'Taitung Prefecture',
                'country_id' => $taiwan_id,
            ],
        ]);
    }
}



