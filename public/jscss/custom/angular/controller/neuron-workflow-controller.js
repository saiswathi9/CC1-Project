system_app.controller('neuron-workflow-show', function($scope, $http, $window) {






    $scope.run_func = function() {


      if ($("input:radio[name=inj_mod]:checked").val() == 1) {
        var delay = document.getElementById("delay").value;
        var duration = document.getElementById("duration").value;
        var amplitude = document.getElementById("amplitude").value;
        var get_params = {
          id :1,  
          delay : delay,
          duration : duration,
          amplitude : amplitude

        };

      }  
      else if ($("input:radio[name=inj_mod]:checked").val() == 2) {
        var interval = document.getElementById("interval").value;
        var number = document.getElementById("number").value;
        var start = document.getElementById("start").value;
        var noise = document.getElementById("noise").value;
        var get_params = {
          id :2,
          interval : interval,
          number : number,
          noise : noise,
          start : start


        };

      } 


      $http({
        method:'get',
        url:php_upload_input_test,
        params:get_params

      }).then(function success(response, status, headers, config){

           //$scope.tool = response.data.val;
           //console.log(response.data);
           // $window.location.href = "http://" + $window.location.host + "/system/analytics/databworkflow_pageases_page";
            $scope.singlePage4 = false;
            $scope.singlePage5 = true;

        }, function error(response, status, headers, config){

        });


    };

    
    $scope.firstPage = true;
    $scope.networkPage2 = false;
    $scope.networkPage3 = false;
    $scope.networkPage4 = false;
    $scope.networkPage5 = false;
    $scope.networkPage6 = false;
    
    $scope.changeView = function(val){
      if(val == 'firstPage'){
        $scope.firstPage = true;
        $scope.networkPage2 = false;
        $scope.networkPage3 = false;
        $scope.networkPage4 = false;
        $scope.networkPage5 = false;
        $scope.networkPage6 = false;
        
      } else if (val == 'networkView2') {

        $scope.firstPage = false;
        $scope.networkPage2 = true;
        $scope.networkPage3 = false;
        $scope.networkPage4 = false;
        $scope.networkPage5 = false;
        $scope.networkPage6 = false;
        
      } else if (val == 'networkView3') {
        $scope.firstPage = false;
        $scope.networkPage2 = false;
        $scope.networkPage3 = true;
        $scope.networkPage4 = false;
        $scope.networkPage5 = false;
        $scope.networkPage6 = false;
        
      }
      else if (val == 'networkView4') {
        $scope.firstPage = false;
        $scope.networkPage2 = false;
        $scope.networkPage3 = false;
        $scope.networkPage4 = true;
        $scope.networkPage5 = false;
        $scope.networkPage6 = false;
        
      }
      else if (val == 'networkView5') {
        $scope.firstPage = false;
        $scope.networkPage2 = false;
        $scope.networkPage3 = false;
        $scope.networkPage4 = false;
        $scope.networkPage5 = true;
        $scope.networkPage6 = false;
        
      }

      else if (val == 'networkView6') {
        $scope.firstPage = false;
        $scope.networkPage2 = false;
        $scope.networkPage3 = false;
        $scope.networkPage4 = false;
        $scope.networkPage5 = false;
        $scope.networkPage6 = true;
        
      }
      
    }


    
    $scope.singlePage1 = false;
    $scope.singlePage2 = false;
    $scope.singlePage3 = false;
    $scope.singlePage4 = false;
    $scope.singlePage5 = false;
    

    $scope.singlechangeView = function(val){
      if(val == 'firstPage'){
        $scope.firstPage = true;
        $scope.singlePage1 = false;
        $scope.singlePage2 = false;
        $scope.singlePage3 = false;
        $scope.singlePage4 = false;
         $scope.singlePage5 = false;

        
      } else if (val == 'singleView1') {

        $scope.firstPage = false;
        $scope.singlePage1 = true;
        $scope.singlePage2 = false;
        $scope.singlePage3 = false;
        $scope.singlePage4 = false;
         $scope.singlePage5 = false;
        
      } else if (val == 'singleView2') {
        $scope.firstPage = false;
        $scope.singlePage1 = false;
        $scope.singlePage2 = true;
        $scope.singlePage3 = false;
        $scope.singlePage4 = false;
         $scope.singlePage5 = false;
        
        
      }
      else if (val == 'singleView3') {
        $scope.firstPage = false;
        $scope.singlePage1 = false;
        $scope.singlePage2 = false;
        $scope.singlePage3 = true;
        $scope.singlePage4 = false;
         $scope.singlePage5 = false;
        
        
      }
      else if (val == 'singleView4') {
        $scope.firstPage = false;
        $scope.singlePage1 = false;
        $scope.singlePage2 = false;
        $scope.singlePage3 = false;
        $scope.singlePage4 = true;
        $scope.singlePage5 = false;
        
        
      }

      else if (val == 'singleView5') {
        $scope.firstPage = false;
        $scope.singlePage1 = false;
        $scope.singlePage2 = false;
        $scope.singlePage3 = false;
        $scope.singlePage4 = false;
        $scope.singlePage5 = true;
        
        
      }


      
    }


  $scope.show_run_button = true;

    // Get tools list
    $scope.tools = {};
    var get_tools_list_params = {
    };

    $http({
        method:'get',
        url:php_get_job_submit_url,
        params:get_tools_list_params
    }).then(function success(response, status, headers, config){

        $scope.tools = response.data.tool;
    }, function error(response, status, headers, config){
    });

    $scope.func_run = function() {

        file_list_str = input_file_list.join();
        // if( file_list_str == "" || $scope.selected_tool === undefined || !$scope.selected_tool) {
        //     $scope.show_alert = true;
        // }
        // else
        //     $scope.show_alert = false;

        
        var get_run_workflow_params = {
            file_list_str : file_list_str,
            tool : $scope.selected_tool
        };

       
        // dateSubmitted:"2017-11-07T15:53:47-08:00"
        // failed:"false"
        // jobHandle:"NGBW-JOB-BLUEPYOPT_TG-50BC4ACEF9054F68898F74C44D78BF9E"
        // jobStage:"QUEUE"

        $http({
            method:'get',
            url:php_get_job_submit_url,
            params:get_run_workflow_params
        }).then(function success(response, status, headers, config){

            if(response.data != '') {
              
                console.log("Hello");
                $scope.submit_time = response.data.dateSubmitted
                $scope.jobID = response.data.jobHandle
                $scope.show_run = true;

                $scope.show_run_button = false;
            }

        }, function error(response, status, headers, config){
        });

    };

  });