"use strict";
jQuery(function () {
    $(".sweet-confirm").click(function (e) {
        e.preventDefault();
        let form = $(this).parents("form");
        Swal.fire({
            title: "Siz haqiqatdan ham ushbu malumotni o\'chirmoqchimisiz",
            showDenyButton: true,
            icon: "warning",
            confirmButtonText: "Yes!",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: "success",
                    title: "Your work has been changed",
                    showConfirmButton: false,
                });
                setTimeout(() => {
                    form.submit();
                }, 1001);
            }
        });
    });
    $(".sweetalert2").click(function (e) {
        e.preventDefault();
        var id=$(this).children("input").val();

        Swal.fire({
            title: "Siz haqiqatdan ham ushbu malumotni o\'chirmoqchimisiz",
            showDenyButton: true,
            icon: "warning",
            confirmButtonText: "Yes!",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: "success",
                    title: "Your work has been changed",
                    showConfirmButton: false,
                    timer: 1200
                });
                setTimeout(() => {
                    if ($(this).children('.is-active').is("btn-danger ")) {
                        $(this).children('.is-active').removeClass("btn-danger ");
                        $(this).children('.is-active').addClass("btn-primary ");
                        $(this).children('.is-active').html("Active")
                    } else {
                        $(this).children('.is-active').removeClass("btn-primary ");
                        $(this).children('.is-active').addClass("btn-danger ");
                        $(this).children('.is-active').html("Not active ")
                    }
                }, 1001);




                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({

                    url: "/admin/is_active",
                    type: "GET",
                    beforeSend: function () {
                        console.log("s");
                    },
                    data: {
                        'c_id': id
                    },
                    success: function (data) {
                        console.log(data);
                    }

                })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('No response from server');
                    });
            }

        });
    });
});
