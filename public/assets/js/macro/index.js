$(function () {
    $("#tableMacro").DataTable();
});

$('#editModel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')

    var min_cho = button.data('min_cho')
    var ideal_cho = button.data('ideal_cho')
    var max_cho = button.data('max_cho')

    var min_protien = button.data('min_protien')
    var ideal_protien = button.data('ideal_protien')
    var max_protien = button.data('max_protien')

    var min_fat = button.data('min_fat')
    var ideal_fat = button.data('ideal_fat')
    var max_fat = button.data('max_fat')

    var modal = $(this)

    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #name').val(name);

    modal.find('.modal-body #min_cho').val(min_cho);
    modal.find('.modal-body #ideal_cho').val(ideal_cho);
    modal.find('.modal-body #max_cho').val(max_cho);

    modal.find('.modal-body #min_protien').val(min_protien);
    modal.find('.modal-body #ideal_protien').val(ideal_protien);
    modal.find('.modal-body #max_protien').val(max_protien);

    modal.find('.modal-body #min_fat').val(min_fat);
    modal.find('.modal-body #ideal_fat').val(ideal_fat);
    modal.find('.modal-body #max_fat').val(max_fat);

})

$('#deleteModel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')

    var modal = $(this)
    modal.find('.modal-body #macro_id').val(id);
})
