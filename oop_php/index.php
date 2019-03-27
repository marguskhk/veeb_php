<?php
require_once 'conf.php';
// main page by html templates
$main = new Template('main');
$meta = new Template('meta');
$style = new Template('style');
$js = new Template('js');
// add meta, style and js templates content to main template
$main->set('meta', $meta->parse());
$main->set('style', $style->parse());
$main->set('js', $js->parse());
// set up main page real values
$main->set('lang', $http->get('lang_id'));
$main->set('title', 'App Example Title');
$mainContent = new Template('main_content');
// create dish types selection
$sql = 'SELECT * FROM dish_types';
$dishTypes = $db->getData($sql);
foreach ($dishTypes as $dishTypeData){
    $dishType = new Template('type');
    $dishTypeName = new Template('type_name');
    $dishTypeName->set('type_name', $dishTypeData['type_name']);
    $dishTypeName->set('type_icon', $dishTypeData['type_icon']);
    $dishType->set('type_name', $dishTypeName->parse());
    $dishData = new Template('type_data');
    $dishData->set('type_name', $dishTypeData['type_name']);
    $dish = new Template('dish');
    $sql = 'SELECT * FROM dishes WHERE type_id='.fixDb($dishTypeData['type_id']);
    $dishes = $db->getData($sql);
    foreach ($dishes as $dishContent){
        $dish->set('dish_name', $dishContent['dish_name']);
        $dish->set('dish_description', $dishContent['dish_description']);
        $dish->set('dish_price', $dishContent['dish_price']);
        $dishData->add('dishes', $dish->parse());
    }
    $dishType->set('type_data', $dishData->parse());
    $mainContent->add('menu', $dishType->parse());
}
// page content from controller
// add action control
require_once 'controller.php';
require_once 'nav.php'; // nav element
$mainContent->set('footer', 'Page Footer');
$main->set('content', $mainContent->parse());
// print out main page full view
echo $main->parse();
$db->showHistory();