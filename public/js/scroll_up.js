let scroll_button = document.getElementById("scrollBtn");

window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.documentElement.scrollTop > 500) {
        scroll_button.style.display = "block";
    } else {
        scroll_button.style.display = "none";
    }
}
