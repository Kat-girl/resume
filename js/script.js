import {languages} from './lng.js';

const languageSelect = document.querySelector('.language-select');
const allLanguages = ['en', 'ru'];

const changeURLLanguage = () => {
    location.href = window.location.pathname + '#' + languageSelect.value;
    // location.reload();
};

const changeLanguage = () => {
    let hash = window.location.hash;
    hash = hash.substr(1);
    if (!allLanguages.includes(hash)) {
        location.href = window.location.pathname + '#en';
        location.reload();
    }
    languageSelect.value = hash;
    for (let key in languages) {
        document.querySelector('.lng-' + key).innerHTML = languages[key][hash];
    }
};

const translate = () => {
    changeURLLanguage();
    changeLanguage();
};

languageSelect.addEventListener('change', (evt) => {
    evt.preventDefault();
    translate();
});