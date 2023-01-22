// Loading screen
const fakeTimeout = setTimeout(loader, 5000);

function loader() {
    let wrapper = document.getElementById("loader-wrapper");
    wrapper.classList.add('loaded');
}