<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();

        $companies = [
            [
                'company' => 'Bernard pivo',
                'company_description' => 'Here at the brewery, we honor traditional manufacturing procedures and so in our cellars, the fermentation of beer is carried out in fermentation rooms and beer then matures in lager cellars. Slowly, as the traditional technology of making beer requires, it awaits its customers for several weeks at a temperature of 1-2°C . When its time arrives, the beer is filtered, while maintaining a temperature of 2°C, through a special microbial filter, which catches all microorganisms. The beer does not change its aroma, color or taste - it preserves all nutritious and health values and therefore you receive the exact beer that we took care of for so long in our lager cellars.',
	            'company_number' => '420 565 300 217',
	            'company_address' => '5. května 1 396 01  Humpolec Czech Republic',
                'company_email' => 'pivovar@bernard.cz',
	            'company_logo' => 'https://www.bernard.cz/img/u/logo-bernard-large-v02.png'
            ],
            [
                'company' => 'Pivovar Černá Hora',
                'company_description' => 'The first written mention of Montenegrin beer dates back to 1298, to the Černá Hora brewery, then from 1530, when the Černá Hora estate was owned by the brothers Tas and Jaroslav Černohorští from Boskovice. In addition to the lords of Boskovice, the brewery is historically associated mainly with the important aristocratic family of Liechtenstein, who managed it since 1597, and later with the Auersperg family. The brewers of the Černá Hora Brewery, a picturesque town in the Blansko region, use traditional production methods and the highest quality raw materials for production. The beer range is complemented by the production of soft drinks and table water plus mixed beer-based drinks (so-called radlers) and now also cider. Drinking excellent Montenegrin beers is always associated with a wonderful atmosphere and respect for diversity. Montenegro beer thus encourages fantastic experiences when meeting friends and acquaintances. He always promotes the best entertainment, turning beer connoisseurs into friends and making friends real beer connoisseurs. Montenegro is a well-known beer brand. It has a long history of brewing beer from Czech quality ingredients, in the traditional two-mouth way. The beer is fermented in open cellars and lies in lager tanks.',
	            'company_number' => '420 733 747 116',
	            'company_address' => 'Černá Hora 3, 679 21 Černá Hora, Czechia',
                'company_email' => 'znackovka@baracek.cz',
	            'company_logo' => 'https://pivovarcernahora.cz/wp-content/uploads/2020/04/Logo_CH_upravy_2016.png'
            ],
            [
                'company' => 'Měšťanský pivovar Havlíčkův Brod',
                'company_description' => 'Rebel was originally the name for a fourteen-degree beer. The new brewer Josef Bouda announced a competition among employees for a name for a dark 14-degree beer. The condition was that he be connected with a city or an important personality. There were countless ideas, but Rebel emerged as the winner. The inspiration was, of course, the well-known politician, journalist, economist and also the rebel Karel Havlíček Borovský . Over time, the name has become a brand for all beers produced by the brewery.',
	            'company_number' => '420 569 495 111',
	            'company_address' => 'Měšťanský pivovar Havlíčkův Brod as Dobrovského 2027, 580 01 Havlíčkův Brod',
                'company_email' => 'info@hbrebel.cz',
	            'company_logo' => 'https://www.hbrebel.cz/img/logo_rebel.png'
            ],
	[
                'company' => '.Pivovar a sodovkárna Jihlava, a.s.',
                'company_description' => 'Returning to the original recipes, today Ježek beer is synonymous with a demanding but honest life in the Vysočina region. Balance, pleasant strong bitterness, exceptional hop aroma and quality aftertaste correspond exactly to the nature of local beer connoisseurs. Ježek belongs to Jihlava as inseparably as Jihlava belongs to Ježek. Jihlava beer is a traditional, popular and often sought-after drink in the Vysočina region  . Probably the oldest written report  on the malting and brewing industry in Jihlava is mentioned in a town book  from the first half of the 14th century. The historical development culminates in 1859, when the maltsters from Jihlava decided to close the  last 4 breweries and build a joint modern brewery. The new brewery, as a successor to Jihlava\'s brewing industry, was ceremoniously opened on April 4, 1861. However, the brewery itself marks the year 1860 as the year of its establishment, when it began to function as an important economic entity. Under the baton of the new owner, the brewery returns to the production of beer according to traditional recipes and today offers its consumers a carefully compiled range of beers, including interesting specialties, such as green beer Krasličák or red Devil\'s special.',
	            'company_number' => '420 567 564 146',
	            'company_address' => 'Jihlava Brewery, as Jihlava, Vrchlického 2',
                'company_email' => 'zakaznicky.servis@pivovary-lobkowicz.cz',
	            'company_logo' => 'https://pivovar-jihlava.cz/wp-content/uploads/2020/05/2019-Jezek-logo-bile.png'
            ],
	[
                'company' => 'Pivovar Krásné Březno',
                'company_description' => '',
	            'company_number' => '420 800 555 511',
	            'company_address' => 'Heineken ČR a.s. U Pivovaru 1, 270 53 Krušovice',
                'company_email' => 'objednavky@heineken.com',
	            'company_logo' => ''
            ],

        ];

        foreach($companies as $company){
            Company::create($company);
        }
    }
}



