@extends('system.layouts.header')
@section('css')
<link href="{{ asset('jscss/dropzone/dropzone.css') }}" rel="stylesheet">
<!-- Style sheet for the Chatbot -->
<link rel="stylesheet"  href="{{ asset('jscss/custom/chatbot/chatbot.css') }}">
<!-- end of style sheet for ChatBot -->
@endsection

@section('content')
<div class="container">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Nav tabs -->
<br>
<br>
<br>
<!-- Tab panels -->
  <!--Panel 1-->
   <div  id="panel5" ng-controller="neuron-workflow-show" >


        @include('system.analytics.layouts.firstPage')

       

        <form name="singleNeuron" >
        @include('system.analytics.layouts.singleView1')
        @include('system.analytics.layouts.singleView2')
        @include('system.analytics.layouts.singleView3')
        @include('system.analytics.layouts.singleView4')
        @include('system.analytics.layouts.singleView5')
    </form>


</div>
      <!--/.Panel 1-->
   <div ng-controller="chatbot-controller">
        @include('system.analytics.chatbot')
    </div>   <!--Panel 2-->
      
</div>
@endsection
@section('javascript')
<script>
   var php_get_tools_list_url = '{{ route('system.analytics.api_workflow_get_tools_list') }}';


   var php_get_run_workflow_url = '{{ route('system.analytics.api_workflow_run_workflow') }}';

   var php_get_job_statue_url = '{{ route('system.analytics.api_workflow_get_job_status') }}';
   var php_get_job_result_list_url = '{{ route('system.analytics.api_workflow_get_job_result_list') }}';
   var php_get_backend_data_to_server_url = '{{ route('system.analytics.api_workflow_get_backend_data_to_server') }}';
   
   var php_upload_input_url = '{{ route('system.UploadAPI.uploadWorkflowInput') }}';

   var php_upload_input_test = '{{ route('system.analytics.store_params') }}';
   var php_get_job_submit_url = '{{ route('system.analytics.api_workflow_job_submit') }}';
    
     
</script>
<script src="{{ asset('jscss/dropzone/dropzone.js') }}" type="text/javascript" ></script>
<script src="{{ asset('jscss/custom/theme/js/neurondetails.js') }}" type="text/javascript" defer="defer"></script> 

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


<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<!-- below is the separate js file which has the same above code for the chatbot but for some reason it is not workinng when i use the below file so, for now i have pasterall the js code above on this page -->
<!-- <script src="{{ asset('jscss/custom/chatbot/chatbot.js') }}" type="text/javascript"></script> -->

<script src="{{ asset('jscss/custom/angular/controller/analytics-workflow-controller.js') }}" type="text/javascript" ></script>
<script src="{{ asset('jscss/custom/angular/controller/neuron-workflow-controller.js') }}" type="text/javascript" ></script>
<script type="text/javascript" src="{{ asset('jscss/custom/chatbot/chatbot-angular-controller.js') }}"></script> 

@endsection