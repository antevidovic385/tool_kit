'use strict';

class Utility {

    static isElementExistsInDom(element) {
        return document.body.contains(element);
    }

    static setElementIdCss(id, cssProperty, cssValue) {
        let element = document.getElementById(id);

        setElementCss(element, cssProperty, cssValue);

        return;
    }

    static setElementCss(element, cssProperty, cssValue) {
        if (!this.isElementExistsInDom(element)) return;

        element.style[cssProperty] = cssValue;

        return;
    }

    static setElementIdValue(id, newValue) {
        let element = document.getElementById(id);

        this.setElementValue(element, newValue);

        return;
    }

    static setElementValue(element, newValue) {
        if (!this.isElementExistsInDom(element)) return;

        element.value = newValue;
        element.setAttribute('value', newValue);

        return;
    }

    static setElementIdAttribute(id, attribute, value) {
        let element = document.getElementById(id);

        this.setElementAttribute(element, attribute, value);

        return;
    }

    static setElementAttribute(element, attribute, value) {
        if (!this.isElementExistsInDom(element)) return;

        element.setAttribute(attribute, value);

        return;
    }

    static removeElementAttribute(element, attribute) {
        if (!this.isElementExistsInDom(element)) return;

        element.removeAttribute(attribute);

        return;
    }

    static toggleErrorMessageInElementSibling(element, message = '') {
        if (!this.isElementExistsInDom(element)) return;

        $(element)
            .siblings('.' + APP_GLOBALS['formMsgErrorsClass'])
            .first()
            .empty()
            .html(message);

        return;
    }

    static displayElementErrorMessage(element, message = '') {
        if (!this.isElementExistsInDom(element)) return;

        let errorMessage = message ? message : element.dataset.errorMessage;

        this.toggleErrorMessageInElementSibling(element, errorMessage);
        this.setElementCss(element, 'border', 'solid 1px #f00');

        return;
    }

    static changeCursorProperty(property) {
        document.body.style.cursor = property;
        return;
    }

    static setElementIdInnerHtml(elementId, innerHtml = '') {
        let element = document.getElementById(elementId);

        this.setElementInnerHtml(element, innerHtml);

        return;
    }

    static setElementInnerHtml(element, innerHtml = '') {

        if (this.isElementExistsInDom(element)) {
            element.innerHTML = innerHtml;
        }

        return;
    }

    static displayResponseMessagges(displayMessages, containerId = null) {
        let elementId = containerId ? containerId :  APP_GLOBALS['mainMsgContainerId'];
        let element = document.getElementById(elementId);
        let html = '';

        if (!this.isElementExistsInDom(element)) return;

        if (Array.isArray(displayMessages) && displayMessages.length) {

            displayMessages.forEach(messageInfo => {
                let alerMessageClass = `alert-${messageInfo['type']}`;
                let message = messageInfo['message'];

                html += `<div class="alert ${alerMessageClass} alert-dismissible" style="padding:12px">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>${message}</strong>
                        </div>`;
            });

            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        this.setElementInnerHtml(element, html);

        return;
    }

    static redirectToLocation(location) {
        let url = APP_GLOBALS['baseUrl'] + location;

        window.location.href = url;

        return;
    }

}
