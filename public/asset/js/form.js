'use strict';

class Form {
    static submitFormEvent(
        form,
        validationCallback = null,
        callback = null,
        callbackArguments = []
    ) {

        let selfForm = this;

        form.addEventListener('submit', function() {

            let validateFrom = selfForm.validateFormData(form);
            let validateCallback = validationCallback ? validationCallback() : true;

            if (validateFrom && validateCallback) {
                let url = form.action;
                let requestType = form.method;
                let data = new FormData(form);

                Ajax.sendRequest(url, requestType, data, callback, callbackArguments);
            }
        });

        return;
    }

    static validateFormData(form) {
        return true;
        let countErrors = 0;
        let elements = Array.from(form.querySelectorAll('[data-validate-element]'));

        elements.forEach(element => {
            countErrors += this.elementValidation(element) ? 0 : 1;
        });

        return (countErrors === 0);
    }

    static elementValidation(element) {
        if (!element.disabled) {
            if (Validate.validateElement(element)) {
                Utility.setElementCss(element, 'border', 'inset 1px #767676');
                Utility.toggleErrorMessageInElementSibling(element);
            } else {
                Utility.displayElementErrorMessage(element);
                return false;
            }
        }

        return true;
    }

}
