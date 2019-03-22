@extends('system.layouts.header')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-heading">MU Symposiums</h3>
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">

                <ul>
                    <li>
                        <a href="{{ route('system.event.second_bigdata_syposium_page') }}">
                            <b>2nd Neuro Big-Data Symposium - December 15, 2017</b>
                        </a>
                        <p></p>
                    </li>

                    <li>
                        <a href="{{ route('system.event.bigdata_syposium_page') }}">
                            <b>1st Neuro Big-Data Symposium - October 6, 2017</b>
                        </a>
                        <p></p>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection
@section('javascript')

@endsection