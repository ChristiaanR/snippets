# define variables

$jinput = JFactory::getApplication()->input;

$view = $jinput->get('view');
$option = $jinput->get('option');
$task = $jinput->get('task');
$layout = $jinput->get('layout');
$itemid = JRequest::getVar('Itemid');
$menu = &JSite::getMenu();
$active = $menu->getItem($itemid);
$params = $menu->getParams( $active->id );
$user = &JFactory::getUser();   
$user_id = $user->get('id');

# Use as a class on body or any other element
<?php echo  $active->alias,' ', $view,' ',$option,' ',$layout,' ',$task, ($user_id !='0' ? "member" : "guest"); ?>
