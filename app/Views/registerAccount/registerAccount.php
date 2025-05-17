<?php
    use App\Helpers\Translate_helper;
    use App\Helpers\Message_helper;
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 offset-lg-4 col-lg-4">
                <h1>
                    <?php echo Translate_helper::translate('Register accouunt'); ?>
                </h1>
                <div id="<?php echo $mainMsgContainerId; ?>"></div>
                <form
                    id="registerAccountForm"
                    method="POST"
                    onsubmit="return false"
                    action="<?php echo $baseUrl; ?>register_account"
                    >
                    <div class="mb-3 mt-3">
                        <label for="account" class="form-label">
                            <?php echo Translate_helper::translate('Account name'); ?>:
                        </label>
                        <input
                            type="text"
                            id="account"
                            name="account"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter account')?>"
                            data-validate-element="1"
                            data-min-length="1"
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$ACCOUNT_NAME_IS_MANDATORY)); ?>"
                            autocomplete="on"
                            autofocus
                            >
                            <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstName" class="form-label">
                            <?php echo Translate_helper::translate('First name')?>:
                        </label>
                        <input
                            type="text"
                            id="firstName"
                            name="firstName"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter first name')?>"
                            data-validate-element="1"
                            data-min-length="1"
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$FIRST_NAME_IS_MANDATORY)); ?>"
                            autocomplete="on"
                            >
                            <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="secondName" class="form-label">
                            <?php echo Translate_helper::translate('Second name')?>:
                        </label>
                        <input
                            type="text"
                            id="secondName"
                            name="secondName"
                            class="form-control"
                            placeholder="<?php echo Translate_helper::translate('Enter second name')?>"
                            data-validate-element="1"
                            data-min-length="1"
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$SECOND_NAME_IS_MANDATORY)); ?>"
                            autocomplete="on"
                            >
                            <p class="<?php echo $formMsgErrorsClass; ?>"></p>
                    </div>
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
                            data-error-message="<?php echo Translate_helper::translate(Message_helper::getMessage(Message_helper::$INVALID_EMAIL)); ?>"
                            autocomplete="on"
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
            </div>
        </div>
    </div>
</main>
