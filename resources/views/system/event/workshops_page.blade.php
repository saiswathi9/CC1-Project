@extends('system.layouts.header')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-heading">National Workshops</h3>
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">

                <ul>
                    <li>
                        <a href="{{ route('system.event.workshops.Workshop_2008_NeuroscienceResearchersPage') }}">
                            <b>NSF-sponsored National Workshop on Cyber and Software Automation in Neuroscience</b>
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