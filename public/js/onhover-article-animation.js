function addBlur(element) {
    console.log(element)
    if(!element.classList.contains('blur')) {
        element.classList.add('blur')
    }
}

function removeBlur(element) {
    if(element.classList.contains('blur')) {
        element.classList.remove('blur')
    }
}

function getAllArticles() {
    return document.querySelectorAll('.card')
}
function highlight(element) {
    let articles = getAllArticles()

    articles.forEach(article => {
        if(article.id !== element.id) {
            addBlur(article)
        } else {
            element.classList.add('flashing')
        }
    });
}

function readjust() {
    let articles = getAllArticles()

    articles.forEach(article => {
            removeBlur(article)
    });
}
/* 
document.addEventListener("DOMContentLoaded", function() {

});
 */