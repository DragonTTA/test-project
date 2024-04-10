<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.3.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
            type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <style>
        body {
            margin-top: 20px;
        }

        .timeline-steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap
        }

        .timeline-steps .timeline-step {
            align-items: center;
            display: flex;
            flex-direction: column;
            position: relative;
            margin: 1rem
        }

        @media (min-width: 768px) {
            .timeline-steps .timeline-step:not(:last-child):after {
                content: "";
                display: block;
                border-top: .25rem dotted #3b82f6;
                width: 3.46rem;
                position: absolute;
                left: 7.5rem;
                top: .3125rem
            }

            .timeline-steps .timeline-step:not(:first-child):before {
                content: "";
                display: block;
                border-top: .25rem dotted #3b82f6;
                width: 3.8125rem;
                position: absolute;
                right: 7.5rem;
                top: .3125rem
            }
        }

        .timeline-steps .timeline-content {
            width: 10rem;
            text-align: center
        }

        .timeline-steps .timeline-content .inner-circle {
            border-radius: 1.5rem;
            height: 1rem;
            width: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #3b82f6
        }

        .timeline-steps .timeline-content .inner-circle:before {
            content: "";
            background-color: #3b82f6;
            display: inline-block;
            height: 3rem;
            width: 3rem;
            min-width: 3rem;
            border-radius: 6.25rem;
            opacity: .5
        }

        .timeline-steps .timeline-content .inner-circle2 {
            border-radius: 1.5rem;
            height: 1rem;
            width: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #3b82f6
        }

        .timeline-steps .timeline-content .inner-circle2:before {
            content: "";
            background-color: #07f610;
            display: inline-block;
            height: 3rem;
            width: 3rem;
            min-width: 3rem;
            border-radius: 6.25rem;
            opacity: .5
        }
    </style>
