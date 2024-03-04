var tb = `<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">JUMPMAN HAVEN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Cám ơn bạn đã liên hệ. Chúng tôi sẽ sớm liên hệ với bạn!
                    </div>
                </div>
            </div>
        </div>`
// Plugin jQuery Validation:
$.validator.setDefaults({
    submitHandler: function () {
        // document.getElementById("abc").innerHTML = tb
    }
})
$(document).ready(function () {
    $("#contact").validate({
        rules: {
            name_contact: "required",
            email: {
                required: true,
                email: true
            },
            notes: "required"
        },
        messages: {
            name_contact: "Bạn chưa nhập vào họ và tên của bạn",
            email: "Hộp thư điện tử không hợp lệ!!!",
            notes: "Bạn phải chưa nhập lời nhắn cho chúng tôi"
        },

        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid - feedback");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.siblings("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is - invalid").removeClass("is - valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is- valid").removeClass("is-invalid");
        },
    });
});
// Tương Tác với Modal
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})