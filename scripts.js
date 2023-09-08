let theScroller = document.getElementById("the-scroller")

function updateScrollStatus(){
    const windowPos = (window.scrollY / (document.body.clientHeight - window.innerHeight)) * 100;
    if (windowPos <= 100) {
        theScroller.style.width = `${windowPos}%`;
    } else {
        theScroller.style.width = "100%";
    }
}

window.addEventListener("scroll", (event) => {
    updateScrollStatus();
});