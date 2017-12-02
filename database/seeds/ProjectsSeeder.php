<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([
    		'user_id' 		=> 1,
    		'category_id'	=> 1,
    		'title' 		=> 'SouqNaql Web Application',
    		'description' 	=> "SouqNaql lives at the intersection of technology and logistics. Founded by a tech entrepreneur from Egypt. SouqNaql understands the challenges of local trucking and is dedicated to creating new solutions with technology. By seamlessly connecting shippers and carriers through our web and mobile apps, we're helping truckers grow their businesses and shippers track their freight in real time. The diversity of our team and their ideas is what gives SouqNaql the edge in an industry that still relies heavily on phone calls, email and fax machines.",
    		'rate'			=> 	4.0,
    		'slug'			=> 	'SouqNaql_Web_Application',
    		'url'			=>	'http://souqnaql.com/',
    	]);

    	DB::table('products')->insert([
    		'user_id' 		=> 1,
    		'category_id'	=> 1,
    		'title' 		=> 'DRhino E-Commerce Application',
    		'description' 	=> "D-Rhino is the leading manufacturer of USA-made hitches and a complete line towing products. We offer the broadest selection of custom-fit receiver hitches for nearly every vehicle on the road today. We also offer gooseneck, 5th wheel and weight distribution hitches, as well as electrical components, ball mounts, trailer balls, cargo carriers, bike racks and other towing accessories. For everything from passenger cars and vans to full-size pickups .",
    		'rate'			=> 4.0,
    		'slug'			=> 'DRhino_E-Commerce_Application',
    		'url'			=>	'https://drhino.com/',
    	]);

    	DB::table('products')->insert([
    		'user_id' 		=> 1,
    		'category_id'	=> 1,
    		'title' 		=> 'Sellerpier Web Application',
    		'description' 	=> "Sellerpier's innovative platform provides a powerful set of tools to manage the full scope of multi-channel selling. From inventory and warehouse management, publishing listing to marketplaces, to order processing and shipping, as well as accounting integration, SellerPier does it all. SellerPier's one-system solution simplifies complex E-commerce operations, empowering business to get a grip on their online sales.",
    		'rate'			=> 4.0,
    		'slug'			=> 'Sellerpier_Web_Application',
    		'url'			=> 'https://sellerpier.com/',
    	]);

    	DB::table('products')->insert([
    		'user_id' 		=> 1,
    		'category_id'	=> 1,
    		'title' 		=> 'Maysara Website',
    		'description' 	=> "مجموعة تجارية تم تأسيسها في عام 2010 لتلببية احتياجات عملائنا في السوق العالمية والمحلية من المواد والخدمات الخاصة بالديكور والتشطيب والبناء، بجودة وسرعة وأسعار تتناسب مع متطلباتهم واحتياجاتهم، سواءاً كانت تلك المتطلبات من الأسواق المحلية أو العالمية (كالأسواق الخليجية والعربية والآسيوية والأوروبية والأمريكية وغيرها من الأسواق التي لهاعلاقات تجارية مع مصر.) تعتبر ميسره جروب واحدة من مجموعة مكونة من اربع مؤسسات، أنشئت لتعمل جميعها جنباً إلى جنب في منظومة متكاملة في سوق العمل المحلي والعالمي، وهي على النحوالتالي: الشركة العالمية للصرر . الشركة العالمية للمرايات. مصنع بلاطات ثري دي. ميسره للإستثمار و التجميل العقاري.",
    		'rate'			=> 4.0,
    		'slug'			=> 'Maysara_Website',
    		'url'			=> 'https://maysaragroup.com/',
    	]);


    	DB::table('products')->insert([
    		'user_id' 		=> 1,
    		'category_id'	=> 2,
    		'title' 		=> 'SouqNaql Mobile Application',
    		'description' 	=> "Free technology gives drivers & dispatchers instant access to nearby shipments. Accept nearby shipments on your phone. Sign up for free SouqNaql carrier account and download our smartphone app for iPhone or Android. Get alerts for nearby shipments. View jobs before you accept. Upload signatures and BOLs with your phone.",
    		'rate'			=> 4.0,
    		'slug'			=> 'SouqNaql Mobile Application',
    		'url'			=> 'https://play.google.com/store',
    	]);



    }


}
