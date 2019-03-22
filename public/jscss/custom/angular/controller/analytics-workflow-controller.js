
system_app.controller('analytics-workflow-create', function($scope, $http) {

    $scope.show_run_button = true;

    // Get tools list
    $scope.tools = {};
    var get_tools_list_params = {
    };

    $http({
        method:'get',
        url:php_get_tools_list_url,
        params:get_tools_list_params
    }).then(function success(response, status, headers, config){

        $scope.tools = response.data.tool;
    }, function error(response, status, headers, config){
    });


    $scope.run_function = function() {

        file_list_str = input_file_list.join()
        if( file_list_str == "" || $scope.selected_tool === undefined || !$scope.selected_tool) {
            $scope.show_alert = true;
        }
        else
            $scope.show_alert = false;


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
            url:php_get_run_workflow_url,
            params:get_run_workflow_params
        }).then(function success(response, status, headers, config){

            if(response.data != '') {

                $scope.submit_time = response.data.dateSubmitted
                $scope.jobID = response.data.jobHandle
                $scope.show_run = true;

                $scope.show_run_button = false;
            }

        }, function error(response, status, headers, config){
        });

    };

});



system_app.controller('analytics-workflow-monitor', function($scope, $http) {


    $scope.show_error = false;
    $scope.show_result = false;
    $scope.transfer = false;
    $scope.loading_icon = false;
    $scope.download_button= false;
    $scope.error_message = "";
    $scope.download_result_url = "";
    $scope.result_image_url = "";

    $scope.get_job_status = function() {

        $scope.download_button= false;
        console.log($scope.job_id);

        get_job_statue_params = {
            job_id:$scope.job_id
        };



        $http({
            method:'get',
            url:php_get_job_statue_url,
            params:get_job_statue_params
        }).then(function success(response, status, headers, config){



            if(response.data != '') {

                if(response.data.code !== undefined || response.data.code === 4) {

                    $scope.error_message = "The Job ID was not found";
                    $scope.show_error = true;
                    $scope.show_result = false;
                    $scope.transfer = false;
                }
                else {

                    $scope.show_error = false;
                    $scope.show_result = true;

                    $scope.submit_time = response.data.dateSubmitted;
                    $scope.jobID = response.data.jobHandle;
                    $scope.message_list = response.data.messages.message;


                    if(response.data.jobStage === "COMPLETED") {

                        $scope.transfer = true;

                    }


                }

            }

        }, function error(response, status, headers, config){
        });

    };


    $scope.transfer_data = function() {

        $scope.transfer = false;
        $scope.loading_icon = true;


        get_job_params = {
            job_id:$scope.job_id
        };

        $http({
            method:'get',
            url:php_get_job_result_list_url,
            params:get_job_params
        }).then(function success(response, status, headers, config){



            if(response.data != '') {
                console.log(response.data.jobfiles.jobfile);

                response.data.jobfiles.jobfile.forEach(function (ele) {
                    if(ele.filename === "output.tar.gz") {

                        params = {
                            job_id:$scope.job_id,
                            download_id:ele.outputDocumentId
                        };
                        $http({
                            method:'get',
                            url:php_get_backend_data_to_server_url,
                            params:params
                        }).then(function success(response, status, headers, config){

                            $scope.download_result_url = response.data.result_zip;
                            $scope.loading_icon = false;
                            $scope.download_button = true;

                            console.log($scope.download_result_url );

                            $scope.result_image_url = response.data.result_img; 

                        });


                    }

                });
            }

        }, function error(response, status, headers, config){
        });

    }



});