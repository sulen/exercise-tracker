<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
flatpickr("#datepicker", {});
flatpickr("#timepicker", {
    noCalendar: true,
    enableTime: true,
    enableSeconds: true,
    dateFormat: 'H:i:S',
    time_24hr: true,
    minuteIncrement: 1,
});
</script>
