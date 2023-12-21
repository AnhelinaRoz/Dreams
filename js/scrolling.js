// Получаем значение параметра из GET запроса по его имени
function getParameterByName(name, url) {
    if (!url) {
        url = window.location.href;
    }
    name = name.replace(/[[\]]/g, '\\$&');
    const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
    const results = regex.exec(url);
    if (!results) {
        return null;
    }
    if (!results[2]) {
        return '';
    }
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

// Функция скролла к элементу на основе параметров GET запроса
function scrollToElementFromQueryParams() {
    const elementId = getParameterByName('scroll_block');
    if (elementId) {
        const element = document.getElementById(elementId);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
    // Очищаем все параметры GET
    clearGetParameters();
}

// Функция для очистки всех параметров GET
function clearGetParameters() {
    const cleanURL = window.location.protocol + '//' + window.location.host + window.location.pathname;
    history.replaceState({}, document.title, cleanURL);
}

// Вызываем функцию скролла при загрузке страницы
// window.onload = scrollToElementFromQueryParams;
scrollToElementFromQueryParams();
