<?php
    use App\Helpers\Translate_helper;
    use App\Helpers\Message_helper;
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 offset-lg-3 col-lg-6">
                <section>
                    <h1>
                        <?php echo Translate_helper::translate('Reset password'); ?>
                    </h1>
                    <p>
                        <?php echo Translate_helper::translate('Enter your email and we will send you a link to reset your password'); ?>
                    </p>
                </section>
                <div id="<?php echo $mainMsgContainerId; ?>"></div>
                <form
                    id="resetPassword"
                    method="POST"
                    onsubmit="return false"
                    action="<?php echo $baseUrl; ?>send_reset_password_link"
                    >
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">
                            <?php echo Translate_helper::translate('Email')?>:
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter email')?>"
                            data-validate-element="1"
                            data-is-email="1"
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$EMAIL_IS_MANDATORY)); ?>"
                            autocomplete="on"
                            >
                        <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <input
                        type="submit"
                        class="btn btn-primary <?php echo $sendAjaxRequestClass; ?>"
                        value="<?php echo Translate_helper::translate('Send'); ?>"
                        >
                </form>
                <div>
                    <a href="<?php echo $baseUrl . 'login'; ?>">
                        <?php echo Translate_helper::translate('Login'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
