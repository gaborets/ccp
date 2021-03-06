/**
 * Created by Taras Gaborets on 13.11.16.
 */

$(function () {
    jQuery('[data-toggle="collapse"]').collapse();

    var isSendAppointment = false;
    $('.appointment-form').on('submit', function (event) {
        event.stopPropagation();
        isSendAppointment = true;
        var modal = $('#modal-appointment');
        var modalContent = $('#modal-content');
        var form = $(this);
        var msg = form.serialize();

        if(form.hasClass('is-modal')) {
            modalCallBack('hide');
        }

        $.ajax({
            type: 'POST',
            url: '/appointment',
            data: msg
        }).done(function () {
            modalContent.text('').html('Спасибо что оставили заявку, наш оператор свяжется с вами в ближайшее время');
        })
            .fail(function () {
                modalContent.text('').html('Возникла ошибка. Попробуйте еще раз через некоторое время');
            })
            .always(function () {
                modal.modal('show');
                isSendAppointment = false;
                setTimeout(function () {
                    modal.modal('hide');
                }, 5000)
            });

        return false;
    });
});

$(document).ready(function () {
    $(document).on("click", "#nav", function () {
        $(".navigations").addClass("active")
    }), $(document).on("click", "#close-menu", function () {
        $(".navigations").removeClass("active")
    })
});


function modalCallBack(status) {
    $("#call-back").modal(status);
    return true;
}