$(function () {
    $(".note").on("click", function () {
        $(".popup").fadeIn();
    })

    $(".closse").on("click", function () {
        $(".popup").fadeOut();
    })
})
$(document).ready(function () {
    var i = 1;
    $('#add').click(function () {
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="Day[]" placeholder="Enter your Day" class="form-control name_list" /></td><td><input type="text" name="timee[]" placeholder="Enter your Time" class="form-control name_list" /></td><td><input type="text" name="section[]" placeholder="Enter your Section" class="form-control name_list" /></td><td><input type="text" name="class[]" placeholder="Enter your Class" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });



});