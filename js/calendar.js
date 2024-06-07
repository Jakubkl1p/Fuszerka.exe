document.addEventListener('DOMContentLoaded', () => {
    const daysContainer = document.getElementById('days');
    const monthYear = document.getElementById('month-year');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let date = new Date();

    const renderCalendar = () => {
        date.setDate(1);

        const month = date.getMonth();
        const year = date.getFullYear();

        const firstDayIndex = date.getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();
        const prevLastDay = new Date(year, month, 0).getDate();
        const lastDayIndex = new Date(year, month + 1, 0).getDay();
        const nextDays = 7 - lastDayIndex - 1;

        const months = [
            "Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec",
            "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"
        ];

        monthYear.innerHTML = `${months[month]} ${year}`;

        let days = "";

        for (let x = firstDayIndex - 1; x > 0; x--) {
            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDay; i++) {
            if (i === new Date().getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
                days += `<div class="today">${i}</div>`;
            } else {
                days += `<div>${i}</div>`;
            }
        }

        for (let j = 1; j <= nextDays; j++) {
            days += `<div class="next-date">${j}</div>`;
        }

        daysContainer.innerHTML = days;

        // Add click event to select a day
        document.querySelectorAll('.days div').forEach(day => {
            day.addEventListener('click', (e) => {
                document.querySelectorAll('.days div').forEach(d => d.classList.remove('selected'));
                e.target.classList.add('selected');
            });
        });
    };

    prevButton.addEventListener('click', () => {
        date.setMonth(date.getMonth() - 1);
        renderCalendar();
    });

    nextButton.addEventListener('click', () => {
        date.setMonth(date.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar();
});
