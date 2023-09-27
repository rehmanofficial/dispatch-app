function updateTime() {
    const timezoneSelect = document.getElementById("timezone");
    const selectedTimezone = timezoneSelect.value;

    const options = { timeZone: selectedTimezone, timeStyle: "long", hour12: false };
    const currentTime = new Date().toLocaleTimeString([], options);

    const timeElement = document.getElementById("time");
    timeElement.textContent = currentTime;
}

updateTime(); // Initialize with the current time
