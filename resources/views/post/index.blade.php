<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Try it your self</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <style>
        body {
            background: #ededed;
        }

        .table_outer {
            padding: 20px 0;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .card {
            border-radius: .5rem;
        }

        .custom_table tbody .persons {
            padding: 0;
            margin: 0;
        }

        .custom_table tbody .persons li {
            padding: 0;
            margin: 0 0 0 -15px;
            list-style: none;
            display: inline-block;
        }

        .custom_table tbody .persons li a {
            display: inline-block;
            width: 36px;
        }

        .custom_table tbody .persons li a img {
            border-radius: 50%;
            max-width: 100%;
        }


        .custom_table tbody .persons.single li a {
            margin-left: 7px;
        }

        table button.btn {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            padding: 0px !important;
        }

        table .remove_tr {
            box-shadow: 0 0 20px 0 rgba(255, 0, 0, .5);
            border: 2px solid rgba(255, 0, 0, 1);
        }
    </style>
</head>

<body>
    <section class="table_outer">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-0 shadow">
                        <div
                            class="card-header with-border d-flex justify-content-start align-items-center media_card_header">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 p-0">
                                        <div>
                                            <button class="btn btn-warning " id="multi_delete_post">Delete
                                                Selected</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8 p-0 d-flex justify-content-end">
                                        <form class="row">
                                            <div class="col px-1">
                                                <select class="form-control w-100" id="ch_status">

                                                    <option value="" {{ $status === null ? 'selected' : '' }}>
                                                        Select
                                                        Status</option>
                                                    <option value="1" {{ $status === '1' ? 'selected' : '' }}>
                                                        Active
                                                    </option>
                                                    <option value="0" {{ $status === '0' ? 'selected' : '' }}>
                                                        InActive
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col px-1">
                                                <select class="form-control w-100" id="show_item_at_once">
                                                    <option value="0">Select to show item</option>
                                                    <option value="10" {{ $show_result == 10 ? 'selected' : '' }}>
                                                        Show 10
                                                    </option>
                                                    <option value="20" {{ $show_result == 20 ? 'selected' : '' }}>
                                                        Show 20
                                                    </option>
                                                    <option value="40" {{ $show_result == 40 ? 'selected' : '' }}>
                                                        Show 40
                                                    </option>
                                                    <option value="80" {{ $show_result == 80 ? 'selected' : '' }}>
                                                        Show 80
                                                    </option>
                                                    <option value="120" {{ $show_result == 120 ? 'selected' : '' }}>
                                                        Show 120
                                                    </option>
                                                    <option value="200" {{ $show_result == 200 ? 'selected' : '' }}>
                                                        Show 200
                                                    </option>
                                                    <option value="300" {{ $show_result == 300 ? 'selected' : '' }}>
                                                        Show 300
                                                    </option>
                                                    <option value="500" {{ $show_result == 500 ? 'selected' : '' }}>
                                                        Show 500
                                                    </option>
                                                    <option value="all"
                                                        {{ $show_result == 'all' ? 'selected' : '' }}>
                                                        Show All
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col px-1">
                                                <input type="search" class="form-control w-100" placeholder="Search..."
                                                    name="s_query" id="s_query" value="{{ $s_query ?? '' }}">
                                            </div>
                                            <div class="col ps-1">
                                                <button class="btn btn-primary w-100" type="button" id="filter_btn">Apply
                                                    Filter</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-borderless custom_table">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="select_all" />
                                                </div>
                                            </th>
                                            <th scope="col">Title
                                            </th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">feature Image</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($post as $item)
                                            <tr class="">
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkbox" type="checkbox"
                                                            value="" id="flexCheckDefault1"
                                                            data-id="{{ $item->id }}"
                                                            value="{{ $item->id }}" />
                                                    </div>
                                                </th>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    {{ $item->description }}
                                                </td>

                                                <td> {{ $item->status }}</td>
                                                <td>
                                                    <ul class="persons single">
                                                        <li>
                                                            <a href="#">
                                                                <img src="https://picsum.photos/id/64/100/100"
                                                                    alt="Person" class="img-fluid">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm px-2">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm px-2">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm px-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example">
                                {{ $post->links('pagination::bootstrap-5') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $("#multi_delete_post").on("click", function(e) {
            var checkbox = $('.checkbox');
            var idsArr = [];
            $(".checkbox:checked").each(function() {
                idsArr.push($(this).attr("data-id"));
            });
            console.log(idsArr);
            if (idsArr.length <= 0) {
                alert("Please select atleast one record to delete.");
            } else {
                if (confirm(
                        "You are about to permanently delete these items from your site.\nThis action cannot be undone\n'Cancel' to stop, 'OK' to delete."
                    )) {
                    var strIds = idsArr.join(",");
                    $.ajax({
                        url: "{{ route('post.delete_multipost') }}",
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                        },
                        data: "ids=" + strIds,
                        success: function(data) {
                            if (data["status"] == true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").addClass(
                                        "remove_tr").fadeOut("slow");
                                });
                                //alert(data["message"]);
                                toastr.success(data.message);
                            } else {
                                alert(
                                    "Whoops Something went wrong!! \nPlease try again later..."
                                );
                                toastr.warning(data.message2);
                            }
                        },
                        error: function(data) {
                            alert(data.responseText);
                        },
                    });
                }
            }
        });


        function submit_post_filter() {
            var appUrl = {!! json_encode(url('/')) !!};
            // var s_query = '0';
            // var show_item_at_once = 0;
            // var ch_status = '3';
            var s_query = $('#s_query').val();
            var show_item_at_once = $('#show_item_at_once').val();
            var ch_status = $('#ch_status').val();
            console.log(show_item_at_once);

            if (s_query != '') {
                s_query = s_query;
            } else {
                s_query = '0';
            }

            if (show_item_at_once != '0') {
                show_item_at_once = show_item_at_once;
            } else if (show_item_at_once == '0') {
                show_item_at_once = 0;
            } else {
                show_item_at_once = 'all';
            }

            if (ch_status != '') {
                ch_status = ch_status;
            } else {
                ch_status = '3';
            }


            window.location.href = appUrl + '/posts/' + ch_status + '/' + show_item_at_once + '/' +
                s_query;
            // if (s_query != '0' || show_item_at_once == 0 || ch_status != '3') {

            // } else {
            //     window.location.href = appUrl + '/posts';
            // }
        }

        $(document).ready(function() {
            $('#filter_btn').click(function() {
                submit_post_filter();
            });

        });
        $(document).ready(function() {
            // Select/deselect all checkboxes
            $('#select_all').click(function() {
                if ($(this).is(':checked')) {
                    $('.checkbox').prop('checked', true);
                } else {
                    $('.checkbox').prop('checked', false);
                }
            });

            // If all checkboxes are selected, select the top checkbox
            $('.checkbox').click(function() {
                if ($('.checkbox:checked').length === $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            });
        });
    </script>
</body>

</html>
