'use strict';

function submitResetPasswordFormResponse(response) {
    Utility.displayResponseMessagges(response['messages']);
    return;
}

export function submitResetPasswordForm() {
    let form = document.getElementById('resetPassword');

    Form.submitFormEvent(form, null, submitResetPasswordFormResponse);

    return;
}
