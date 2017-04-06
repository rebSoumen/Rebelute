<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error404';
$route['translate_uri_dashes'] = FALSE;



$route['contact'] = 'home/contact';
$route['about'] = 'home/about';
$route['about/(:any)'] = 'home/about';

$route['careers'] = 'home/careers';
$route['blogs'] = 'home/blog';
$route['blog/(:any)'] = 'blog/index/$1';

$route['services'] = 'home/services';
$route['services/(:any)'] = 'home/services';
$route['software-maintainence']='home/software_maintainence';
$route['software-maintainence/(:any)']='home/software_maintainence';
$route['product-engineering']='home/product_engineering';
$route['product-engineering/(:any)']='home/product_engineering';
$route['web-development']='home/web_development';
$route['web-development/(:any)']='home/web_development';
$route['landing-page-services']='home/service1';
$route['landing-page-services/(:any)']='home/service1';
$route['software-development']='home/software_development';
$route['software-development/(:any)']='home/software_development';
$route['ui-ux-services/(:any)']='home/web_development';
$route['ui-ux-services']='home/web_development';
$route['software-reengineering']='home/software_re_engineering';
$route['software-reengineering/(:any)']='home/software_re_engineering';
$route['web-design'] = 'home/web_design';
$route['web-design/(:any)'] = 'home/web_design';
$route['mobile-design'] = 'home/mobile_design';
$route['mobile-design/(:any)'] = 'home/mobile_design';

$route['project-estimate'] ='home/project_estimate';
$route['theming-integration'] ='home/theming_integration';
$route['theming-integration/(:any)'] ='home/theming_integration';

$route['design-services'] = 'home/design_services';
$route['design-services/(:any)'] = 'home/design_services';

$route['mobile-development']= 'home/mobile_development';
$route['mobile-development/(:any)']= 'home/mobile_development';

$route['mobile-app-development']= 'home/mobile_app_development';
$route['mobile-app-development/(:any)']= 'home/mobile_app_development';

//$route['category-blogs/(:any)'] = 'blog/category_blogs/$1';
$route['web-development-services']= 'home/web_development1';
$route['web-development-services/(:any)']= 'home/web_development1';

$route['digital-marketing'] = 'home/digital_marketing';
$route['digital-marketing/(:any)'] = 'home/digital_marketing';

$route['technologies/(:any)']= 'home/technologies';
$route['technologies']= 'home/technologies';
$route['pricing-plans']= 'home/pricing_plans';
$route['industries']= 'home/industries';
$route['real_estate_vertical']= 'home/real_estate_vertical';
$route['digital_marketing_indusries']= 'home/digital_marketing_indusries';



$route['news']= 'home/news';
$route['news/(:any)']= 'news/index/$1';

$route['news1']= 'home/news1';

$route['category-news/(:any)'] = 'news/category_news/$1';	

$route['pricing-plans/(:any)']= 'home/pricing_plans/$1';


$route['pricing-category'] = 'home/pricing_category';


$route['project-estimate'] = 'home/project_estimate';

$route['monthly-estimate'] = 'home/project_estimate1';

$route['hourly-estimate'] = 'home/project_estimateHourly';


$route['sms-marketing'] = 'home/sms_marketing';
$route['sms-marketing/(:any)'] = 'home/sms_marketing/$1';

$route['email-marketing'] = 'home/email_marketing';
$route['email-marketing/(:any)'] = 'home/email_marketing/$1';


$route['pay-per-click'] = 'home/pay_per_click';
$route['pay-per-click/(:any)'] = 'home/pay_per_click/$1';

$route['online-reputation-Management'] = 'home/online_reputation_Management';
$route['online-reputation-Management/(:any)'] = 'home/online_reputation_Management/$1';

$route['social-media-optimisation'] = 'home/social_media_optimisation';
$route['social-media-optimisation/(:any)'] = 'home/social_media_optimisation/$1';

$route['search-engine-optimization'] = 'home/Search_engine_optimization';
$route['search-engine-optimization/(:any)'] = 'home/Search_engine_optimization/$1';

$route['blog-development'] = 'home/blog_development';
$route['blog-development/(:any)'] = 'home/blog_development/$1';

$route['e-commerce-solution'] = 'home/e_commerce_solution';
$route['e-commerce-solution/(:any)'] = 'home/e_commerce_solution/$1';

$route['enterprise-development'] = 'home/enterprise_development';
$route['enterprise-development/(:any)'] = 'home/enterprise_development/$1';

$route['custom-web-pplication-development'] = 'home/Custom_web_application_development';
$route['custom-web-application-development/(:any)'] = 'home/Custom_web_application_development/$1';

$route['content-management-system'] = 'home/content_management_system';
$route['content-management-system/(:any)'] = 'home/content_management_system/$1';

$route['digital-strategy-consulting'] = 'home/digital_strategy_consulting';
$route['digital-strategy-consulting/(:any)'] = 'home/digital_strategy_consulting/$1';

$route['phone-gap-app-development'] = 'home/phonegap_app_development';
$route['phone-gap-app-development/(:any)'] = 'home/phonegap_app_development/$1';

$route['android-app-development'] = 'home/android_app_development';
$route['android-app-development/(:any)'] = 'home/android_app_development/$1';

$route['blackberry-app-development'] = 'home/blackberry_app_development';
$route['blackberry-app-development/(:any)'] = 'home/blackberry_app_development/$1';

$route['iPad-app-development'] = 'home/iPad_app_development';
$route['iPad-app-development/(:any)'] = 'home/iPad_app_development/$1';

$route['iPhone-app-development'] = 'home/iPhone_app_development';
$route['iPhone-app-development/(:any)'] = 'home/iPhone_app_development/$1';

$route['windows-app-development'] = 'home/windows8_app_development';
$route['windows-app-development/(:any)'] = 'home/windows8_app_development/$1';


$route['terms-and-conditions'] = 'home/termsAndconditions';
$route['privacy-policy']= 'home/privacyPolicy';
$route['sitemap'] = 'home/sitemap';


$route['mobile-lp'] = 'landing_page/showMobilePage';
$route['seo-lp'] = 'landing_page/showSeoPage';
$route['web-lp'] = 'landing_page/showWebpage';
$route['promotion-lp']='landing_page/promotionWebpage';
$route['gitex-2016']='landing_page/gitex2016';

$route['walk-in'] = 'landing_page/walk_in';

