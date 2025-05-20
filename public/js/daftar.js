// Menghilangkan notifikasi sukses secara otomatis setelah 3 detik
document.addEventListener('DOMContentLoaded', function () {
    const notif = document.getElementById('notification');
    if (notif) {
        setTimeout(() => {
            notif.style.display = 'none';
        }, 3000);
    }
});
