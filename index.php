<?php
require_once('./config/app.php');
require_once('./autoload.php');

print_r($_GET);
if (isset($_GET['views']))
{
    $url = explode('/', $_GET['views']);
}else{
    //$url = ['login'];
}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            use app\controllers\ViewsController;
            $view = new ViewsController()->getControllerViews($url[0]);

            if($view === 'login' || $view === '404')
            {
                require_once('./app/views/content/' . $view . '-view.php');
            }else{
                require_once($view);
            }
        ?>
    </body>
</html>
