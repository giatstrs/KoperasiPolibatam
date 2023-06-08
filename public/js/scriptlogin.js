const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");
//   js code to show/hide password and change icon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "password") {
                pwField.type = "text";
                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            } else {
                pwField.type = "password";
                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})

flatpickr("#tgl_masuk_perusahaan", {
    enableTime: true,
    dateFormat: "Y-m-d",
})
flatpickr("#menempati_sejak", {
    enableTime: true,
    dateFormat: "Y-m-d",
})

let status_perkawinan = document.getElementById("status_perkawinan")
let nama_pasangan = document.getElementById("nama_pasangan")
let jumlah_anak = document.getElementById("jumlah_anak")

nama_pasangan.disabled = true;
jumlah_anak.disabled = true;
$(document).on("change", "#status_perkawinan", function () {
    if (status_perkawinan.value == 'belum_menikah') {
        nama_pasangan.disabled = true;
        nama_pasangan.value = '';
        jumlah_anak.disabled = true;
        jumlah_anak.value = '';
        nama_pasangan.required = false;
        jumlah_anak.required = false;
    } else {
        nama_pasangan.disabled = false;
        jumlah_anak.disabled = false;
        nama_pasangan.required = true;
        jumlah_anak.required = true;
    }
})

let butt_login = document.getElementById("butt-login");
let butt_signup = document.getElementById("sign-up");
let modal_login = document.getElementById("modal-login");
let modal_register = document.getElementById("modal-register");
let modal_error = document.getElementById("modal-error");
let butt_tutup = document.getElementById("btn-tutup");
butt_login.addEventListener("click", () => {
    modal_login.style.display = "flex";
})

butt_signup.addEventListener("click", () => {
    modal_register.style.display = 'flex';
})
butt_tutup.addEventListener("click", () => {
    modal_error.style.display = 'none';
})

window.addEventListener("click", (e) => {
    if (e.target == modal_login) {
        modal_login.style.display = 'none';
    } else if (e.target == modal_register) {
        modal_register.style.display = 'none';
    } else if (e.target == modal_error) {
        modal_error.style.display = 'none';
    }
})

$(document).on('submit', '#formLogin', function (e) {
    e.preventDefault();
    var data = {
        email: $('#user_email').val(),
        password: $('#user_password').val(),
    };
    $.ajax({
        url: "/home/login",
        method: "POST",
        dataType: "json",
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            if (response.status == 1) {
                window.location.href = response.redirectUrl;
            } else {
                modal_error.style.display = 'flex';
                $("#pesan-error").html(response.error);
            }
        }
    });
});


