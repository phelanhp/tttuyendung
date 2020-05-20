$('.select2').select2({
    placeholder: "Chọn...",
    allowClear: false
});
$('button[type=reset]').click(function () {
    $('.select2').val('').trigger('change');
});
