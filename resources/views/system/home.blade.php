@extends('system.layouts.header')
@section('content')

<!-- Services -->
<section class="bg-light" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="section-heading">Cyber and Software Automation in Neuroscience</h3>
                <hr class="hr-line">
                <!-- <h3 class="section-subheading"> --> 
                    <p>CyNeuro goal is to spur computational and cyber neuro research at Mizzou and collaborator institutions via: (i) the development of ‘free’ cyber and software big data tools for neuroscience research, and (ii) facilitation of interactions among physical sciences faculty with big data expertise (engineering, math, statistics, physics) and wet-lab, behavioral and clinical neuro faculty with big data ‘needs’. </p>
                    <p></p>
                    <br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  {{--<i class="fa fa-database fa-stack-1x fa-inverse"></i>--}}
                  <i class="fa fa-share-alt fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Use Cases</h4>

              <p style="text-align: justify; padding: 10px;">
                  We are developing cyberinfrastructure tools for addressing emerging needs of big data in neuroscience based on use cases (compute/data intensive) identified through user surveys at MU. CyNeuro currently features some of the use cases for deploying cyberinfrastructure to faciliate use and evaluation of the tools in the broader community. <a target="_blank" class="text-addition_primary" href="https://figshare.com/articles/Nair_Calyam_NeuroCI_Course_Gateways_2018_pdf/7070249">Read more.</a>
              </p>
            </div>

            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Workflows/Data</h4>
              <p style="text-align: justify; padding: 10px;">
                CyNeuro hosts exemplar workflows and data sets that we are developing for exploring the potential of cyber and software automation in neuroscience. We are connecting to and leveraging local MU resources, as well as Neuroscience Gateway resources to scale research productivity, and develop large-scale training platforms. <a class="text-addition_primary" href="{{ route('system.analytics.workflow_templates') }}">Read more.</a>
              </p>
            </div>

        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-database fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Training Content</h4>
          <p style="text-align: justify; padding: 10px;">
          CyNeuro hosts training modules that are by-products from student-driven projects at MU in a course on "Cyber and Software Automation in Neuroscience". NSF and NIH sponsored training program needs are being met through the training content development and online dissemination using Jupyter Notebooks. 
          <a class="text-addition_primary" href="{{ route('system.analytics.training_content') }}">Read more.</a>
          </p>
        </div>
      </div>
    </div>
</section>

    <!-- 
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-heading">Upcoming events</h3>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <div class="col-md-6 text-right">
                    <button id="close-image">
                        <img src="{{ asset('jscss/custom/img/event.kickoff.logo.png') }}" width="150" height="150">
                    </button>
                </div>
                <div class="col-md-6">
                    <a class="text-addition_primary" href="{{ route('system.event.second_bigdata_syposium_page') }}"><b>2nd Neuro Big-data Symposium</b></a>
                    <p>December 15, 2017, Friday in 572 Life Sciences Center</p>
                    <br><br>
                    <a href="{{ route('system.event.second_bigdata_syposium_page') }}" class="btn btn-warning" role="button">Click here to Register</a>
                    {{--<small>--}}
                        {{--To spur computational and cyber neuro research at Mizzou via (i) the development of ‘free’--}}
                        {{--cyber and software big data tools for neuroscience research, and (ii) facilitation of--}}
                        {{--interactions among physical sciences faculty with big data expertise (engineering, math,--}}
                        {{--statistics, physics) and wet-lab, behavioral and clinical neuro faculty with big data ‘needs’.--}}
                    {{--</small>--}}
                </div>
            </div>
        </div>
    </section>
-->



@endsection

@section('javascript')


@endsection