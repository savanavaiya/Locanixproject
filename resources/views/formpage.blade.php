<!DOCTYPE html>
<html lang="en">

<head>
    <title>Locanix</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- -------BOOTSTRAP CSS----- -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- ------OWL CAROUSEL CSS-------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- -------------ANIMATION CSS-------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!-- -------CUSTOM CSS----------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body id="custom_scrollbar">

    <div class="bg-light-blue position-relative">
        <div class="page_shape">
            <div class="shape_1_1">
                <img src="{{ asset('assets/images/shape_1.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="doted_shape_1">
                <img src="{{ asset('assets/images/doted_shape_1.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_2_2">
                <img src="{{ asset('assets/images/shape_2_2.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_3_3">
                <img src="{{ asset('assets/images/shape_3_3.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_4_4">
                <img src="{{ asset('assets/images/shape_4_4.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_6_6">
                <img src="{{ asset('assets/images/shape_6_6.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_7_7">
                <img src="{{ asset('assets/images/shape_7_7.png') }}" alt="Locamix" class="img-fluid">
            </div>
            <div class="shape_8_8">
                <img src="{{ asset('assets/images/shape_8_8.png') }}" alt="Locamix" class="img-fluid">
            </div>
        </div>


        <!-- ----------------- -->
        <div class="common-page">
            <div class="container">
                <div class="display-data">
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- -----------JAVASCRIPT FILE------------ -->
    <!-- ------JQUERY----------- -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- -------POPPER JS------ -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- ---------BOOTSTRAP JS----------- -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- --------OWL CAROUSEL --------------- -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- ---------FONT AWESOME 5 ICONS-------- -->
    <script src="{{ asset('assets/js/font-awesome.js') }}"></script>
    <!-- ------ANIMATION JS------ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- ----------CUSTOM JS------------- -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        var serarchdata = ''; 
        var query = '';
        $(document).ready(function() {
    
            load_data(query);
            
            function load_data(query) {
                $.ajax({
                    url: "{{ route('formview') }}?"+query,
                    method: 'GET',
                    data: {
                        serarchdata: serarchdata,
                    },
                    success: function(data) {
                        console.log(data);
                        // alert();
                        $('.display-data').html(data.data);
                    }
                })
            }

            //Search name
            $(document).on('change', '#serarchdata', function() {
                serarchdata = $('#serarchdata').val();
                // console.log(serachdata);
                load_data(query);
            });

            $(document).on('click', '.pagination a',function(event){
                event.preventDefault();
                page=$(this).attr('href').split('page=')[1];
                query = 'page='+page;
                load_data(query);
            });

        });

    </script>

</body>

</html>
