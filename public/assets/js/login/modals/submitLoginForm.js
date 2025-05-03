'use strict';

function submitLoginFormResponse(response) {
    if (response['status'] === 1) {
        Utility.redirectToLocation(response['data']['redirect']);
    } else {
        Utility.displayResponseMessagges(response['messages'], 'submitLoginErrors');
    }

    return;
}

export function submitLoginForm() {
    let form = document.getElementById('accountLoginForm');

    Form.submitFormEvent(form, null, submitLoginFormResponse);

    return;
}
