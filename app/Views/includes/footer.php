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

        <script src="<?php echo $baseUrl . 'assets/js/main.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'assets/js/utility.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'assets/js/validate.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'assets/js/ajax.js?v=1_0_0'; ?>"></script>
        <script src="<?php echo $baseUrl . 'assets/js/form.js?v=1_0_0'; ?>"></script>

        <?php
            $viewJsFile = 'assets/js/' . $view . '.js';
            $viewJsFileFullPath = FCPATH . $viewJsFile;

            if (file_exists($viewJsFileFullPath)) {
                $viewJsFile .= '?v=' . filesize($viewJsFileFullPath);
                ?>
                    <script type="module" src="<?php echo $baseUrl . $viewJsFile; ?>"></script>
                <?php
            }
        ?>
    </body>
</html>
