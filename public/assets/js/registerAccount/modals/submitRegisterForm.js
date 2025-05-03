'use strict';

function submitRegisterFormResponse(response) {
    if (response['status'] === 1) {
        Utility.redirectToLocation(response['data']['redirect']);
    } else {
        Utility.displayResponseMessagges(response['messages'], 'submitFormErrors');
    }

    return;
}

export function submitRegisterForm() {
    let form = document.getElementById('registerAccountForm');

    Form.submitFormEvent(form, null, submitRegisterFormResponse);

    return;
}
