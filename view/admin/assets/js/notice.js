
function showSuccessMessage(message) {
    Swal.fire({
        title: "Başarılı!",
        text: message,
        icon: "success"
    });
}

function showErrorMessage(message) {
    Swal.fire({
        title: "Hata!",
        text: message,
        icon: "error"
    });
}

function showWarningMessage(message) {
    Swal.fire({
        title: "Uyarı!",
        text: message,
        icon: "warning"
    });
}