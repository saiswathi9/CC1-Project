@extends('system.layouts.header')
@section('css')
<link href="{{ asset('jscss/dropzone/dropzone.css') }}" rel="stylesheet">
<link href="{{ asset('jscss/custom/chatbot/chatbot.css') }}" rel="stylesheet">
@endsection
@section('content')


<section>
    <div class="container">

        <div class="row">
            <div class="col-10">
                <h3 class="section-heading">Neuron Workflows</h3>
            </div>
            <div class="col-2">
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-warning" style="float:right">Logout</button></a>
            </div>
        </div>

        <hr class="hr-line">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <div class="row">
            
            <div class="col-md-12">

                <h4>Introduction</h4>
                
                {{--<div style="background:transparent !important ; display: block" class=" jumbotron">--}}
                    <div class="row">
                        <div class="col-md-4">
                            <input type="image" name="image1"
                            src="{{ asset('jscss/custom/theme/img/CyNeuroUI/Neuron.jpg') }}"
                            alt="Neuron" value='2' width="300" height="200"  onclick="show_content(this.value)">
                            <p style="font-weight: bold !important" class="text-center"> NEURON </p>
                        </div>
                        <div class="col-md-4">
                            <input type="image" name="image1"
                            src="{{ asset('jscss/custom/theme/img/CyNeuroUI/fmri.jpg') }}" alt="FMRI"
                            value='1' width="300" height="200"  onclick="show_content(this.value)">
                            <p style="font-weight: bold !important" class="text-center"> FMRI </p>
                        </div>
                        <div class="col-md-4">
                            <input type="image" name="image1"
                            src="{{ asset('jscss/custom/theme/img/CyNeuroUI/wgcna.jpg') }}"
                            alt="WGCNA" value='3' width="300" height="200" onclick="show_content(this.value)">
                            <p style="font-weight: bold !important" class="text-center"> WGCNA </p>
                        </div>
                    </div>
                {{--</div>--}}
            </div>
        </div><!-- row -->


        <div id="selection2">
            <div class = "row" style="display: block">
                <div class="col-md-12">
                    <h3>NEURON</h3>
                    <p>A neuron is an electrically excitable cell that receives, processes, and transmits information through electrical and chemical signals. These signals between neurons occur via specialized connections called synapses. Neurons can connect to each other to form neural networks. Neurons are major components of the brain and spinal cord of the central nervous system, and of the autonomic ganglia of the peripheral nervous system.
                    </p>
                </div>
            </div><!-- row -->

            <div class = "row justify-content-md-center">
                <div class="col-sm-auto">
                    <label><input id="first" ng-checked="true" type="radio" name="neuronradio" ng-model="content" value="first">&nbsp;Single Neuron &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <label><input id="second" type="radio" name="neuronradio" ng-model="content" value="second">&nbsp;Network Neuron</label>
                </div>
            </div><!-- row -->
        </br>


        <div class="row">
            <div class = "col-md-12" ng-hide="content == 'second'">
                <h4>
                    Single Workflow Details:
                </h4>
                <p>
                    This workflow will guide you through requirements gathering, execution, and visualization of a single neural simulation. It involves following steps and each step will be accomplished by a corresponding app.
                </p>
                <dl>
                    <dt>Collecting length</dt>
                    <dd>Collecting Soma length & diameter.</dd>
                    <dd>Collecting Dendri length</dd>
                    <dt>Choose Channels</dt>
                    <dd>Selecting Sodium, Potassium and Calcium.</dd>
                    <dt>Choosing voltage and current</dt>
                    <dd>Membrane voltage and current.</dd>
                </dl>

            </div>
        </div><!-- row -->

        <div class="row">
            <div class = "col-md-12" ng-show="content == 'second'">
                <h4>
                    Network Workflow Details:
                </h4>
                <p>
                    This tool will guide you through the creation, execution, and visualization of a neural simulation. It involves following steps and each step will be accomplished by a corresponding app.
                </p>
                <dl>
                    <dt>Pre-processing</dt>
                    <dd>Adjust the neuron types, morphology, connectivity, and weights using the "Pre-processing" app.</dd>
                    <dt>NEURON Simulation</dt>
                    <dd>Then execute the model on HPC resources using the "Neuron" app.</dd>
                    <dt>Visulization</dt>
                    <dd>Finally, visualize your results using the "Visualization" App.</dd>
                </dl>
            </div>
        </div><!-- row -->
    </div><!-- selection2 -->




    <div class = "row" style="display: none;" id="selection1">
        <div class="col-md-12">
            <h3>FMRI</h3>
            <p>Functional magnetic resonance imaging or functional MRI (fMRI) measures brain activity by detecting changes associated with blood flow. This technique relies on the fact that cerebral blood flow and neuronal activation are coupled. When an area of the brain is in use, blood flow to that region also increases</p>
        </div>
    </div><!-- row -->

    <div class = "row" style="display: none" id="selection3">
        <div class="col-md-12">
            <h3>WGCNA </h3>
            <p>Weighted correlation network analysis, also known as weighted gene co-expression network analysis (WGCNA), is a widely used data mining method especially for studying biological networks based on pairwise correlations between variables. While it can be applied to most high-dimensional data sets, it has been most widely used in genomic applications. It allows one to define modules (clusters), intramodular hubs, and network nodes with regard to module membership, to study the relationships between co-expression modules, and to compare the network topology of different networks.</p>
        </div>
    </div><!-- row -->


    <div ng-controller="chatbot-controller">
        @include('system.analytics.chatbot')
    </div>
