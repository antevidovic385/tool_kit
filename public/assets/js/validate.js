'use strict';
class Validate {

    static validateEmail(email) {
        if (email.includes('@')) {
            let pieces = email.split('@');
            if (pieces.length === 2 && pieces[1].includes('.')) {
                return true;
            }
        }
    
        return false;
    }

    static validatePassword(password) {
        return (
            password.length >= APP_GLOBALS['minPasswordLength']
            && !password.includes(' ')
            && /\d/.test(password)
        );
    }

    static validateElement(element) {
        let data = element.dataset;
        let value = (element.type !== 'password') ? element.value.trim() : element.value;
        let minLength = data.hasOwnProperty('minLength') ? parseInt(data.minLength) : null;
        let minValue = data.hasOwnProperty('minValue') ? parseFloat(data.minValue) : null;
        let maxValue = data.hasOwnProperty('maxValue') ? parseFloat(data.maxValue) : null;
        let isEmail = data.hasOwnProperty('isEmail');
        let isPassword = data.hasOwnProperty('isPassword');

        return !(
            (minLength && value.length < minLength)
            || (minValue && minValue > parseFloat(value))
            || (maxValue && maxValue < parseFloat(value))
            || (element.type === 'checkbox' && !element.checked)
            || (isEmail && !this.validateEmail(value))
            || (isPassword && !this.validatePassword(value))
        );
    }
}
