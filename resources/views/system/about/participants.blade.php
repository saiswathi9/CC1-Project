@extends('system.layouts.header')
@section('content')
<section class="bg-light" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="section-heading">Participants</h3>
				<hr class="hr-line">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-4 col-md-3">
				<div class="img-thumbnail">
                    <h4 style="text-align: center;">Neuro Expertise</h4>
					<a target="_blank" href="https://engineering.missouri.edu/faculty/satish-s-nair/">
						<img src="https://engineering.missouri.edu//wp-content/uploads/2018/01/Portrait2NairSatish-218x300.jpg" alt="Dr. Satish Nair" style="width:100%">
						<div class="caption">
							<h4 class="img-title">Dr. Satish Nair</h4>
						</div>
					</a>
				</div>
			</div>
            <div class="col-sm-4 col-md-3">
                </br>
            </div>
            <div class="col-12 col-sm-4 col-md-3">
                <div class="img-thumbnail">
                    <h4 style="text-align: center;">CI Expertise</h4>
                    <a target="_blank" href="https://engineering.missouri.edu/faculty/prasad-calyam/">
                        <img src="https://engineering.missouri.edu//wp-content/uploads/2017/12/Portrait2CalyamPrasad-218x300.jpg" alt="Dr Prasad Calyam" style="width:100%;">
                        <div class="caption">
                            <h4 class="img-title">Dr. Prasad Calyam</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </br>
        </br>
        <div class="row justify-content-center">
			<div class="col-12 col-sm-4 col-md-3">
				<div class="img-thumbnail">
                    <h4 style="text-align: center;">Neuroinformatics Expertise</h4>
					<a target="_blank" href="https://engineering.missouri.edu/faculty/dong-xu/">
						<img src="https://engineering.missouri.edu//wp-content/uploads/2018/01/Portrait2XuDong-218x300.jpg" alt="Dr. Dongu Xu" style="width:100%">
						<div class="caption">
							<h4 class="img-title">Dr. Dong Xu</h4>
						</div>
					</a>
				</div>
			</div>
            <div class="col-sm-4 col-md-3">
                </br>
            </div>
            <div class="col-12 col-sm-4 col-md-3">
                <div class="img-thumbnail">
                    <h4 style="text-align: center;">Biomedical Informatics Expertise</h4>
                    <a target="_blank" href="https://medicine.missouri.edu/faculty/trupti-joshi-phd">
                        <img src="{{ asset('jscss/custom/img/participants/Portrait2JoshiTrupthi-218x300.png') }}" alt="Dr. Trupti Joshi" style="width:100%">
                        <div class="caption">
                            <h4 class="img-title">Dr. Trupti Joshi</h4>
                        </div>
                    </a>
                </div>
            </div>
		</div>
		<br>
		<br>
        <div class="row">
            <div class="col-12">
                <h3 class="section-heading">Contributors</h3>
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-heading">Dr. Satish Nair’s lab :</h4>
                <ul>
                    <li>Ben Latimer</li>
                    <p></p>
                    <li>Tyler Banks</li>
                </ul>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <h4 class="section-heading">Dr. Prasad Calyam’s lab :</h4>
                <ul>
                    <li>Soumya Purohit</li>
                    <p></p>
                    <li>Songjie Wang</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-heading">Dr. Dong Xu’s lab :</h4>
                <ul>
                    <li>Cong Chen</li>
                </ul>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <h4 class="section-heading">Dr. Trupti Joshi’s lab :</h4>
                <ul>
                    <li>Shuai Zeng</li>
                    <p></p>
                    <li>Zhen Lyu</li>
                </ul>
            </div>
        </div>
        <br>
        <br>
		<div class="row">
			<div class="col-12">
				<h4 class="section-heading">Departments</h4>
				<hr class="hr-line">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link"  href="https://engineering.missouri.edu/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/participants/MU_UnitSig_CollegeofEngineering_rgb_std_horiz.png') }}" alt="College of Engineering">
                    </a>
                    <div class="portfolio-caption">
                        <h4>College of Engineering</h4>
                    </div>
             </div>
             <div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link"  href="http://biology.missouri.edu/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/participants/MU_UnitSig_CollegeofArtsandScience_rgb_std_horiz.png') }}" alt="College of Arts and Sciences">
                    </a>
                    <div class="portfolio-caption">
                        <h4>College of Arts and Sciences</h4>
                    </div>
             </div>
			<div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link"  href="https://medicine.missouri.edu/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/participants/MU_UnitSig_H_SchoolofMedicine_rgb_std_horiz.png') }}" alt="School of Medicine">
                    </a>
                    <div class="portfolio-caption">
                        <h4>School of Medicine</h4>
                    </div>
             </div>
             <div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link"  href="https://cvm.missouri.edu/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-ravelry fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('jscss/custom/img/participants/MU_UnitSig_CollegeofVeterinaryMedicine_rgb_std_horiz.png') }}" alt="College of Veterinary Medicine">
                    </a>
                    <div class="portfolio-caption">
                        <h4>College of Veterinary Medicine</h4>
                    </div>
             </div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-12">
				<h4 class="section-heading">External Collaborators</h4>
				<hr class="hr-line">
				<br>
			</div>
		</div>
		<div class="row">
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link"  href="https://www.nsgportal.org/">
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
                    <a target="_blank" class="portfolio-link" href="http://www.cyverse.org/">
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
                    <a target="_blank" class="portfolio-link" href="https://www.xsede.org/">
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
				<div class="col-md-6 col-sm-6 portfolio-item">
                    <a target="_blank" class="portfolio-link" href="https://www.humanbrainproject.eu/en/">
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


@section('javascript')

@endsection