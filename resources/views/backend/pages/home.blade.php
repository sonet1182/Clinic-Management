@extends('backend.layouts.master')

@section('content')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Istok+Web:400,700);
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700,900);

        html,
        body {
            background: teal;
        }

        .calendar {
            font-family: "Istok Web", sans-serif;
            width: 200px;
            height: 200px;
            margin: 60px auto;
            background: white;
            box-shadow: 0px 5px 5px #222, -5px 7px 0px 3px #726a57, -12px 13px 2px rgba(0, 0, 0, 0.2);
            position: relative;
            border-radius: 1px;
            /* -moz-transform: rotate(-20deg);
                    -ms-transform: rotate(-20deg);
                    -webkit-transform: rotate(-20deg);
                    transform: rotate(-20deg); */
        }

        .calendar:before {
            content: '';
            position: absolute;
            border-left: 200px solid transparent;
            border-bottom: 30px solid rgba(0, 0, 0, 0.1);
            bottom: 0px;
        }

        .month {
            width: 100%;
            background: linear-gradient(to right, #a32929, #ff6666 75%);
            background: -webkit-linear-gradient(left, #a32929, #ff6666 75%);
            background: -moz-linear-gradient(left, #a32929, #ff6666 75%);
            height: 40px;
            color: white;
            box-shadow: 0px 5px 5px #ddd;
            position: relative;
        }

        .month:before {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            left: 60px;
            top: 5px;
            border-radius: 50%;
            background: #4d0000;
            box-shadow: 60px 0px 0px #4d0000;
        }

        .month:after {
            content: '';
            position: absolute;
            width: 7px;
            height: 20px;
            background: #555;
            border-radius: 20% 20% 0 0;
            left: 62px;
            top: -12px;
            box-shadow: 0px -2px 0px #777, -1px 0px 2px #777, 0px 3px 0px #4d0000, 60px 0px 0px #555, 60px -2px 0px #777;
        }

        .month .month-name {
            padding-left: 10px;
            font-size: 20px;
            letter-spacing: 2px;
            position: absolute;
            bottom: 0;
            text-transform: uppercase;
        }

        .number {
            text-align: center;
            margin-top: -25px;
            font-size: 150px;
            color: #2d2d2d;
            font-weight: 700;
        }

        .two {
            width: 150px;
            height: 150px;
            background: #222;
            margin: 100px auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .caltwo {
            width: 200px;
            margin: 100px auto 0 auto;
            background: #222;
            text-align: center;
            color: #eaeaea;
            position: relative;
            font-family: "Lato", sans-serif;
            text-transform: uppercase;
            padding: 10px 0;
            box-shadow: 2px 5px 2px rgba(0, 0, 0, 0.2);
        }

        .daytwo {
            font-size: 25px;
            letter-spacing: 7px;
            font-weight: 300;
            margin-bottom: -2px;
        }

        .monthtwo {
            font-size: 16px;
            font-weight: 400;
            color: #cc0000;
            letter-spacing: 5px;
            word-spacing: 5px;
        }

        .clock {
            width: 150px;
            height: 30px;
            background: #eaeaea;
            margin: 0 auto;
            line-height: 30px;
            text-align: center;
            box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.2);
        }

        .time {
            display: inline-block;
            margin: 0;
            padding: 0;
            margin-right: -4px;
            font-family: "Lato", sans-serif;
            font-weight: 300;
            color: #666;
            letter-spacing: 5px;
        }

        .meter {
            width: 300px;
            position: relative;
            margin: 80px auto;
            padding-bottom: 5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .meter:before {
            content: '';
            position: absolute;
            width: 1px;
            height: 10px;
            left: 150px;
            top: 0px;
            background: #aaa;
        }

        .meter:after {
            content: "Visual Clock";
            position: absolute;
            top: -20px;
            font-family: "Lato", sans-serif;
            font-weight: 300;
            text-transform: uppercase;
            opacity: 0.3;
            font-size: 12px;
            letter-spacing: 5px;
            color: white;
        }

        .timer {
            margin: 5px 0;
        }

        .hours {
            height: 10px;
            background: #222;
            border-bottom: 1px solid #333;
        }

        .minutes {
            height: 5px;
            width: 1px;
            background: #eaeaea;
            border-bottom: 1px solid #333;
        }

        .minutes:before {
            position: absolute;
            content: '';
            left: 150px;
            width: 1px;
            height: 5px;
            background: #333;
        }

        .seconds {
            height: 2px;
            width: 1px;
            background: #990000;
        }
    </style>

    <div class="row">
        <div class="col-md-8">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $test }}</h3>
                            <p>Total Tests</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('tests.index') }}" class="small-box-footer">Go to <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $package }}</h3>
                            <p>Total Package</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('packages.index') }}" class="small-box-footer">Go to <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $receipt }}</h3>

                            <p>Total Receipt</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('receipts.index') }}" class="small-box-footer">Go to <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="animate__animated animate bounce card">
                        <div class="container mt-3 text-center">
                            <img src="{{ asset('images/receipt.png') }}" class=" " alt="..." height="100px" width="100px">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('receipts.create') }}"
                                class="btn btn-outline-danger mb-1 mt-1 w-100"> <i class="fa fa-plus"></i> Generate Receipt</a>
                        </div>
                    </div>

                </div>


            </div>

        </div>

        <div class="col-md-4">
            <div class='calendar'>
                <div class='day'></div>
                <div class='month'>
                    <div class='month-name'></div>
                </div>
                <div class='number'></div>
            </div>
            <div class='contain'>
                <div class='caltwo'>
                    <div class='daytwo'></div>
                    <div class='monthtwo'></div>
                    <div class='numtwo'></div>
                </div>
                <div class='clock'>
                    <div class='hour time'></div>
                    <div class='min time'></div>
                    <div class='sec time'></div>
                </div>
            </div>
            {{-- <div class='meter'>
                <div class='hours timer'></div>
                <div class='minutes timer'></div>
                <div class='seconds timer'></div>
            </div> --}}
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            var months = ["January", "Februray", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ];
            setInterval(function() {
                var d = new Date();
                var day = d.getDay();
                var day_name = weekdays[day];
                var num = d.getDate();
                var mo = d.getMonth();
                var name = months[mo];
                $(".month-name").html(name.substring(0, 3));
                $(".number").html(num);
                //$(".day").html(day_name);
                $(".monthtwo").html(name + " " + num);
                $(".daytwo").html(day_name);
                var minute = d.getMinutes();
                var hour = d.getHours();
                var sec = d.getSeconds();
                var secMinMeter = 300 / 60;
                $(".hours").css("width", hour * 12.5 + "px");
                if (hour < 10) {
                    $(".hour").html("0" + hour + ":")
                } else if (hour > 12) {
                    hour = hour - 12;
                    if (hour < 10) {
                        $(".hour").html("0" + hour + ":");
                    }
                } else {
                    $(".hour").html(hour + ":");
                }
                if (minute < 10) {
                    $(".min").html("0" + minute + ":");
                    $(".minutes").css("width", minute * 5 + "px");
                } else {
                    $(".min").html(minute + ":");
                    $(".minutes").css("width", minute * 5 + "px");
                }
                if (sec < 10) {
                    $(".sec").html("0" + sec);
                    $(".seconds").css("width", sec * 5 + "px");
                } else {
                    $(".sec").html(sec);
                    $(".seconds").css("width", sec * 5 + "px");
                }
            }, 1000)
        })
    </script>
@endsection