</div><!-- container -->
</section>

@endsection
@section('javascript')

<script>
    var php_get_tools_list_url = '{{ route('system.analytics.api_workflow_get_tools_list') }}';
    var php_get_run_workflow_url = '{{ route('system.analytics.api_workflow_run_workflow') }}';
    var php_get_job_statue_url = '{{ route('system.analytics.api_workflow_get_job_status') }}';
    var php_get_job_result_list_url = '{{ route('system.analytics.api_workflow_get_job_result_list') }}';
    var php_get_backend_data_to_server_url = '{{ route('system.analytics.api_workflow_get_backend_data_to_server') }}';
    var php_upload_input_url = '{{ route('system.UploadAPI.uploadWorkflowInput') }}';

    var php_check_job_passphrase_url = '{{ route('system.analytics.api_workflow_check_passphrase') }}';
    var php_get_nsg_jobs_url = '{{ route('system.analytics.api_workflow_get_nsg_jobs') }}';

    function show_content(value) {
        if(value == 1) {
            $("#selection1").show();
            $("#selection2").hide();
            $("#selection3").hide();
        }
        else if(value == 2) {
            $("#selection1").hide();
            $("#selection2").show();
            $("#selection3").hide();
        }
        else if(value == 3) {
            $("#selection1").hide();
            $("#selection2").hide();
            $("#selection3").show();
        }
    }
</script>


<script src="{{ asset('jscss/dropzone/dropzone.js') }}" type="text/javascript" ></script>

<script>
    var input_file_list = [];
    Dropzone.autoDiscover = false;
    var upload_dropz = new Dropzone("#upload", {
        url: php_upload_input_url,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        addRemoveLinks: false,
        maxFiles: 1,
        maxFilesize: 1024*2,
        acceptedFiles: ".txt,.fasta,.gz,.zip,.rar,.tar",
        dictDefaultMessage: "Drop files here or click to upload (Accepted files: .txt,.fasta,.gz,.zip,.rar,.tar)",
        success : function(file, response){
            console.log(response);
            if(response !== '') {
                input_file_list.push(response);
            }
        }
    });
</script>

<script src="{{ asset('jscss/custom/angular/controller/analytics-workflow-controller.js') }}" type="text/javascript" ></script>

<script type="text/javascript" src="{{ asset('jscss/custom/chatbot/chatbot-angular-controller.js') }}"></script> 

@endsection