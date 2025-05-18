        <?php
            if ($area === ADMIN_AREA) {
                include_once APPPATH . 'Views/includes/admin/footer.php';
            }
        ?>
        <script>
            const APP_GLOBALS = (function(){
                let globals = {
                    'baseUrl' : '<?php echo $baseUrl; ?>',
                    'csrfHeader' : '<?php echo $csrfHeader; ?>',
                    'mainMsgContainerId' : '<?php echo $mainMsgContainerId; ?>',
                    'formMsgErrorsClass' : '<?php echo $formMsgErrorsClass; ?>',
                    'sendAjaxRequestClass' : '<?php echo $sendAjaxRequestClass; ?>',
                    'minPasswordLength' : '<?php echo $minPasswordLength; ?>'
                }

                Object.freeze(globals);

                return globals;
            }());
        </script>

        <script src="<?php echo $baseUrl . 'asset/js/main.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'asset/js/utility.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'asset/js/validate.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'asset/js/ajax.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'asset/js/form.js?v=1_0_0'; ?>"></script>

        <?php
            $viewJsFile = 'asset/js/' . $assestFile . '.js';
            $viewJsFileFullPath = FCPATH . $viewJsFile;

            if (file_exists($viewJsFileFullPath)) {
                $viewJsFile .= '?v=' . filesize($viewJsFileFullPath);
                ?>
                    <script type="module" src="<?php echo $baseUrl . $viewJsFile; ?>"></script>
                <?php
            }
        ?>

        <?php
            if (!empty($_SESSION['ctrlResponse'])) {
                ?>
                <script>
                    let ctrlResponse = JSON.parse('<?php echo $_SESSION['ctrlResponse']; ?>');
                    Utility.displayResponseMessagges(ctrlResponse['messages']);
                </script>
                <?php
                unset($_SESSION['ctrlResponse']);
            }
        ?>
    </body>
</html>
