<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>


<div class="sub-hero-wrap">
	<h1 class="text-center">Health Check - Report</h1>
</div>


<div class="container py-5">
	<div class="row">

		<div class="col-12">
			<div class="report-card-wrap">
				<div class="report-card-wrap-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
					<div class="row">
						<div class="col-md-6 col-12">
							<h3>홍길동님의 건강체크 결과표</h3>
						</div>
						<div class="col-md-6 col-12 text-end">
							<div class="btn-group">
								<a href="#" class="btn btn-light">저체중</a>
								<a href="#" class="btn btn-light">정상</a>
								<a href="#" class="btn btn-light active">과체중(25)</a>
								<a href="#" class="btn btn-light">비만</a>
								<a href="#" class="btn btn-light">고도비만</a>
							</div>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-md-6 col-12">
							<div class="report-user-info">
								<span>성별</span>남성
								<span>나이</span>37세
								<span>BMI</span>26.4
							</div>
						</div>
						<div class="col-md-6 col-12 text-end">
							<span>적절한 운동과 식습관 개선으로 10.5kg 감량에 도전해볼까요?</span>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<div class="report-info">
								<div class="report-info-sm">
									<i class="icon-thumbs-up"></i>
									<div>조금만 노력하세요.</div>
								</div>
								<p>뼈 건강 그리고 신경 및 근육 기능 관리가 필요해요.</p>
								<p>체내 에너지 생성으로 활력 유지와 스트레스 관리가 필요해요.</p>
								<p>간 건강을 위한 관리가 필요해요.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="report-card-wrap-body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
					<div class="row">
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#vitaminc">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						<!-- 비타민 종류별 반복 레이아웃 (필요시 해당부분 출력) -->
						<div class="col-md-3 col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Vitamin C</h5>
									
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
										<span>182mg</span>
									</div>
									<div class="progress progress-big">
										<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
								<a href="#" class="btn btn-dark">Learn more<i class="icon-plus1 ms-3"></i></a>
							</div>
						</div>
						
						
					</div>
				</div>
				
				<div class="report-card-wrap-bottom text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
					<div class="d-grid gap-2">
					<a href="#" class="btn btn-link btn-lg">영양제 구매 바로가기</a>
					</div>
				</div>
				
			</div>
		</div>

	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="vitaminc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vitamincLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-body p-0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 modal-left-header d-flex align-items-start flex-column ">
							<div class="mb-auto">
								<button type="button" class="btn-close mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
								<h5 class="modal-title mt-5 display-5" id="vitamincLabel">Vitamin C</h5>
							</div>
							<div class="pb-3 w-100 progress-modal">
								<div class="d-flex justify-content-between mb-2">
									<span>YOUR DOSAGE</span>
									<span>182mg</span>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-md-9 modal-right-body">
							<div class="modal-scroll">
								<div>
									<div>당신의 비타민 기준은 밑에 결과로 나왔습니다</div>
									<hr>
									
									<h3>BASED ON</h3>
									<div class="d-flex justify-content-between">
										<span>YOUR DOSAGE</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>DNA RESULTS</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between">
										<span>BLOOD RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
									<div class="d-flex justify-content-between">
										<span>METABOLLTE RESULTS</span>
									</div>
									<p>NO DATA AVAILABLE</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>



<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');