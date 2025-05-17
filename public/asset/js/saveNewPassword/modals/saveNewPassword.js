'use strict';

function submitSaveNewPasswordFormResponse(response) {

    Utility.displayResponseMessagges(response['messages']);

    return;
}

export function subnitSaveNewPasswordForm() {
    let form = document.getElementById('saveNewPasswordForm');

    Form.submitFormEvent(form, null, submitSaveNewPasswordFormResponse);

    return;
}
