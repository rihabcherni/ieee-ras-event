document.addEventListener('DOMContentLoaded', function() {
    function updateTimer() {
        const now = new Date().getTime();
        const eventDate = new Date('November 10, 2026 00:00:00').getTime();
        const distance = eventDate - now;

        if (distance < 0) {
            clearInterval(timerInterval);
            document.querySelector('.countdown').innerHTML = '<h1>Event Started</h1>';
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        const dayPercent = (days / 365) * 100;
        const hourPercent = (hours / 24) * 100;
        const minutePercent = (minutes / 60) * 100;
        const secondPercent = (seconds / 60) * 100;

        document.getElementById('days').querySelector('.numb').innerText = days;
        document.getElementById('days').querySelector('.circle').style.background = `conic-gradient(#8d008a ${dayPercent}%, #ddd ${dayPercent}%)`;

        document.getElementById('hours').querySelector('.numb').innerText = hours;
        document.getElementById('hours').querySelector('.circle').style.background = `conic-gradient(#8d008a ${hourPercent}%, #ddd ${hourPercent}%)`;

        document.getElementById('minutes').querySelector('.numb').innerText = minutes;
        document.getElementById('minutes').querySelector('.circle').style.background = `conic-gradient(#8d008a ${minutePercent}%, #ddd ${minutePercent}%)`;

        document.getElementById('seconds').querySelector('.numb').innerText = seconds;
        document.getElementById('seconds').querySelector('.circle').style.background = `conic-gradient(#8d008a ${secondPercent}%, #ddd ${secondPercent}%)`;
    }

    const timerInterval = setInterval(updateTimer, 1000);
    updateTimer();
});
