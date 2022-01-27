import Swal from "sweetalert2";

const alert_konfirmasi = Swal.mixin({
    title: "Reset secret key ?",
    text: "Secret key sebelumnya tidak akan valid",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#6c757d",
    confirmButtonText: "Ya, Reset",
    cancelButtonText: "Batal"
});

export default alert_konfirmasi;
// =====
