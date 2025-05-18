<?php
    use App\Helpers\Translate_helper;
    use App\Helpers\Message_helper;
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 offset-lg-4 col-lg-4">
                <h1>
                    <?php echo Translate_helper::translate('Login'); ?>
                </h1>
                <div id="<?php echo $mainMsgContainerId; ?>"></div>
                <form
                    id="accountLoginForm"
                    method="POST"
                    onsubmit="return false"
                    action="<?php echo $baseUrl; ?>account_login"
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
                            data-error-message="<?php echo Translate_helper::translate('Email is mandatory'); ?>"
                            autocomplete="on"
                            autofocus
                            >
                        <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">
                            <?php echo Translate_helper::translate('Password')?>:
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter password')?>"
                            autocomplete="off"
                            data-validate-element="1"
                            data-min-length="1"
                            data-error-message="<?php echo Translate_helper::translate('Password is mandatory'); ?>"
                            >
                        <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <input
                        type="submit"
                        class="btn btn-primary <?php echo $sendAjaxRequestClass; ?>"
                        value="<?php echo Translate_helper::translate('Login'); ?>"
                        >
                </form>
                <div>
                    <a href="<?php echo $baseUrl . 'reset_password'; ?>">
                        <?php echo Translate_helper::translate('Reset password'); ?>
                    </a>
                </div>
                <div>
                    <a href="<?php echo $baseUrl . 'registration'; ?>">
                        <?php echo Translate_helper::translate('Create account'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
