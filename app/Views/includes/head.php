<?php
    use App\Helpers\Translate_helper;
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
    <head>
        <title><?php echo Translate_helper::translate($title); ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo csrf_meta() ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
        <link rel="stylesheet" href="<?php echo $baseUrl . 'assets/css/main.css'; ?>">
        <link rel="stylesheet" href="<?php echo $baseUrl . 'assets/css/custom.css'; ?>">

        <?php
            $viewCss = 'assets/css/' . $view . '.css';
            $viewCssFullPath = FCPATH . $viewCss;

            if (file_exists($viewCssFullPath)) {
                $viewCss .= '?size=' . filesize($viesCssFullPath);
                ?>
                    <link rel="stylesheet" href="<?php echo $baseUrl . $viewCss; ?>">
                <?php
            }
        ?>

    </head>
    <body>
        <div id="<?php echo $mainMsgContainerId; ?>"></div>
