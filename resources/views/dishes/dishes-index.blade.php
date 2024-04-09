<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.3.js" type="text/javascript"></script>

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
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                         title="" data-content="And here's some amazing content. It's very engaging. Right?"
                         data-original-title="2003">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1" id="123">2003</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Favland Founded</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                         title="" data-content="And here's some amazing content. It's very engaging. Right?"
                         data-original-title="2004">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">2004</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Launched Trello</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                         title="" data-content="And here's some amazing content. It's very engaging. Right?"
                         data-original-title="2005">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">2005</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Launched Messanger</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                         title="" data-content="And here's some amazing content. It's very engaging. Right?"
                         data-original-title="2010">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">2010</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Open New Branch</p>
                    </div>
                </div>
                <div class="timeline-step mb-0">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                         title="" data-content="And here's some amazing content. It's very engaging. Right?"
                         data-original-title="2020">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">2020</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">In Fortune 500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
            <select class="form-control w-50" name="" id="">
                <option value="">123</option>
            </select>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').select2();

    });
    $('#123').on('click',function (){
        console.log(131);
    });
</script>
