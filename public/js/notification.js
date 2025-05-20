document.addEventListener("DOMContentLoaded", function () {
  // Jika ada element notifikasi statis (misalnya dari session), biarkan ia fade out setelah beberapa detik.
  const staticNotif = document.getElementById("notification");
  if (staticNotif) {
    setTimeout(() => {
      staticNotif.classList.add("hide");
    }, 3000);
  }

  // Validasi form booking: jika field wajib tidak diisi, munculkan notifikasi dan cegah submit.
  const bookingForm = document.getElementById("booking-form");
  if (bookingForm) {
    bookingForm.addEventListener("submit", function (e) {
      // Ambil field yang wajib: name, phone, appointment_time, service.
      const name = document.getElementById("name");
      const phone = document.getElementById("phone");
      const appointmentTime = document.getElementById("appointment_time");
      const service = document.getElementById("service");

      if (
        !name.value.trim() ||
        !phone.value.trim() ||
        !appointmentTime.value.trim() ||
        !service.value.trim()
      ) {
        e.preventDefault();
        showNotification("Form harus diisi semua!", "error");
      }
    });
  }
});

// Fungsi untuk membuat notifikasi secara dinamis.
function showNotification(message, type = "success") {
  let container = document.getElementById("notification-container");
  if (!container) {
    container = document.createElement("div");
    container.id = "notification-container";
    document.body.appendChild(container);
  }
  const notif = document.createElement("div");
  notif.classList.add("notification", type);
  notif.textContent = message;
  container.appendChild(notif);

  // Setelah 3 detik, notif akan menghilang.
  setTimeout(() => {
    notif.classList.add("hide");
    setTimeout(() => {
      notif.remove();
    }, 600);
  }, 3000);
}