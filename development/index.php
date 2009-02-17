<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2006-01-30
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project Development";
	$pageKeywords	= "eclipse, plan, milestone, schedule, endgame, API";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Releases currently under development</h3>
	      <li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse"> Eclipse Project Galileo Plan</a><br>
	        This document lays out the feature and API set for the Galileo (3.5) release of the Eclipse Project. </li>
	        <li><a href="freeze_plan_3_4_2.php"> Eclipse Project Ganymede SR2 Endgame Plan</a><br>
	    		Information about how we plan to wrap up Ganymede Service Release 2 (version 3.4.2).</li>     
	      <li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse.e4"> e4 Project 0.9 Release Plan</a><br>
	        This document lays out the feature and API set for the 0.9 release of the e4 Project. </li>
    <ul>
    </ul>
      	</div>
		<div class="homeitem3col">
			<h3>Development Process</h3>
			<ul>
			<li><a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">
				Conventions and Guidelines</a><br>
		        Look here for the for the coding standards, naming conventions, and other 
		        guidelines we use to help ensure eclipse presents to users and developers 
		        as a unified whole rather than as a loose collection of parts.
			</li>
			<li><a href="http://dev.eclipse.org/bugs/">Bug Reports</a><br>
		        Eclipse uses <a href="http://bugzilla.mozilla.org/">Bugzilla</a> 
		        as our bug tracking system. Bugzilla has a wide following within the open 
		        source community and directly supports the workflows associated with distributed 
		        development (e.g., email notification). You can sign up for your own Eclipse 
		        bugzilla ID and start contributing bug reports.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/">CVS Repository</a><br>
		        We use the Concurrent Versioning System (<a href="http://www.cvshome.org">CVS</a>) 
		        to support concurrent distributed development, and we use Eclipse as our 
		        CVS client because it supports CVS directly.. All Eclipse development 
		        is carried out in this repository. The server supports both &quot;extssh&quot; 
		        and &quot;pserver&quot; type CVS connections - &quot;pserver&quot; only 
		        works for anonymous access.
			</li>
			<li><a href="http://www.eclipse.org/mail/">Mailing Lists</a><br>
		        Eclipse uses mailing lists for development coordination, design discussions, 
		        voting, announcements etc.
			</li>
			<li><a href="http://www.eclipse.org/projects/ip_log.php?projectid=eclipse">
			Eclipse IP Log</a><br>
      			Intellectual property log, including list of committers, contributors, and
      			third party code dependencies.
      		</li>
      		</ul>
      	</div>
		<div class="homeitem3col">
			<h3>API Resources</h3>
			<ul>
			<li><a href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">
				How to use the Eclipse API</a><br>
      			Guidelines for using Eclipse APIs to ensure that your code will keep working as Eclipse evolves.
      		</li>
      		<li><a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">Evolving Java-based APIs</a><br>
      			Guidelines for how to evolve Java-based APIs while maintaining compatibility 
				with existing client code.
			</li>
			<li><a href="apis/Eclipse-APIs-Lines-in-the-Sand.pdf">
				Eclipse APIs: Line in the Sand (pdf)</a><br>
      			The philosophy, psychology, and sociology of APIs, EclipseCON 2004 presentation 
				by Jim des Rivieres
			</li>
			<li><a href="apis/API-First.pdf">API First (pdf)</a><br>
				Best practices for API development based, EclipseCON 2005 presentation by 
				Jim des Rivieres
			</li>
			<li><a href="http://wiki.eclipse.org/index.php/Performance">Eclipse Performance</a><br>
				Poor performance is a bug and should be tested for, tracked and fixed in 
				the same way. The Eclipse Performance page is a collection of resources 
				and information aimed at helping plug-in developers do just that.
			</li>
      		</ul>
      	</div>
		<div class="homeitem3col">
			<h3>Historical information about past releases</h3>			
			<ul>
	        <li><a href="freeze_plan_3_4_1.php"> Eclipse Project Ganymede SR1 Endgame Plan</a><br>
	    		Information about how we wrapped up Ganymede Service Release 1 (version 3.4.1).</li>     
	      <li><a href="eclipse_project_plan_3_4.html"> Eclipse Project 3.4 Plan</a><br>
	        This document lays out the feature and API set for the 3.4 release of Eclipse Project. </li>
	        <li><a href="freeze_plan_3.4.php"> Eclipse Project 3.4 Endgame Plan</a><br>
	    		Information about we wrapped up the 3.4 (Ganymede) release of Eclipse. </li>     
	      <li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html"> 
	        Release Engineering Build Schedule</a><br>
	        Schedule for Eclipse Platform nightly, integration, and milestone builds. 
	      </li>
			 <li><a href="freeze_plan_3_3_2.php"> Eclipse Project 3.3.2 Endgame Plan</a><br>
    		Information about we wrapped up the 3.3.2 (Europa winter maintenance) release of Eclipse. </li>
			 <li><a href="eclipse_project_plan_3_3.html"> Eclipse Platform Project 3.3 Plan</a><br>
 	       This document lays out the feature and API set for the 3.3 release of 
    	    Eclipse. </li>
	      <li><a href="freeze_plan_3_3_1.html"> Eclipse Project 3.3.1 Endgame Plan</a><br>
    		Information about we wrapped up the 3.3.1 (Europa fall maintenance) release of Eclipse. </li>
      		<li><a href="freeze_plan_3.3.html">Eclipse 3.3 Endgame Plan</a><br>
	        Information about we wrapped up the 3.3 (Europa) release of Eclipse. 
    	   </li>
	      <li><a href="freeze_plan_3_2_2.html"> Eclipse Project 3.2.2 Endgame Plan</a><br>
    		Information about we wrapped up the 3.2.2 (Callisto winter maintenance) release of Eclipse. </li>
	      <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/bugcounts/BugCountOverview.html"> 
    	    Eclipse Project Bugs Counts</a><br>
        	Information on outstanding bugs in the Eclipse project main development stream. </li>
	      	<li><a href="freeze_plan_3.2.html"> Eclipse Project 3.2 Endgame Plan</a><br>
    	    Information about how we wrapped up the 3.2 (Callisto) release of Eclipse. </li>
 	        <li><a href="eclipse_project_plan_3_2.html"> Eclipse Platform Project 3.2 Plan</a><br>
        	This document lays out the feature and API set for the 3.2 release of Eclipse. </li>
			<li><a href="eclipse_maintenance_schedule_3_1_x.html" >
				Eclipse 3.1 Maintenance Release Schedule</a><br>
      			Timeline for 3.1.x maintenance stream.
      		</li>
      		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/bugcounts/3_1/BugCountOverview.html">
      			Eclipse Project Bugs Counts</a><br>
      			Information on outstanding bugs in the Eclipse project main development stream.
      		</li>
      		<li><a href="eclipse_3_1_stats.html">
      			Eclipse 3.1 by the numbers</a><br>
      			Some light-hearted statistics for the 3.1 release cycle.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_1/freeze_plan_3_1_2.html">
				Eclipse Project 3.1.2 Endgame Plan</a><br>
				Information about how we wrapped up the 3.1.2 maintenance release of Eclipse.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_1/freeze_plan_3_1_1.html">
				Eclipse Project 3.1.1 Endgame Plan</a><br>
      			Information about how we wrapped up the 3.1.1 maintenance release of Eclipse.
      		</li>
      		<li><a href="eclipse_project_plan_3_1.html">Eclipse Project 3.1 Plan (Final)</a><br>
      			This document lays out the feature and API set for the 3.1 release of Eclipse.
      		</li>
      		<li><a href="eclipse31_release_review.pdf">Eclipse Platform 3.1 Release Review (pdf)</a><br>
      			Presentation to Eclipse Foundation prior to shipping the 3.1 release.
      		</li>
      		<li><a href="eclipse_proposals_3_1.html">Eclipse 3.1 Proposals</a><br>
      			Links to proposals and working documents for various 3.1 plan items.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_1/freeze_plan.html">
				Eclipse Project 3.1 Endgame Plan</a><br>
				Information about how we wrapped up the 3.1 release of Eclipse.
			</li>
      		<li><a href="eclipse_maintenance_schedule_3_0_x.html">
      			Eclipse 3.0 Maintenance Release Schedule</a><br>
      			Timeline for 3.0.x maintenance stream (nothing further planned).
      		</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_0/freeze_plan_3_0_2.html">
				Eclipse Project 3.0.2 Endgame Plan</a><br>
				Information about how we wrapped up the 3.0.2 maintenance release of Eclipse.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_0/freeze_plan_3_0_1.html">
				Eclipse Project 3.0.1 Endgame Plan</a><br>
				Information about how we wrapped up the 3.0.1 maintenance release of Eclipse.
			</li>
			<li><a href="eclipse_project_plan_3_0.html">
				Eclipse Project 3.0 Plan (Final)</a><br>
				This document lays out the feature and API set for the 3.0 release of Eclipse.
			</li>
			<li><a href="eclipse_3_0_stats.html">Eclipse 3.0 by the numbers</a><br>
				Some light-hearted statistics for the 3.0 release cycle, compiled by John Arthorne.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/3_0/freeze_plan.html">
				Eclipse 3.0 Endgame Plan</a><br>
				Information about how we wrapped up the 3.0 release of Eclipse.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.platform.doc.isv/porting/eclipse_3_0_porting_guide.html">
				Eclipse 3.0 Porting Guide</a><br>
      			Up-to-the-moment advise for porting existing plug-ins to Eclipse 3.0.
			</li>
			<li><a href="eclipse_proposals_3_0.html">Eclipse 3.0 Proposals</a><br>
      			Links to proposals and working documents for various 3.0 plan items.
			</li>
			<li><a href="eclipse_component_plans_3_0.html">
				Eclipse 3.0 Component Milestone Plans</a><br>
				Details about what each of the component teams is working on for the upcoming milestone.
			</li>
			<li><a href="apis/api-status-3_0.html">Eclipse 3.0 API Status</a><br>
      			Status of Eclipse API packages and extension points in 3.0 development stream.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/eclipse_after_2_1.html">
				The Next Eclipse</a><br>
      			Early discussion about what the 3.0 release of Eclipse should be.
			</li>
			<li><a href="eclipse_project_plan_2_1.html">
				Eclipse Project 2.1 Plan (Final)</a><br>
				This document lays out the feature and API set for the 2.1 release of Eclipse.
			</li>
			<li><a href="eclipse_maintenance_schedule_2_1_x.html">
				Eclipse 2.1 Maintenance Release Schedule</a><br>
      			Timeline for 2.1.x maintenance stream (nothing further planned).
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/freeze_plan_2_1.html">
				Eclipse 2.1 Endgame Plan</a><br>
      			Information about how we wrapped up the 2.1 release of Eclipse.
			</li>
			<li><a href="eclipse_milestones_2_1.html">
				Eclipse 2.1 Milestone Plans </a><br>
				Links to the 2.1 milestone plans for each Eclipse team (subproject).
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/freeze_plan_2_1_1.html">
				Eclipse 2.1.1 Endgame Plan</a><br>
				Information about how we wrapped up the 2.1.1 maintenance release of Eclipse.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/freeze_plan_2_1_2.html">
				Eclipse 2.1.2 Endgame Plan</a><br>
				Information about how we wrapped up the 2.1.2 maintenance release of Eclipse.
			</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/eclipse-project-home/plans/freeze_plan_2_1_3.html">
				Eclipse 2.1.3 Endgame Plan</a><br>
				Information about how we wrapped up the 2.1.3 maintenance release of Eclipse.
			</li>
			<li><a href="challenges_2_1.html">
				Top &quot;Ten&quot; Issues List</a><br>
      			This document describes the key issues that we are working on for 2.1 and 
      			additional issues we will likely be working on soon.
			</li>
			<li><a href="2_0_retrospective_actions.html">
				Eclipse 2.0 Retrospective Actions<br></a>
				In August 2002 retrospective sessions were held with the various 
				component teams to discuss what worked (and didn't work) with the 2.0 release. 
				Based on the feedback collected during these sessions, we agreed on actions for the 2.1 effort.
			</li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
