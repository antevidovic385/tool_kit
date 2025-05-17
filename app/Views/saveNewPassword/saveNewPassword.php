<?php
    use App\Helpers\Translate_helper;
    use App\Helpers\Message_helper;
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 offset-lg-4 col-lg-4">
                <h1>
                    <?php echo Translate_helper::translate('Save new password'); ?>
                </h1>
                <div id="setNewPasswordMsgContainer"></div>
                <form
                    id="saveNewPasswordForm"
                    method="POST"
                    onsubmit="return false"
                    action="<?php echo $baseUrl . 'save_new_password/' . $jwt; ?>"
                    >
                    <div id="<?php echo $mainMsgContainerId; ?>"></div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">
                            <?php echo Translate_helper::translate('New password')?>:
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter new password')?>"
                            data-validate-element="1"
                            data-is-password="1"
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$PASSWORD_IS_MANDATORY)); ?>"
                            autocomplete="off"
                            >
                            <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <input
                        type="submit"
                        class="btn btn-primary <?php echo $sendAjaxRequestClass; ?>"
                        value="<?php echo Translate_helper::translate('Save'); ?>"
                        >
                </form>
                <div>
                    <a href="<?php echo $baseUrl . 'login'; ?>">
                        <?php echo Translate_helper::translate('Login'); ?>
                    </a>
                </div>
                <div>
                    <a href="<?php echo $baseUrl . 'reset_password'; ?>">
                        <?php echo Translate_helper::translate('Reset password'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
