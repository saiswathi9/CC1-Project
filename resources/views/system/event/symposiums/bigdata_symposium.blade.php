@extends('system.layouts.header')
@section('content')


<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center ">
                <h3> NEURO BIG-DATA SYMPOSIUM </h3>
                <b>October 6, 2017, Friday at 572 Life Sciences Center</b>
                <br>
                <!-- <b>Time: 8:00 am - 1:00 pm (breakfast and lunch included)</b> -->
                <p></p>
                <hr class="hr-line">
            </div>
            <div class="col-md-12 text-center ">
                <div class="text-center">
                    {{--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#RegisterModal">Register</button>--}}
                </div>
            </div>
            <ul class="col-md-12 " style="text-align: justify;">
                <br>
                <p>
                    <b>Goals:</b> To spur computational and cyber neuro research at Mizzou via (i) the development of ‘free’ cyber
                    and software big data tools for neuroscience research, and (ii) facilitation of interactions among physical
                    sciences faculty with big data expertise (engineering, math, statistics, physics) and wet-lab, behavioral
                    and clinical neuro faculty with big data 'needs'.
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
                        <li><b>7:45-8:20 am Breakfast </b></li>
                        <li><b>8:20-8:30 am Goals of the symposium - S Nair </b></li>
                        <li><b>8:30-8:30 am Opening Remarks</b> - Elizabeth Loboa (Dean of Engineering), Patrice Delafontaine (Dean of Medicine) and Walter Gassmann (Interim Director of LSC)</li>
                        <li>
                            <b>8:45-9:30 am CyNeuro Team and Engineering Faculty</b> – Overview of planned portal and neuro-resources to be hosted related to Software,
                            Databases, Cloud resources, Recommender systems, Algorithms, Data mining, and Imaging. Select neuro-collaboration projects involving
                            software/computation will also be presented  [All with posters providing details]
                        </li>
                        <li>
                            <b>9:30-10:15 am Talk by NSF Program Director Shubhra G, followed by Poster Session</b>
                        </li>
                        <li>
                            <b>10:15-11 am Biology/Psychology/Medical School Faculty</b> - Big Data needs in wet-lab, behavioral and clinical neuro research   [All with posters providing details]
                        </li>
                        <li>
                            <b>11-12 noon Discussion</b> – How to engage the diverse faculty effectively to spur interdisciplinary neuro research on the MU campus. Relevant on-going activities:
                            <p>(i) New MU portal CyNeuro.org by faculty who have been associated with the very successful NSF resource CyVerse.org;</p>
                            <p>(ii) New 1-credit graduate projects course ECE 8001 Cyber and Software Automation in Neuroscience (offered by the CyNeuro team
                                during Fall 2017 and to be continued every semester) to develop tools for MU faculty, including for your Lab. The course will
                                contribute to the CyNeuro portal that will benefit neuro-labs across MU and spur cross-campus collaborations.
                            </p>
                        </li>
                        <li>
                            <b>11:50-12:00 noon Concluding Remarks</b>
                        </li>
                        <li><b>12-1 pm Lunch</b> (Continuing with poster session)</li>
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



        <!-- Team -->
        <section class="bg-light" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Poster</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/3D_Brain_Imaging_Poster_Duan-1.jpg') }}" alt="">
                            {{--<embed src="file_name.pdf" width="800px" height="2100px" />--}}
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/3D_Brain_Imaging_Poster_Duan-1.pdf') }}" target="_blank">
                                <h4>A 3D Brain Imaging Study on Effects of Chronic Sensorimotor on the Structure of a Mature Human Cerebral Cortex</h4>
                            </a>
                            <p class="text-muted">Xu Wang, Yuyan Li, Ye Duan, Scott Frey</p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">

                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/CG_poster_Nair.jpg') }}" alt="">
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/CG_poster_Nair.pdf') }}" target="_blank">
                                <h4>Correlation and Synchrony: A Computational model study of LC of crab</h4>
                            </a>
                            <p class="text-muted">Pranit Samarth1, Joseph Ransdell, BJ Lane, David J. Schulz, Satish S. Nair</p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/Competition_poster_Nair.jpg') }}" alt="">
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/Competition_poster_Nair.pdf') }}" target="_blank">
                                <h4>Competition among model lateral amygdala principal cells during Pavlovian fear conditioning</h4>
                            </a>
                            <p class="text-muted">Feng Feng, Pranit Samarth, Denis Paré, Satish S. Nair</p>

                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/MD_poster_Cannon.jpg') }}" alt="">
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/MD_poster_Cannon.pdf') }}" target="_blank">
                                <h4>Molecular dynamics shows how inhibitor-2 phosphorylation activates the protein phosphatase-1 • inhibitor-2 complex</h4>
                            </a>
                            <p class="text-muted">John F. Cannon</p>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/MoodToolKitPoster2017_Trull.jpg') }}" alt="">
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/MoodToolKitPoster2017_Trull.pdf') }}" target="_blank">
                                <h4>Mood ToolKit (TigerAware): A Customizable Mobile Survey Creation and Data Analytics System for Data-driven Emotion, Clinical, and Field Studies</h4>
                            </a>
                            <p class="text-muted">Will Morrison, Jayanth Kanugo, Luke Guerdan, Gaofei Zhao, Patrik Handrianto, Nishant Chettri, Nick Wergeles, Siyang Liu, Dr. Yi Shang, Dr. Timothy Trull</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/Poster_Ozden_Ilker.jpg') }}" alt="">
                            <a class="text-addition_primary" href="{{ asset('jscss/custom/img/big-data_symposium/pdf/Poster_Ozden_Ilker.pdf') }}" target="_blank">
                                <h4>Optogenetic Manipulation of Cortico-basal-ganglia System as A Therapy for Parkinson’s Disease.</h4>
                            </a>
                            <p class="text-muted">Badr Almadi, Olivia Botonis, Ilker Ozden</p>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/PosterPSP2017_final_Yi_Shang.jpg') }}" alt="">
                            <a class="text-addition_primary"  href="{{ asset('jscss/custom/img/big-data_symposium/pdf/PosterPSP2017_final_Yi_Shang.pdf') }}" target="_blank">
                                <h4>Deep Learning and Big Data Analytics for Protein Structure Prediction and Bioinformatics</h4>
                            </a>
                            <p class="text-muted">Chao Fang, Zhaoyu Li,Wenbo Wang, Junlin Wang, et al., and Dr. YiShang in collaboration with Dr. Dong Xu Distributed</p>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('jscss/custom/img/big-data_symposium/KBCommons_v4_TJ.jpg') }}" alt="">
                            <a class="text-addition_primary"  href="{{ asset('jscss/custom/img/big-data_symposium/pdf/KBCommons_v4_TJ.pdf') }}" target="_blank">
                                <h4>Expansion of KBCommons Informatics Framework for CyNeuro Web-Portal</h4>
                            </a>
                            <p class="text-muted">Shuai Zeng, Zhen Lyu, Trupti Joshi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="text-center">
            <button type="button" class="btn btn-secondary" data-target="#RegisterModal">Registration is closed</button>
            {{--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#RegisterModal">Register</button>--}}
        </div>

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