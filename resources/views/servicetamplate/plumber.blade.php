@extends('layouts.headerFooter')

@section('content')
<!-- Include DataTables CSS and jQuery -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<style>
   .search-bar {
        margin-bottom: 20px;
    }

    .search-bar input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .services-flex-container {
        display: flex;
        flex-wrap: wrap; /* Ensure items wrap to the next line if necessary */
        justify-content: space-between; /* Adjust as needed for spacing */
        margin: 0 -10px; /* Add negative margin to counteract padding inside items */
    }

    .services-block-five {
        width: calc(33.33% - 20px); /* Adjust width based on your design */
        margin-bottom: 30px; /* Margin between items */
        box-sizing: border-box;
        padding: 0 10px; /* Add padding to each item */
    }

    .services-block-five .inner-box {
        border: 1px solid #e0e0e0; /* Example border styling */
        padding: 20px;
        height: 100%; /* Ensure inner content stretches */
        display: flex;
        flex-direction: column; /* Align content in a column */
    }

    .services-block-five .image {
        flex: 1; /* Grow image section to take available space */
        position: relative;
        overflow: hidden;
    }

    .services-block-five .image img {
        width: 100%;
        height: auto;
    }

    .services-block-five .lower-content {
        padding: 15px 0 0;
    }

    .services-block-five .icon {
        font-size: 32px; /* Example icon size */
        margin-bottom: 10px;
    }

    .services-block-five h3 {
        font-size: 20px; /* Example heading size */
        margin-bottom: 10px;
    }

    .services-block-five .text {
        font-size: 14px; /* Example text size */
        flex: 1; /* Allow text to expand vertically */
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .services-block-five {
            width: calc(50% - 20px); /* Two items per row on medium screens */
        }
    }

    @media (max-width: 768px) {
        .services-block-five {
            width: 100%; /* One item per row on small screens */
        }
    }

    /* DataTables Style */
    .dataTables_wrapper {
        margin-top: 20px;
    }

    .paginate_button {
        padding: 6px 12px;
        margin: 0 4px;
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
    }

    .paginate_button:hover,
    .paginate_button:focus {
        background-color: #0056b3;
        color: #fff;
    }
    

</style>

<section class="services-section-four">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title-two centered">
            <h2>Best Fixit Online Workers</h2>
            <div class="title"><span class="left-separate"></span> What We Do For You <span class="right-separate"></span></div>
            <div class="text">Fixit Online is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home improvement and repair, providing virtually any home repair.</div>
        </div>

        <!-- Custom Search Bar -->
        <div class="search-bar" style="width:400px">
            <input type="text" id="search-input" placeholder="Search for a service... by your location">
        </div>

        <!-- Flexbox Container for Services -->
        <div class="services-flex-container" id="services-cards">
            <!-- Services Blocks -->
            @foreach($wk as $kw)
            <div class="services-block-five">
                <div class="inner-box">
                    <div class="image">
                        <a href="pro/{{ $kw->id }}"><img style="height:250px" src="{{ asset('userimages/'.$kw->profilePic) }}" alt="" /></a>
                        <a href="pro/{{ $kw->id }}" class="read-more">Read More</a>
                    </div>
                    <div class="lower-content">
                        <div style="border-radius:10px" class="icon"><img src="assets/icon/tap.webp" alt=""></div>
                        <h3><a href="pro/{{ $kw->id }}">{{ $kw->Name }}</a></h3>
                    
                        <div class="text">{{ $kw->Bio }}</div>
                        <div class="text"style=" font-weight:700" >Service charges: <span style="color:red; font-weight:700">Rs500</span> </div>
                        <div style="display:none" class="text">{{ $kw->city }}</div>
                        <div style="display:none" class="text">{{ $kw->state }}</div>
                    </div>
                </div>
                <center> <a style="color: #222222; font-size: 16px;font-weight: 400;padding: 8px 20px;padding-left: 15px; background-color:#fda700" href="pro/{{ $kw->id }}" class="read-more">View Profile</a></center>
            </div>
           
            @endforeach
           
           
           
        </div>
        <div class="pagination-container">
            {{ $wk->links('pagination::bootstrap-5') }} 
        </div>
    </div>
   
</section>

<script>
    $(document).ready(function() {
        // Custom search input filter
        $('#search-input').on('keyup', function() {
            var searchValue = $(this).val().toLowerCase();

            // Loop through each card
            $('#services-cards .services-block-five').each(function() {
                // Combine the service name and bio text for searching
                var cardText = $(this).find('h3 a, .text').text().toLowerCase();

                // If the combined text includes the search value, show the card; otherwise, hide it
                if (cardText.includes(searchValue)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

@endsection
