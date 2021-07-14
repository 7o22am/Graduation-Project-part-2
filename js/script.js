$(function () {
    $(".note").on("click", function () {
        $(".popup").fadeIn();
    })

})
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
        $('#dynamic_field').append('<tr id="row' + i + '"><td><div  class="input-group mb-3"><select  name="Day[]" required class="custom-select custom-select-m"><option  selected disabled="disabled">Subject day</option><option value="Sunday">Sun</option><option value="Monday">Mon</option><option value="Tuesday">Tues</option><option value="Wednesday">Wen</option><option value="Thursday">Thrus</option></select></div></td><td><input type="text" name="timee[]" placeholder="Enter your Time" class="form-control name_list" required/></td><td><div class="input-group mb-3"><select name="section[]" required class ="custom-select custom-select-m"><option selected disabled ="disabled">Section Number</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></div></td><td><div class="input-group mb-3"><select name="class[]" required class ="custom-select custom-select-m"><option selected disabled ="disabled">Class</option><option value="L0a">L0a</option><option value="L0b">L0b</option><option value="L0c">L0c</option><option value="L0d">L0d</option><option value="L0e">L0e</option><option value="L1a">L1a</option><option value="L1b">L1b</option><option value="L1c">L1c</option><option value="L1d">L1d</option><option value="L1e">L1e</option><option value="m1a">m1a</option><option value="L2a">L2a</option><option value="L2b">L2b</option><option value="L2c">L2c</option><option value="L2d">L2d</option><option value="L2e">L2e</option><option value="m2a">m2a</option><option value="L3a">L3a</option><option value="L3b">L3b</option><option value="L3c">L3c</option><option value="L3d">L3d</option><option value="L3e">L3e</option><option value="m3a">m3a</option><option value="L4a">L4a</option><option value="L4b">L4b</option><option value="L4c">L4c</option><option value="L4d">L4d</option><op tion value="L4e">L4e</option><option value="m4a">m4a</option><option value="M1">M1</option><option value="M2">M2</option><option value="M3">M3</option><option value="M4">M4</option><option value="M5">M5</option><option value="M6">M6</option><option value="M7">M7</option><option value="M8">M8</option><option value="M9">M9</option></select></div></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });



});