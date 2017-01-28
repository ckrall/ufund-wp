<?php
/**
 * Template for displaying pages
 * Template Name: Homepage
 *
 * @package ufund-wp
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>



    <!-- home jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>The Ultimate Fundraising Experience<sup>&trade;</sup></h1>
        <div class="row">
        	<div class="col-md-6 cell">
						<a class="btn" href="template-form-campaign-start.html" role="button">
							<img class="" src="<?php echo get_theme_file_uri( 'img/home-jumbotron-start.svg' );?>" alt="" title="" />
						</a>
        		<p><a class="btn btn-primary btn-lg btn-home" href="template-form-campaign-start.html" role="button">Start a Campaign</a></p>
        	</div> <!-- /column -->
        	<div class="col-md-6 cell">
						<a class="btn" href="template-page-campaign-find.html" role="button">
							<img class="" src="<?php echo get_theme_file_uri( 'img/home-jumbotron-find.svg' );?>" alt="" title="" />
						</a>
        		<p><a class="btn btn-primary btn-lg btn-home" href="template-page-campaign-find.html" role="button">Find a Campaign</a></p>
        	</div> <!-- /column -->
        </div> <!-- /row -->
        <div class="alert" role="alert">
            <p>
                UFund is revolutionizing the fundraising world!
            </p>
            <p>
                UFund is bringing fundraising to the 21st century with an innovative way to raise funds for your organization or group. With our one-of-a-kind fundraising platform, we give your organization the power to sell, without any upfront costs or inventory. Your supporters can select from a multitude of products– all while allowing you to raise more money, faster!
            </p>
        </div>
      </div>
    </div> <!-- /jumbotron -->



    <div class="container">

      <!-- row for featured campaigns -->
      <div class="row campaign-feature">

        <div class="col-md-3">
        	<a class="no-line" href="template-page-campaign-home.html">
						<div class="panel panel-default campaign">
							<div class="panel-body">
								<img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
								<p class="campaign-org">Organization Name</p>
								<p class="campaign-goal">$88,888</p>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										<span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
						</div> <!-- /panel -->
					</a>
        </div> <!-- /column -->
        <div class="col-md-3">
        	<a class="no-line" href="template-page-campaign-home.html">
						<div class="panel panel-default campaign">
							<div class="panel-body">
								<img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
								<p class="campaign-org">Organization Name</p>
								<p class="campaign-goal">$88,888</p>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
										<span class="sr-only">20% Complete</span>
									</div>
								</div>
							</div>
						</div> <!-- /panel -->
					</a>
        </div> <!-- /column -->
        <div class="col-md-3">
        	<a class="no-line" href="template-page-campaign-home.html">
						<div class="panel panel-default campaign">
							<div class="panel-body">
								<img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
								<p class="campaign-org">Organization Name</p>
								<p class="campaign-goal">$88,888</p>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40% Complete</span>
									</div>
								</div>
							</div>
						</div> <!-- /panel -->
					</a>
        </div> <!-- /column -->
        <div class="col-md-3">
        	<a class="no-line" href="template-page-campaign-home.html">
						<div class="panel panel-default campaign">
							<div class="panel-body">
								<img src="<?php echo get_theme_file_uri( 'img/img.png' );?>" alt="" title="" width="100%" height="100%" />
								<p class="campaign-org">Organization Name</p>
								<p class="campaign-goal">$88,888</p>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div> <!-- /panel -->
					</a>
        </div> <!-- /column -->

      </div> <!-- /row -->

      <hr>

      <!-- row for how it works -->
      <div class="row work-intro">
        <div class="col-md-12">
          <h2>How it Works</h2>
        	<img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-0.svg' );?>" alt="" title="" />
          <p>The group or organization will sign up online and receive an email confirmation. During the set up of the group’s UFund website, the group’s fundraising coordinator will provide names of the individuals fundraising, along with fundraising monetary goals and purpose. If the group or organization has a logo, we would like to include that on their UFund website as well. The reason for obtaining each individual’s name is to credit them when a customer completes their purchase (the customer will be prompted to select who told them about the fundraiser). In certain circumstances, UFund will offer rewards for the person who sells the most during their group’s fundraiser. When the group or organization provides a logo (optional) and identifies the purpose of the fundraiser, the end consumers are more likely to purchase products.</p>
        </div> <!-- /column -->
      </div> <!-- /row -->

      <br />

      <div class="row work-steps">
        <div class="col-md-3">
					<div class="panel panel-default step">
						<div class="panel-body">
							<div class="step-num">1</div>
							<img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-1.svg' );?>" alt="" title="" />
							<h2>Heading</h2>
							<p>Once an organization has signed up to utilize UFund, we will create an online store just for that organization or group. This website will be branded to look just as if it is that group’s website. The group’s website will keep track of how much the group has raised and will let everyone know with a tracker at the top of each page. Your organization receives a check for 25% of the total sales price! That’s $25 out of every $100 sold.</p>
						</div>
					</div>
        </div> <!-- /column -->
        <div class="col-md-3">
					<div class="panel panel-default step">
						<div class="panel-body">
							<div class="step-num">2</div>
							<img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-2.svg' );?>" alt="" title="" />
							<h2>Heading</h2>
							<p>Once the group’s UFund website is up and running, UFund will release the URL address to the organization. Then all of the organization’s members will be asked to share that particular website with all of their friends and family via social media. The more people each member shares it with, the more money the group will raise.</p>
						</div>
					</div>
        </div> <!-- /column -->
        <div class="col-md-3">
					<div class="panel panel-default step">
						<div class="panel-body">
							<div class="step-num">3</div>
							<img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-3.svg' );?>" alt="" title="" />
							<h2>Heading</h2>
							<p>Each fundraiser lasts for 2 weeks (and can be extended for a week if the organization requests it). The fundraiser will then close, and UFund will give the group a detailed report on all purchases made, so your fundraising team can celebrate! At the time of checkout, each customer will provide their mailing address and their products will be shipped directly to them. UFund will take 100% of the work out of having to deliver any products!</p>
						</div>
					</div>
        </div> <!-- /column -->
        <div class="col-md-3">
					<div class="panel panel-default step">
						<div class="panel-body">
							<div class="step-num">4</div>
							<img class="step-img" src="<?php echo get_theme_file_uri( 'img/home-howitworks-4.svg' );?>" alt="" title="" />
							<h2>Heading</h2>
							<p>UFund will calculate the amount of funds raised and will distribute a check to the organization within 2-4 weeks of the fundraiser’s last day. In certain circumstances, UFund will host a success party for the organization as well. If you have any questions, please contact us at info@UFundonline.com. UFund looks forward to working with your group or organization in the near future.</p>
						</div>
					</div>
        </div> <!-- /column -->
      </div> <!-- /row -->

    </div> <!-- /container -->



<?php get_footer(); ?>
