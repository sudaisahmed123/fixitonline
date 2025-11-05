@extends('layouts.adminworker')
@section('workercontent')
<style>
    /* Container */
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Heading */
    .container h2 {
        font-size: 2rem;
        color: #333;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Review Cards */
    .card {
        border: none;
        border-radius: 10px;
        background-color: #f8f9fa;
        transition: transform 0.2s, box-shadow 0.2s;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 15px;
        text-align: center;
    }

    /* Review Title */
    .card-title {
        font-size: 1.25rem;
        color: #007bff;
        font-weight: 600;
        margin-bottom: 5px;
    }

    /* Review Text */
    .card-text {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 10px;
    }

    /* Reviewer Info */
    .card .text-muted {
        font-size: 0.75rem;
        color: #6c757d;
    }

    /* Rating */
    .rating i {
        font-size: 1rem;
        color: #ffc107;
    }

    /* Image */
    .card-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    /* Grid Layout */
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6 {
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
        padding: 10px;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-text {
            font-size: 0.85rem;
        }

        .rating i {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .rating i {
        font-size: 1.2rem;
    }
</style>
<div class="page-body-wrapper">
    <div class="page-body">
        <div class="container my-5">
            <h2 class="text-center mb-4">Customer Reviews</h2>

            @if($review->isEmpty())
                <p class="text-center">No reviews available at the moment.</p>
            @else
                <div class="row">
                    @foreach($review as $re)
                        <div class="col-md-6">
                            <div class="card mb-4 shadow-sm">
                                <img src="assets/icon/user.png" alt="Review Image" class="card-img">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $re->ReviewName }}</h5>
                                    <p class="card-text">{{ $re->ReviewComment }}</p>
                                    <!-- <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"> {{ $re->name }}</small>
                                    </div> -->
                                    <div class="rating mt-3">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $re->Rating)
                                                <i class="fas fa-star text-warning"></i>
                                            @else
                                                <i class="far fa-star text-warning"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
