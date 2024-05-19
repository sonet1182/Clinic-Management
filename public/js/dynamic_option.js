// district
$(document).on("change", "#division_id", function() {
    var value = $(this).val();
    $(".selectDistrict").hide();
    $(".loadingImgDistrict").show();

    $(".selectThana").hide();
    $(".loadingImgThana").show();

    $.ajax({
        type: "get",
        url: '/district-list',
        data:{'id':value},
        dataType: "json",
        success:function(data) {
            var len = data.length;
            $(".loadingImgDistrict").hide();
            $(".selectDistrict").show();
            $(".district").empty();
            $(".district").append("<option value=''>" + 'Select District' + "</option>");

            $(".loadingImgThana").hide();
            $(".selectThana").show();
            $(".thana").empty();
            $(".thana").append("<option value=''>" + 'Select Thana' + "</option>");

            for (var i = 0; i < len; i++) {
                var id = data[i]['id'];
                var name = data[i]['name'];
                $(".district").append("<option value='" + id + "'>" + name + "</option>");
            }
        }
    });

});

// district
$(document).on("change", "#district_id", function() {
    var value = $(this).val();
    $(".selectThana").hide();
    $(".loadingImgThana").show();

    $.ajax({
        type: "get",
        url: '/thana-list',
        data:{'id':value},
        dataType: "json",
        success:function(data) {
            var len = data.length;
            $(".loadingImgThana").hide();
            $(".selectThana").show();
            $(".thana").empty();
            $(".thana").append("<option value=''>" + 'Select Thana' + "</option>");
            for (var i = 0; i < len; i++) {
                var id = data[i]['id'];
                var name = data[i]['name'];
                $(".thana").append("<option value='" + id + "'>" + name + "</option>");
            }
        }
    });

});
