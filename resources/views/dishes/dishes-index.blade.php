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
                        <p class="h6 text-muted mb-0 mb-lg-0">Step4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step-1" class="step">
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <label for="">Please Select a meal</label>
                        <select class="form-control" name="select_meal" id="select_meal_id">
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
                        <input class="form-control" type="number" name="number_people" id="number_people_id">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step-2" class="step" hidden>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <label for="">Please Select a Restaurant</label>
                        <select style="width:100%;" class="form-control col-6" name="select_restaurant" id="select_restaurant_id">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step-3" class="step" hidden>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <label for="">Please Enter Number of people</label>
                        <input class="form-control" type="number" name="number_people" id="number_people_id">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row step" id="step-4" hidden>
    <div class="col">
        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
            <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                    <label for="">Please Enter Number of people</label>
                    <input class="form-control" type="number" name="number_people" id="number_people_id">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
            <p class="btn btn-info align-items-center" id="next_step" data-value="1">Next</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "user": {
                    required: true,
                    maxlength: 15
                },
                "password": {
                    required: true,
                    minlength: 8
                },
                "re-password": {
                    equalTo: "#password",
                    minlength: 8
                }
            }
        });
        $('select').select2();

    });

    function step_click(id) {
        $('#next_step').attr('data-value', id);
        $('.step').attr('hidden', 'hidden');
        $('#step-' + id).removeAttr('hidden');
        $('.inner-circle2').attr('class', 'inner-circle');
        $('.inner-circle2').removeClass('inner-circle2');
        $('#inner-circle-step-' + id).attr('class', 'inner-circle2');
        if (id == 2) {
            var url = 'dishes';
            var method = 'GET';
            var param = {
                availableMeals: "lunch",
                get_all: true
            }
        }
        ajaxURL(method, url, param)
    }

    $('#next_step').on('click', function () {
        var error = false
        var step_next = $('#next_step').attr('data-value');
        if (step_next == 1) {
            var validate = validateWithJS(
                {"number_people_id": 'required'},
                {"select_meal_id": 'required'},
            )
            var number_people = $('#number_people_id').val();
            if (parseInt(number_people) > 10 || parseInt(number_people) < 0) {
                error = true;
                toastr.error('Số lượng người phải nằm trong khoảng từ 1 đến 10')
            }
        }
        if (validate && !error) {
            step_click(parseInt(step_next) + 1)
        }

    });

    function ajaxURL(method, url, param) {
        $.ajax({
            url: url,
            method: method,
            data: param,
            success: function (response) {
                $.each(response['dishesList'], function (i, item) {
                    console.log(i,item);
                    $('#select_restaurant_id').append($('<option value="'+item.id+'">'+item.restaurant+'</option>'

                    ));
                });
            },
            error: function (xhr, status, error) {
            }
        });

    }

    function validateWithJS(data) {
        var check_result = false;
        $.each(data, function (field_id, check) {
            if (check == 'required') {
                var required = $('#' + field_id).val();
                if (!required) {
                    toastr.error('Xin vui lòng nhập đủ thông tin')
                } else {
                    check_result = true;
                }
            }
            if (check == 'max') {
                var required = $('#' + field_id).val();
                if (!required) {
                    toastr.error('Xin vui lòng nhập đủ thông tin')
                } else {
                    check_result = true;
                }
            }
        });
        return check_result;
    }
</script>
