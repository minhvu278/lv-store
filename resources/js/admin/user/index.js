$(function () {
    $('.delete-btn').on('click', function () {
        const urlDelete = $(this).data('route'); // Use .data() to get the data attribute value
        $('#deleteUserForm').attr('action', urlDelete); // Update the form's action attribute
    });
});
