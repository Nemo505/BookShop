<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $now = Carbon::now();

    	DB::table('articles')->insert([
        
        'title' => 'Celebrating Black History: Covering African American communities' ,
        'category_id' => 1,
        'author' => 'Nemo',

        'subcontent' => 'America’s annual celebration of Black History Month takes on a remarkable dimension this year',
        'image' => '',
        'caption' => 'Freddie Mitchell, a Vicksburg Warren School District employee',
        'publishdate' => $now,
        'content' => 
        '
        America’s annual celebration of Black History Month takes on a remarkable dimension this year as the nation reels from a summer of protests confronting racism and police violence; as communities of color are disproportionately impacted by the COVID-19 pandemic due to systemic failures, from lack of local pharmacies to medical racism; and as Black leaders and activists take center stage in the fight for equity and justice amid a new administration. 

		Related: Celebrating Black History: The representative power of Black newsrooms

		Throughout this seismic change, Report for America reporters are on the ground covering their communities, elevating their voices and ensuring accuracy, nuance and accountability for those historically marginalized by the news media. The cumulative effect of these local stories paints a wider picture of struggle and strength, resilience, and practical and lasting change. 

		We’ve rounded up some of the most consequential local reporting of Black communities nationwide: 

		Adria Walker reports for Rochester’s Democrat and Chronicle on a traditionally live performance celebrating local Black ancestors that is going digital this year. 
		In this extraordinary telling by PBS Flatland’s Catherine Hoffman, in Kansas City, Black WWI veterans are being honored more than a century after their service. “All of the men that are being reviewed received or were recommended for recognition for their acts of bravery, but none of them were granted the highest honor that the nation can give.” 
		Her consistent reporting on local affairs and culture in Missouri brings much-needed voice to prevalent issues in rural areas like labor, debt and community.
		Eileen Grench, The City’s juvenile justice reporter in New York, traces the story of a child welfare official who was fired for social media posts about her activism, and the groundswell of support that helped her get back to work.
		In a recent obituary from WFAE Charlotte, North Carolina, Alex Watts and Dante Miller pay tribute to a local woman who left behind a legacy of activism and impact by documenting Black history.
		In Minnesota, Kyeland Jackson has been closely following the sustained grip that George Floyd’s death, and the nationwide protests that followed, has on the city and its people. His latest covers the disproportionate impact COVID-19 is having on the Black community. 
		Reporting a three-part series on equity in Newport, Rhode Island, Antonia Aires-Brown explores the future of the North End, an area of significant residential and commercial economic disparity.
		In January, she contributed this incisive GroundTruth dispatch on what the development means to communities of color. 
		In Chicago, Jake Wittich has the story of two transgender women who were best friends, and killed within weeks of one another. They are among at least three other transgender women who have been murdered in the last two years. 
		Sam Bojarski in Brooklyn for the Haitian Times is following community efforts to debunk COVID-19 vaccine myths, in English and Creole.
		Tatyana Turner published this powerful profile of a detective-turned-seamstress in Baltimore who founded a nonprofit that builds confidence and professionalism through dress. 
		        '
        ,
        'status' => 1,
        'language_id' => 1,
        
        'created_at' => $now ,
        'updated_at' => $now,
        
        ]);

    	
    }
}
