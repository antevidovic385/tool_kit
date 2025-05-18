'use strict';

function submitSaveNewPasswordFormResponse(response) {

    Utility.displayResponseMessagges(response['messages']);

    return;
}

export function subnitSaveNewPasswordForm() {
    let form = document.getElementById('saveNewPasswordForm');

    if (Utility.isElementExistsInDom(form)) {
        Form.submitFormEvent(form, null, submitSaveNewPasswordFormResponse);
    }

    return;
}
