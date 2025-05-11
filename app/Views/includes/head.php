<?php
    use App\Helpers\Translate_helper;
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
    <head>
        <title>
            <?php echo Translate_helper::translate($title); ?>
        </title>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php echo csrf_meta() ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
        <link rel="stylesheet" href="<?php echo $baseUrl . 'asset/css/main.css'; ?>">
        <link rel="stylesheet" href="<?php echo $baseUrl . 'asset/css/custom.css'; ?>">

        <?php
            $viewCss = 'asset/css/' . $assestFile . '.css';
            $viewCssFullPath = FCPATH . $viewCss;

            if (file_exists($viewCssFullPath)) {
                $viewCss .= '?size=' . filesize($viesCssFullPath);
                ?>
                    <link rel="stylesheet" href="<?php echo $baseUrl . $viewCss; ?>">
                <?php
            }
        ?>

    </head>
    <?php if ($area === ADMIN_AREA) { ?>
        <body
            data-theme="default"
            data-layout="fluid"
            data-sidebar-position="left"
            data-sidebar-behavior="sticky"
            >
            <div class="wrapper">
                <div id="<?php echo $mainMsgContainerId; ?>"></div>
                <?php
                    include_once APPPATH . '/Views/includes/admin/sidebar.php';
                    include_once APPPATH . '/Views/includes/admin/navigation.php';
                ?>
    <?php } else { ?>
        <body>
    <?php } ?>
