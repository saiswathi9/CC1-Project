
system_app.controller('symposium-register-controller', function($scope, $http) {


    $scope.submit_done = false;
    $scope.status_error = false;

    $scope.submit = function() {

        // Get group member permission
        var url = php_submit_url;
        var params = {
            name:$scope.name,
            email:$scope.email,
            position:$scope.position,
            department:$scope.department,
            research:$scope.research,
            comment:$scope.comment,
        };
        
        $http({
            method:'get',
            url:url,
            params:params
        }).then(function success(response, status, headers, config){
            var data = response.data;

            $scope.submit_status = data.status;
            if($scope.submit_status){
                $scope.submit_done = true;
                $scope.status_error = false;
                $scope.submit_msg = data.submit_msg;
            }
            else{
                $scope.submit_msg = data.submit_msg;
                $scope.status_error = true;
                console.log(data.submit_msg)
            }

        }, function error(response, status, headers, config){
        });
    }

});