</head>
<div class="container">
    {{--    <div class="row text-center justify-content-center mb-5">--}}
    {{--        <div class="col-xl-6 col-lg-8">--}}
    {{--            <h2 class="font-weight-bold">A Company Evolution</h2>--}}
    {{--            <p class="text-muted">We’re very proud of the path we’ve taken. Explore the history that made us the company we are today.</p>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step" onclick="step_click(1)">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <div class="inner-circle inner-circle2" id="inner-circle-step-1"></div>
                        <p class="h6 mt-3 mb-1"></p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Step1</p>
                    </div>
                </div>
                <div class="timeline-step" onclick="step_click(2)">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <div class="inner-circle" id="inner-circle-step-2"></div>
                        <p class="h6 mt-3 mb-1"></p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Step2</p>
                    </div>
                </div>
                <div class="timeline-step" onclick="step_click(3)">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <div class="inner-circle" id="inner-circle-step-3"></div>
                        <p class="h6 mt-3 mb-1"></p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Step3</p>
                    </div>
                </div>
                <div class="timeline-step" onclick="step_click(4)">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <div class="inner-circle" id="inner-circle-step-4"></div>
                        <p class="h6 mt-3 mb-1"></p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{route('dishes.store')}}" id="form_create_dishes" method="POST">
    @csrf
<div id="step-1" class="step">
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <label for="">Please Select a meal</label>
                        <select class="form-control select2" name="select_meal" id="select_meal_id">
                            <option value="breakfast">breakfast</option>
                            <option value="lunch">lunch</option>
                            <option value="dinner">dinner</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <label for="">Please Enter Number of people</label>
                        <input data-error-name="số người" class="form-control" type="number" name="number_people"
                               id="number_people_id">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step-2" class="step" hidden>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate">
                <div class="timeline-step">
                    <div class="form-group">
                        <label for="">Please Select a Restaurant</label>
                        <select style="width:100%;" class="form-control select2" name="select_restaurant"
                                id="select_restaurant_id">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step-3" class="step" hidden>
    <div id="select_max_dishes_count" data-value="0"></div>
    <div class="row justify-content-center" id="select_dishes_id">
        <div class="form-group col-2">
            <label for="">Please select a Dish</label>
            <select class="form-control" name="select_dishes[]"
                    id="select_dishes_first_id">
            </select>
        </div>
        <div class="form-group col-2">
            <label for="">Please enter no of serving</label>
            <input data-error-name="số lần phục vụ" value="1" class="form-control w-25" type="number"
                   name="number_dishes[]"
                   id="number_dishes_id">

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-4">
            <a class="btn" id="add-dishes"><i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
</div>

<div class="row step" id="step-4" hidden>
    <div class="row justify-content-center" id="select_dishes_id">
        <div class="form-group col-2">
            <label class="form-control" id="review_meal" for="">Meal : No</label>
            <label class="form-control" id="review_number_people" for="">No of People : 0</label>
            <label class="form-control" id="review_restaurant" for="">Restaurant : No</label>
            <div>
                <label class="form-control" id="review_dishes" for="">Dishes :
                    {{--                <p class="form-control"> A</p>--}}
                    {{--                <p class="form-control"> B</p>--}}
                    {{--                <p class="form-control"> C</p>--}}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mt-2" style="text-align:center" data-aos="fade-up">
            <p class="btn btn-info align-items-center" id="previous_step" data-value="1">Previous</p>
            <p class="btn btn-info align-items-center" id="next_step" data-value="1">Next</p>
        </div>
    </div>
</div>
</form>
@include('notifications')
<script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2();
    });


    //step_click
    function step_click(id, action) {
        $('#next_step').text('Next');
        if (action == 'next') {
            var error = false
            var validate = false
            if (id == 2) {
                validate = validateWithJS(
                    {
                        "number_people_id": 'required|max:10|min:1',
                        "select_meal_id": 'required',
                    },
                )
                var url = 'dishes';
                var method = 'GET';
                var param = {
                    availableMeals: $('#select_meal_id').val(),
                    group_by_restaurant: true
                }
            }
            if (id == 3) {
                validate = validateWithJS(
                    {"select_restaurant_id": 'required'},
                )
                url = 'dishes';
                method = 'GET';
                param = {
                    availableMeals: $('#select_meal_id').val(),
                    restaurant: $('#select_restaurant_id').val(),
                    get_all: true
                }
            }
            if (id == 4) {
                var count_number_dishes = 0;
                var array_name_dishes = []
                $("input[name='number_dishes[]']").each(function () {
                    count_number_dishes = count_number_dishes + parseInt(this.value)
                });

                //Xử lí trùng tên món ăn
                $("select[name='select_dishes[]']").each(function () {
                    if ($.inArray(this.value, array_name_dishes) !== -1) {
                        toastr.error('Món ăn ' + this.value + ' đã được chọn, xin hãy chọn lại!')
                        error = true
                    } else {
                        array_name_dishes.push(this.value)
                    }
                });
                var number_people = $('#number_people_id').val()
                validate = validateWithJS(
                    {
                        "select_dishes_first_id": 'required',
                        // "number_dishes_id": 'required|max:' + number_people,
                    },
                )
                if (count_number_dishes < number_people) {
                    toastr.error('Số lượng thức ăn phải bằng hoặc lớn số người đã chọn')
                    error = true
                }
                if (!error) {
                    $('#next_step').text('Submit');
                    $('#review_meal').text("Meal : " + $('#select_meal_id').val())
                    $('#review_number_people').text("No of People : " + $('#number_people_id').val())
                    $('#review_restaurant').text("Restaurant : " + $('#select_restaurant_id').val())
                    $('#review_dishes').text('Dishes : ')
                    $.each(array_name_dishes, function (i, item) {
                        $('#review_dishes').append('<p class="form-control">' + item + '</p>')
                    })
                }
                url = 'dishes';
                method = 'GET';
                param = {
                    availableMeals: $('#select_meal_id').val(),
                    restaurant: $('#select_restaurant_id').val(),
                    get_all: true
                }
            }
            if(id == 5){
                $('#form_create_dishes').submit()
            }
            if (validate && !error) {
                $('#next_step').attr('data-value', id);
                $('#previous_step').attr('data-value', id);
                $('.step').attr('hidden', 'hidden');
                $('#step-' + id).removeAttr('hidden');
                $('.inner-circle2').attr('class', 'inner-circle');
                $('.inner-circle2').removeClass('inner-circle2');
                $('#inner-circle-step-' + id).attr('class', 'inner-circle2');
                ajaxURL(method, url, param, id)
            }
        } else {
            $('#next_step').attr('data-value', id);
            $('#previous_step').attr('data-value', id);
            $('.step').attr('hidden', 'hidden');
            $('#step-' + id).removeAttr('hidden');
            $('.inner-circle2').attr('class', 'inner-circle');
            $('.inner-circle2').removeClass('inner-circle2');
            $('#inner-circle-step-' + id).attr('class', 'inner-circle2');
        }

    }

    //add dish in step 3
    $('#add-dishes').on('click', function () {
        var check_count_max = $('#select_max_dishes_count').attr('data-value')
        var array_value = [];
        $("select[name='select_dishes[]']").each(function () {
            array_value.push(this.value);
        });
        if (array_value.length >= check_count_max || check_count_max <= 1) {
            toastr.error('Số món có thể đặt tối đa là ' + check_count_max)
        } else {
            $('#select_dishes_id').append('<div class="row justify-content-center" id="select_dishes_id">\n' +
                '        <div class="form-group col-2">\n' +
                '            <label for="">Please select a Dish</label>\n' +
                '            <select class="form-control" name="select_dishes[]"\n' +
                '                    id="select_' + array_value.length + '">\n' +
                '            </select>\n' +
                '        </div>\n' +
                '        <div class="form-group col-2">\n' +
                '            <label for="">Please enter no of serving</label>\n' +
                '            <input data-error-name="số lần phục vụ" value="1" class="form-control w-25" type="number" name="number_dishes[]">\n' +
                '        </div>\n' +
                '    </div>');
            $.each(JSON.parse(localStorage.getItem('dishesListStorage')), function (i, item) {
                $('#select_' + array_value.length).append('<option data-id="' + item.id + '" value="' + item.name + '">' + item.name + '</option>')
            })
        }
    })

    //Function next_step
    $('#next_step').on('click', function () {
        var step_next = parseInt($('#next_step').attr('data-value')) + 1;
        if (step_next >= 1 && step_next <= 5) {
            step_click(step_next, 'next')
        } else {
            toastr.error('Page not found!')
        }
    });

    //Function previous_step
    $('#previous_step').on('click', function () {
        var step_previous = parseInt($('#previous_step').attr('data-value')) - 1;
        if (step_previous < 1 || step_previous > 4) {
            toastr.error('Page not found!')
        } else {
            step_click(parseInt(step_previous), 'previous')
        }

    });

    //Ajax
    function ajaxURL(method, url, param, step) {
        $.ajax({
            url: url,
            method: method,
            data: param,
            success: function (response) {
                if (step == 2) {
                    $("#select_restaurant_id option").each(function () {
                        $(this).remove();
                    });
                    $.each(response['dishesList'], function (i, item) {
                        $('#select_restaurant_id').append($('<option value="' + item.restaurant + '">' + item.restaurant + '</option>'
                        ));
                    });
                }
                if (step == 3) {
                    var count_max_item = 0;
                    $("#select_dishes_first_id option").each(function () {
                        $(this).remove();
                    });
                    localStorage.setItem('dishesListStorage', JSON.stringify(response['dishesList']))
                    $.each(response['dishesList'], function (i, item) {
                        count_max_item++;
                        $('#select_dishes_first_id').append($('<option data-id="' + item.id + '" value="' + item.name + '">' + item.name + '</option>'
                        ));
                    });
                    $('#select_max_dishes_count').attr('data-value', count_max_item)
                }
            },
            error: function (xhr, status, error) {
            }
        });

    }

    //validate
    function validateWithJS(data) {
        var error_validate = false;
        $.each(data, function (field_id, check) {
            var type = check.split('|');
            $.each(type, function (index, type_value) {
                var type_value_check = type_value.split(':')
                if (type_value_check[0] == 'required') {
                    var required = $('#' + field_id).val();
                    var error = $('#' + field_id).attr('data-error-name')
                    if (!required) {
                        toastr.error(error + " không được để trống")
                        error_validate = true;
                    }
                }
                if (type_value_check[0] == 'max') {
                    var max = parseInt($('#' + field_id).val());
                    var error = $('#' + field_id).attr('data-error-name')
                    if (type_value_check[1]) {
                        if (max > parseInt(type_value_check[1])) {
                            error_validate = true;
                            toastr.error(error + ' phải nhỏ hơn hoặc bằng ' + parseInt(type_value_check[1]))
                        }
                    }
                }
                if (type_value_check[0] == 'min') {
                    var min = parseInt($('#' + field_id).val());
                    var error = $('#' + field_id).attr('data-error-name')
                    if (type_value_check[1]) {
                        if (min < parseInt(type_value_check[1])) {
                            error_validate = true;
                            toastr.error('Giá trị ' + error + ' phải lớn hơn ' + parseInt(type_value_check[1]))
                        }
                    }
                }
            })
        });

        return !error_validate;
    }
</script>
