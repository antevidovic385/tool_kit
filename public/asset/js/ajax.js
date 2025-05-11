'use strict';

class Ajax {
    static handleServerResponse(responseString, callFunction = null, functionArg = []) {
        let data = JSON.parse(responseString);

        this.updateCsrfToken(data);
        this.disableSendAjaxRequestButtons(false);
        Utility.changeCursorProperty('default');

        if (callFunction) {
            (functionArg.length) ? callFunction(data, ...functionArg) : callFunction(data);
        }

        return;
    }

    static updateCsrfToken(data) {
        let token = document.getElementsByName(APP_GLOBALS['csrfHeader'])[0];

        token.setAttribute('content', data['csrf']['value']);

        return;
    }

    static setCsrfTokenInRequestHeader() {
        let token = document.getElementsByName(APP_GLOBALS['csrfHeader'])[0];

        return {
            [APP_GLOBALS['csrfHeader']] : token.content
        };
    }

    static disableSendAjaxRequestButtons(disabled) {
        let buttons = Array.from(document.getElementsByClassName(APP_GLOBALS['sendAjaxRequestClass']));

        buttons.forEach(button => {
            if (disabled) {
                Utility.setElementAttribute(button, 'disabled', disabled);
            } else {
                Utility.removeElementAttribute(button, 'disabled');
            }
        });

        return;
    }

    static sendRequest(
        url,
        requestType,
        data,
        callFunction = null,
        functionArg = [],
        processData = false,
        contentType = false
    ) {

        this.disableSendAjaxRequestButtons(true);
        Utility.changeCursorProperty('wait');
        Utility.setElementIdInnerHtml(APP_GLOBALS['mainMsgContainerId']);

        let selfAjax = this;

        $.ajax({
            'url': url,
            'data': data,
            'type': requestType,
            'processData': processData,
            'contentType': contentType,
            'headers': selfAjax.setCsrfTokenInRequestHeader(),
            success: function (response) {
                selfAjax.handleServerResponse(response, callFunction, functionArg);
            },
            error: function (err) {
                console.dir(err);
                selfAjax.disableSendAjaxRequestButtons(false);
                Utility.changeCursorProperty('default');
                Utility.setElementIdInnerHtml(APP_GLOBALS['mainMsgContainerId']);
            }
        });

        return;
    }

}
