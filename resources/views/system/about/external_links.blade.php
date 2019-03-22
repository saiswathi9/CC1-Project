@extends('system.layouts.header')
@section('content')

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Related Projects</h2>
                    <hr class="hr-line">
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a class="portfolio-link"  href="https://www.nsgportal.org/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/related_projects/nsg.png') }}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>NSGportal</h4>
                        <p class="text-muted">The NSG provides an administratively and technologically streamlined environment for uploading models, specifying HPC job parameters, querying running job status, receiving job completion notices, and storing and retrieving output data. </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a class="portfolio-link" href="https://www.humanbrainproject.eu/en/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/related_projects/hbp.png') }}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Human Brain Project </h4>
                        <p class="text-muted">The Human Brain Project is a H2020 FET Flagship Project which strives to accelerate the fields of neuroscience, computing and brain-related medicine.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a class="portfolio-link" href="http://www.cyverse.org/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/related_projects/cyverse.png') }}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>CyVerse </h4>
                        <p class="text-muted">CyVerse is funded by the National Science Foundation’s Directorate for Biological Sciences. It is a dynamic virtual organization led by the University of Arizona to fulfill a broad mission</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a class="portfolio-link" href="https://www.xsede.org/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/related_projects/xsede.png') }}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>XSEDE </h4>
                        <p class="text-muted">XSEDE is a single virtual system that scientists can use to interactively share computing resources, data and expertise. </p>
                    </div>
                </div>



                {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                    {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">--}}
                        {{--<div class="portfolio-hover">--}}
                            {{--<div class="portfolio-hover-content">--}}
                                {{--<i class="fa fa-plus fa-3x"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="portfolio-caption">--}}
                        {{--<h4>Southwest</h4>--}}
                        {{--<p class="text-muted">Website Design</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                    {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">--}}
                        {{--<div class="portfolio-hover">--}}
                            {{--<div class="portfolio-hover-content">--}}
                                {{--<i class="fa fa-plus fa-3x"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="portfolio-caption">--}}
                        {{--<h4>Window</h4>--}}
                        {{--<p class="text-muted">Photography</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{----}}

            </div>
        </div>
    </section>


@endsection