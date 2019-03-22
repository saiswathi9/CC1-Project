@extends('system.layouts.header')
@section('content')


<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center ">
                <h3> 2nd NEURO BIG-DATA SYMPOSIUM </h3>

                <b>Supported by NSF & MU Engineering and MU School of Medicine</b>
                <br>
                <b>December 15, 2017, Friday at 572 Life Sciences Center</b>
                <!-- <br>
                <b>Time: 9:00 a.m. - 12:00 p.m. (Lunch will be served)</b> -->
                <p></p>
                <hr class="hr-line">
            </div>
                <!--
                <div class="col-md-12 text-center ">

                    <br>
                    {{--<button type="button" class="btn btn-secondary" data-target="#RegisterModal">Registration is closed</button>--}}
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#RegisterModal">Register</button>
                    <br>
                    <p><b>Due to space constraints, we can permit only faculty, post-doctoral fellows and PhD students to attend,
                            depending on space.
                            <br>
                        Please register and we will get back to you about space within a day.</b></p>

                </div>
            -->
            <div class="col-md-12 " style="text-align: justify;">
                <br>
                <p>
                    <b>Goals:</b> Following up on the 1st Neuro Big-Data Symposium, four graduate student groups will be presenting
                    their semester-long projects related to SOFTWARE AUTOMATION (‘Workflows’) for neuroscience
                    research applications. These and other “tools” will be hosted at CyNeuro.org which will also be discussed.
                    <u>
                    If you have software automation needs for your Lab, we could consider having it as a class project during
                    Spring 2018. This is free for you, and so let us know.
                    </u>
                </p>
                <p>
                    Seeded by a grant from NSF, a team of faculty at MU have launched an effort to develop
                    tools and applications for modeling/analysis/prediction/visualization of neuro big data.
                    The resources will be hosted on a new web-portal CyNeuro.org (for cyber-neuroscience) that
                    is being developed. The one-stop shop portal will speed up your research by providing access
                    to neuro resources such as software, databases, computational models, HPC systems, recommender
                    systems, and examples of best practice in specific applications.
                </p>
                <p>
                    If you are interested in developing, accessing or suggesting what resources to host on the portal,
                    or in interacting with MU faculty from 'user' and/or 'developer' camps, consider attending the event.
                    Since we have a limited number of seats, if you plan to attend the event, please register (required)
                    via the MU Cyber-Neuro portal <a href="http://CyNeuro.org">http://CyNeuro.org</a>
                </p>
                <p>
                    <b>Agenda:</b>
                    <ul>
                        <li><b> 9 - 9:30 a.m. </b> - CyNeuro Team – S Nair, D Xu, P Calyam, T Joshi; Progress during Fall 2017 on the
                            development of “tools” to facilitate big-data research</li>
                        <li>
                            <b> 9:30 - 9:45 a.m.</b> – Funding opportunities related to Neuro Big-Data
                        </li>
                        <li>
                            <b> 9:45 - 10:30 a.m. </b> – Technology Demonstration
                        </li>
                        <li>
                            <b> 10:30 - 11:15 a.m.</b> – Input from Faculty on specific workflows for their own research (note: all this is free
                            for MU researchers)
                        </li>
                        <li>
                            <b>  11:15 -12:00 noon</b> – Discussion on ‘Assisting MU researchers with big-data needs’
                        </li>

            </ul>
            </p>
            <p>
                For additional information, feel free to contact the organizers:
            <p><b>Satish S. Nair</b> (<a href="mailto:nairs@missouri.edu">nairs@missouri.edu</a>)</p>
            <p><b>Dong Xu</b> (<a href="mailto:xudong@missouri.edu">xudong@missouri.edu</a>)</p>
            <p><b>Prasad Calyam</b> (<a href="mailto:calyamp@missouri.edu">calyamp@missouri.edu</a>)</p>
            <p><b>Trupti Joshi</b> (<a href="mailto:joshitr@health.missouri.edu">joshitr@health.missouri.edu</a>)</p>
            </p>

            </div>


            <div class="col-md-12">
                <br>
                <b>Flyer:</b>
                <img src="{{ asset('jscss/custom/img/second-big-data_symposium/Symposium-1.png') }}" class="img-rounded" alt="Cinque Terre" width="100%">
                <img src="{{ asset('jscss/custom/img/second-big-data_symposium/Symposium-2.png') }}" class="img-rounded" alt="Cinque Terre" width="100%">
            </div>

        </div>









        {{--<div class="text-center">--}}

            {{--<button type="button" class="btn btn-secondary" data-target="#RegisterModal">Registration is closed</button>--}}
            {{--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#RegisterModal">Register</button>--}}
            {{--<br>--}}
            {{--<p>Due to space constraints, we can permit only faculty, post-doctoral fellows and PhD students to attend</p>--}}
        {{--</div>--}}

    </div>

    <!-- Modal -->
    <div class="modal fade" id="RegisterModal" role="dialog" ng-controller="symposium-register-controller">
        <div class="modal-dialog modal-md">

            <form class="well" name="submit_form" ng-class="{'submitted': submitted}" ng-submit="submit()" >
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group form-group">
                                    <span class="input-group-addon">Name *</span>
                                    <input type="text" class="form-control" placeholder="Your name" aria-describedby="sizing-addon1" ng-model="name" required/>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">Email *</span>
                                    <input type="email" class="form-control" placeholder="example@gmail.com" aria-describedby="sizing-addon1" ng-model="email" required/>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" >Position *</span>
                                    <select class="selectpicker" style="width:100%" ng-model="position">
                                        <option value="">Choose one of position</option>
                                        <option value="Dean">Dean</option>
                                        <option value="Chair">Chair</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Postdoctoral Fellow">Postdoctoral Fellow</option>
                                        <option value="Ph.D. students">Ph.D. students</option>
                                    </select>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">Department *</span>
                                    <input type="text" class="form-control" placeholder="Your Department" aria-describedby="sizing-addon1" ng-model="department"/>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">Lab research area</span>
                                    <input type="text" class="form-control" placeholder="Something interesting" aria-describedby="sizing-addon1" ng-model="research"/>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Please list what you expect to gain and/or contribute by participation</label>
                                    <textarea class="form-control" rows="5" ng-model="comment" ></textarea>
                                </div>
                                <div ng-if="status_error">
                                    <p class="text-danger">Error:</p>
                                    <p class="text-danger" ng-repeat="msg in submit_msg">@{{ msg }}</p>
                                </div>
                                <div ng-if="submit_done">
                                    <p class="text-success" ng-repeat="msg in submit_msg">@{{ msg }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div ng-if="!submit_done">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        <div ng-if="submit_done">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
@section('javascript')

    <script>

        var php_submit_url = '{{ route('system.event.bigdata_syposium_register_submit') }}';

    </script>

    <script src="{{ asset('jscss/custom/angular/controller/big-data-symposium-controller.js') }}" type="text/javascript" ></script>
@endsection