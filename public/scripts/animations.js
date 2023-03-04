// Loading screen
const fakeTimeout = setTimeout(loader, 5000);

function loader() {
    let wrapper = document.getElementById("loader-wrapper");
    wrapper.classList.add('loaded');
}


// //hamburger menu
// const hamburger = document.querySelector(".hambuger");
// const navMenu = document.querySelector(".nav-menu");

// console.log(hamburger);

// hamburger.addEventListener("click", () => {
//     hamburger.classList.toggle("active");
//     navMenu.classList.toggle("active");
// })

// calendar from: https://codepen.io/khalidsaifullahfuad/pen/eYEZNzX
var currentMonth = document.querySelector(".current-month");
var calendarDays = document.querySelector(".calendar-days");
var today = new Date();
var date = new Date();


currentMonth.textContent = date.toLocaleDateString("ue-UE", { month: 'long', year: 'numeric' });
today.setHours(0, 0, 0, 0);
renderCalendar();

function renderCalendar() {
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const totalMonthDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const startWeekDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();

    calendarDays.innerHTML = "";

    let totalCalendarDay = 6 * 7;
    for (let i = 0; i < totalCalendarDay; i++) {
        let day = i - startWeekDay;

        if (i <= startWeekDay) {
            // adding previous month days
            calendarDays.innerHTML += `<div class='padding-day'>${prevLastDay - i}</div>`;
        } else if (i <= startWeekDay + totalMonthDay) {
            // adding this month days
            date.setDate(day);
            date.setHours(0, 0, 0, 0);

            let dayClass = date.getTime() === today.getTime() ? 'current-day' : 'month-day';
            calendarDays.innerHTML += `<div class='${dayClass}'>${day}</div>`;
        } else {
            // adding next month days
            calendarDays.innerHTML += `<div class='padding-day'>${day - totalMonthDay}</div>`;
        }
    }
}

document.querySelectorAll(".month-btn").forEach(function (element) {
    element.addEventListener("click", function () {
        date = new Date(currentMonth.textContent);
        date.setMonth(date.getMonth() + (element.classList.contains("prev") ? -1 : 1));
        currentMonth.textContent = date.toLocaleDateString("en-US", { month: 'long', year: 'numeric' });
        renderCalendar();
    });
});

document.querySelectorAll(".btn").forEach(function (element) {
    element.addEventListener("click", function () {
        let btnClass = element.classList;
        date = new Date(currentMonth.textContent);
        if (btnClass.contains("today"))
            date = new Date();
        else if (btnClass.contains("prev-year"))
            date = new Date(date.getFullYear() - 1, 0, 1);
        else
            date = new Date(date.getFullYear() + 1, 0, 1);

        currentMonth.textContent = date.toLocaleDateString("en-US", { month: 'long', year: 'numeric' });
        renderCalendar();
    });
});

// accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}