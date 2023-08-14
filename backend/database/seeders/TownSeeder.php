<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\Town;
class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karnataka_id = State::where('name','Karnataka')->first()->id;        
        $maharashtra_id = State::where('name','Maharashtra')->first()->id;  
        $himachalPradesh_id = State::where('name','Himachal Pradesh')->first()->id;  
        $arunachalPradesh_id = State::where('name','Arunachal Pradesh')->first()->id;  
        $uttarakhand_id = State::where('name','Uttarakhand')->first()->id;  
        $delhi_id = State::where('name','Delhi')->first()->id;
        $madhyaPradesh_id = State::where('name','Madhya Pradesh')->first()->id;
        $jammuAmdKashmir_id = State::where('name','Jammu and Kashmir')->first()->id;
        $tamilNadu_id = State::where('name','Tamil Nadu')->first()->id;
        $sikkim_id = State::where('name','Sikkim')->first()->id;
        $telangana_id = State::where('name','Telangana')->first()->id;
        $westBengal_id = State::where('name','West Bengal')->first()->id;
        $gujarat_id = State::where('name','Gujarat')->first()->id;
        $chhattisgarh_id = State::where('name','Chhattisgarh')->first()->id;
        $uttarPradesh_id = State::where('name','Uttar Pradesh')->first()->id;
        $meghalaya_id = State::where('name','Meghalaya')->first()->id;
        $haryana_id = State::where('name','Haryana')->first()->id;
        $chandhigarh_id = State::where('name','Chandigarh')->first()->id;
        $odisha_id = State::where('name','Odisha')->first()->id;
        $newYork_id = State::where('name','New York')->first()->id;
        $vienna_id = State::where('name','Vienna')->first()->id;
        $moscowOblast_id = State::where('name','Moscow Oblast')->first()->id;
        $taipehPrefecture_id = State::where('name','Taipeh Prefecture')->first()->id;
        $punjab_id = State::where('name','Punjab')->first()->id;
        $goa_id = State::where('name','Goa')->first()->id;
        $bagmatiProvince_id = State::where('name','Bagmati Province')->first()->id;
        $gandakiProvince_id = State::where('name','Gandaki Province')->first()->id;
        $provinceNoOne_id = State::where('name','Province No. 1')->first()->id;
        $madheshProvince_id = State::where('name','Madhesh Province')->first()->id;


        Town::insert([
            [
                'name' => 'BANGALORE',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'BHANDARA',
                'state_id' => $maharashtra_id,
            ],
            [
                'name' => 'BIR',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'BOMDILA',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'BYLAKUPPE',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'CHAUNTRA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'CLEMEN TOWN',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'DALHOUSIE',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'DEHRADUN',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'DEKYILING',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'DELHI',
                'state_id' => $delhi_id,
            ],
            [
                'name' => 'DHARAMSALA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'DHOLANJI',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'GONDIA',
                'state_id' => $madhyaPradesh_id,
            ],
            [
                'name' => 'GOPALPUR',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'HERBERTPUR',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'KULLU',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'HUNSUR',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'KANGRA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'KOLLEGAL',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'CHOGLAMSAR - LEH',
                'state_id' => $jammuAmdKashmir_id,
            ],
            [
                'name' => 'LAKHANWALA',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'MAINPAT',
                'state_id' => $chhattisgarh_id,
            ],
            [
                'name' => 'MANALI',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'MANDI',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'MIAO',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'MUNDGOD',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'MUSSOORIE',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'NAINITAL',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'OOTY',
                'state_id' => $tamilNadu_id,
            ],
            [
                'name' => 'PANDOH',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'PAONTA SAHIB',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'PATHLIKUL',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'PURUWALA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'RAJPUR',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'RAVANGLA',
                'state_id' => $sikkim_id,
            ],
            [
                'name' => 'SAHARANPUR',
                'state_id' => $uttarPradesh_id,
            ],
            [
                'name' => 'SATAUN',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'SHILLONG',
                'state_id' => $meghalaya_id,
            ],
            [
                'name' => 'SHIMLA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'SIRMOUR',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'SOLAN',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'SONADA',
                'state_id' => $westBengal_id,
            ],
            [
                'name' => 'SUJA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'TASHI JONG',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'TENZIN GANG',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'TEZU',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'TUTING',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'VARANASI',
                'state_id' => $uttarPradesh_id,
            ],
            [
                'name' => 'CHENNAI',
                'state_id' => $tamilNadu_id,
            ],
            [
                'name' => 'DARJEELING',
                'state_id' => $westBengal_id,
            ],
            [
                'name' => 'GANGTOK',
                'state_id' => $sikkim_id,
            ],
            [
                'name' => 'KALIMPONG',
                'state_id' => $westBengal_id,
            ],
            [
                'name' => 'HENLEY - LADAKH',
                'state_id' => $jammuAmdKashmir_id,
            ],
            [
                'name' => 'MANDUWALA',
                'state_id' => $uttarakhand_id,
            ],
            [
                'name' => 'MYSORE',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'PRATAPGARH',
                'state_id' => $uttarPradesh_id,
            ],
            [
                'name' => 'SUNDER NAGAR',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'NILGIRIS',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'TAWANG',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'TINDOLING',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'CHAMUNDA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'MUMBAI',
                'state_id' => $maharashtra_id,
            ],
            [
                'name' => 'GURGAON',
                'state_id' => $haryana_id,
            ],
            [
                'name' => 'DHARAMSALA CANTT',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'CHANDIGARH',
                'state_id' => $chandhigarh_id,
            ],
            [
                'name' => 'VADODARA',
                'state_id' => $gujarat_id,
            ],
            [
                'name' => 'MANGALORE',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'BODH GAYA',
                'state_id' => $uttarPradesh_id,
            ],
            [
                'name' => 'AMBALA',
                'state_id' => $haryana_id,
            ],
            [
                'name' => 'HYDERABAD',
                'state_id' => $telangana_id,
            ],
            [
                'name' => 'SALUGARA',
                'state_id' => $westBengal_id,
            ],
            [
                'name' => 'SANJOULI',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'CHANGLANG',
                'state_id' => $arunachalPradesh_id,
            ],
            [
                'name' => 'CHANDAGIRI',
                'state_id' => $odisha_id,
            ],
            [
                'name' => 'CHAMRAJNANAGAR',
                'state_id' => $karnataka_id,
            ],
            [
                'name' => 'CHAMBA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'PHUNTSOKLING',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'SARNATH',
                'state_id' => $uttarPradesh_id,
            ],
            [
                'name' => 'KAMRAO',
                'state_id' => $himachalPradesh_id,
            ],            
            [
                'name' => 'KOLKATA',
                'state_id' => $westBengal_id,
            ],
            [
                'name' => 'BHOPAL',
                'state_id' => $madhyaPradesh_id,
            ],
            [
                'name' => 'PUNE',
                'state_id' => $maharashtra_id,
            ],
            [
                'name' => 'NEW YORK',
                'state_id' => $newYork_id,
            ],
            [
                'name' => 'WIEN',
                'state_id' => $vienna_id,
            ],
            [
                'name' => 'MOSCOW',
                'state_id' => $moscowOblast_id,
            ],
            [
                'name' => 'TAIPAI',
                'state_id' => $taipehPrefecture_id,
            ],
            [
                'name' => 'PUNDUCHERRY',
                'state_id' => $tamilNadu_id,
            ],
            [
                'name' => 'BOMDIA',
                'state_id' => $himachalPradesh_id,
            ],
            [
                'name' => 'PANIPAT',
                'state_id' => $haryana_id,
            ],
            [
                'name' => 'LUDHIANA',
                'state_id' => $punjab_id,
            ],
            [
                'name' => 'GOA',
                'state_id' => $goa_id,
            ],
            [
                'name' => 'SARGUJA',
                'state_id' => $chhattisgarh_id,
            ],
            [
                'name' => 'KATHMANDU',
                'state_id' => $bagmatiProvince_id,
            ],
            [
                'name' => 'KALAPATHER',
                'state_id' => $sikkim_id,
            ],
            [
                'name' => 'Pokhara Shawarasum',
                'state_id' => $gandakiProvince_id
            ],
            [
                'name' => 'Pokhara Lodrik',
                'state_id' => $gandakiProvince_id 
            ],
            [
                'name' => 'Jawalakhel',
                'state_id' => $bagmatiProvince_id        
            ],
            [
                'name' => 'Delekling, Solukhumbu',
                'state_id' =>  $provinceNoOne_id
            ],
            [
                'name' => 'Dorpattan, Baglung',
                'state_id' => $gandakiProvince_id
            ],
            [
                'name' => 'Jampaling, Lodrik',
                'state_id' => $gandakiProvince_id
            ],
            [
                'name' => 'Gyegyeling, Rasuwa',
                'state_id' => $bagmatiProvince_id
            ],
            [
                'name' => 'Samdupling, Jwalakhel',
                'state_id' => $bagmatiProvince_id
            ],
            [
                'name' => 'Tashi Palkhiel, Pokhara',
                'state_id' => $gandakiProvince_id
            ],
            [
                'name' => 'Tashiling, Pokhara',
                'state_id' => $gandakiProvince_id
            ],
            [
                'name' => 'Samphelling, Walung',
                'state_id' => $provinceNoOne_id
            ],
            [
                'name' => 'ChoeJor, Boudha',
                'state_id' => $bagmatiProvince_id
            ],
            [
                'name' => 'Gyalsa-Phakshing, Shambhunath',
                'state_id' => $madheshProvince_id,
            ],
            [
                'name' => 'Paljorling, Lodrik',
                'state_id' => $gandakiProvince_id, // not sure
            ],
            [
                'name' => 'Namgyelling, Lotserok',
                'state_id' => $gandakiProvince_id,  // not sure
            ],
        ]);
    }
}