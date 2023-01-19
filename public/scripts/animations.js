const fakeTimeout = setTimeout(loader, 5000);

function loader() {
    let wrapper = document.getElementById("loader-wrapper");
    console.log(wrapper);
    wrapper.classList.add('loaded');
}