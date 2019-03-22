@extends('system.layouts.header')
@section('css')
<link href="{{ asset('jscss/dropzone/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="section-heading">NSG Workflows</h3>
            </div>
            <div class="col-2">
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-warning" style="float:right">Logout</button></a>
            </div>
        </div>

        <hr class="hr-line">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified indigo" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Create Workflow</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-envelope"></i> Monitor Workflow</a>
            </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content">

            <!--Panel 2-->
            <div class="tab-pane fade in show active"   id="panel6" role="tabpanel" ng-controller="analytics-workflow-create">
                <br>
                <h4>Create Workflow</h4>

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="job"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Job Name:</label>
                            <input id="job" type="text" class="form-control" placeholder="Job Name" ng-model='jobName'>
                        </div>

                        <div class="form-group">
                            <label for="tools"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Choose a tool (Example: <b>NEURON7.4 on Comet</b>) :</label>
                            <select id="tools" class="form-control" ng-model="selected_tool" ng-change=" " ng-options="obj.toolId as obj.toolName for obj in tools ">
                                <option value="">-- Please select a tool --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="upload"><i class="fa fa-cloud-upload text-primary fa-2x" aria-hidden="true"></i> Upload data ( The maximum number of sample is 1 ). Example input(<a href="{{ asset('storage/app/public/100_Cell_HOC.zip') }}" download>template</a>):</label>
                            <div id="upload" class="dropzone" method="post" enctype="multipart/form-data"></div>
                        </div>

                        <div class="form-group">
                            <label for="job"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Passphrase:</label>
                            <input id="passphrase" type="text" class="form-control" placeholder="Passphrase" ng-model='passPhrase'>
                        </div>

                        <div class="form-group" ng-show="show_run_button" ng-model="show_run_button">
                            <div class="text-center">
                                <button type="button" class="btn btn-warning" ng-click="run_function()">Run</button>
                            </div>
                        </div>

                        <div class="form-group text-center" ng-show="show_alert" ng-model="show_alert">
                            <div class="alert alert-danger" role="alert">
                                <strong>Please choose a tool and upload a data.</strong>
                            </div>
                        </div>
                        <div class="form-group text-center" ng-show="show_run" ng-model="show_run">
                            <div class="alert alert-success" role="alert">
                                <p id="show_run_result">
                                    Your task has been submitted.
                                    <br>
                                    Submit time: @{{ submit_time }}.
                                    <br>
                                    Job ID: <strong>@{{ jobID }}</strong>
                                    <br>
                                    Plase remember this Job ID for monitoring the status.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.Panel 2-->

            <!--Panel 3-->
            <div class="tab-pane fade" id="panel7" role="tabpanel" ng-controller="analytics-workflow-monitor">

                <div class="row">
                    <h4>Job History</h4>
                    <div class="col-md-12">
                        <div class="form-group text-center" ng-show="show_jobs" ng-model="show_jobs">
                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Job ID</th>
                                        <th>Job Name</th>
                                        <th>Submission time</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr ng-repeat="nsg_job in nsg_jobs">
                                        <th scope="row">@{{ $index+1 }}</th>
                                        <td>@{{ nsg_job.job_id }}</td>
                                        <td>@{{ nsg_job.job_name }}</td>
                                        <td>@{{ nsg_job.submitted_time }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </br>
            <hr class="hr-line">

            <div class="row">
                <h4>Monitor Workflow</h4>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="monitor_job"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Input Job ID : </label>
                        <span>&nbsp;&nbsp;</span>
                        <input id="monitor_job" type="text" class="form-control" placeholder="Job ID" ng-model='job_id'>
                    </div>

                    <div class="form-group">
                        <span>&nbsp;&nbsp;</span>
                        <label for="passphrase"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Passphrase : </label>
                        <span>&nbsp;&nbsp;</span>
                        <input id="passphrase" type="text" class="form-control" placeholder="Passphrase" ng-model='passphrase'>
                    </div>

                    <div class="form-group">
                        <span>&nbsp;&nbsp;</span>
                        <button type="button" class="btn btn-warning" ng-click="get_job_status()">Check Status</button>
                    </div>
                </div> 

                <div class="col-md-12">
                    <p>
                    </p>

                    <div class="form-group text-center" ng-show="show_error" ng-model="show_error">
                        <div class="alert alert-danger" role="alert">
                            <strong>@{{ error_message }}</strong>
                        </div>
                    </div>

                    <div class="form-group text-center" ng-show="show_result" ng-model="show_result">
                        <table class="table table-bordered">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Time</th>
                                    <th>Stage</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="message_obj in message_list">
                                    <th scope="row">@{{ $index+1 }}</th>
                                    <td>@{{ message_obj.timestamp }}</td>
                                    <td>@{{ message_obj.stage }}</td>
                                    <td>@{{ message_obj.text }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="form-group" ng-show="transfer" ng-model="transfer">
                        <button type="button" class="btn btn-warning" ng-click="transfer_data()">Transfer backend data to server</button>
                    </div>


                    <div class="form-group" ng-show="loading_icon" ng-model="loading_icon">
                        <img src="{{ asset('jscss/custom/img/circle_loading.gif') }}" style="width:50px"/>
                    </div>

                    <div class="form-group" ng-show="download_button" ng-model="download_button">
                        <a href="@{{ download_result_url }}" class="btn btn-success" role="button">Download</a>

                        <div class="form-group">
                            <label for="result_figure">Result:</label><br>
                            <img id="result_figure" ng-src="@{{ result_image_url }}">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.Panel 3-->

    </div><!-- tab-content -->

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

@endsection