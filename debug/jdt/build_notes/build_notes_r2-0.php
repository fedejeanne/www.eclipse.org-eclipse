<?php  	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			June 26 2007
	#
	# Description: this page contains the build notes for the JDT debugger
	#				for the 2.0 release
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug 2.0 Release Build Notes";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, build, notes, 2.0, jdt";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Summary of API Changes</h3>
			None.
		</div>
		<div class="homeitem3col">
			<h3>July ??, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=21099">21099</a>: HCR failed dialog - default control is wrong<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18722">18722</a>: Projects re-build when not required<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18792">18792</a>: Minor: caught/uncaught only enabled for single selection<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20260">20260</a>: TVT2: corrupted characters in java prefs page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20417">20417</a>: ManageBreakpointActionDelegate.selectionChanged causes NullPointerException<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=21483">21483</a>: Error from ClassPrepareEvent when debugging WTK<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=21305">21305</a>: Debug element rendering can be more rebust<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=21308">21308</a>: Method.isObsolete() broken for method ID 0 on JDK < 1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20469">20469</a>: Concurrent modification of JDIDebugTarget breakpoint collection<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 24, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20370">20370</a>: NullPointerException getting thread group name.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20789">20789</a>: Method entry breakpoints too slow<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 21, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20745">20745</a>: Broken extension point links for org.eclipse.debug.ui<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 20, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18797">18797</a>: Evaluation that hits breakpoint confuses debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19182">19182</a>: Disconnect debug session crashes WebSphere<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20604">20604</a>: Thread sometimes not updating when suspended<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 19, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20304">20304</a>: Eval: NPE when evaluate a snippet in anonymous type declared in an instance creation instruction<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20468">20468</a>: Installed JRE: Source attachment set to non existing location<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20049">20049</a>: Typo in method name - updateDefatultJREContainers<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20086">20086</a>: Breakpoints not installed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20185">20185</a>: TVT2: NLS in "jdt.debug.ui" plugin xml<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20260">20260</a>: TVT2: corrupted characters in java prefs page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20415">20415</a>: NPE adding JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20436">20436</a>: Performance problem when method entry breakpoint set<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=20449">20449</a>: TVT2: Mnemonic of Use default Java executable doesn't work<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 12, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19880">19880</a>: Launcher configuration doesn't show up, NullPointerException in getMemento()<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19610">19610</a>: EventRequestManagerImpl.findRequest doesn't handle VMDeathEvent<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19740">19740</a>: content assist is now retargetable<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 11, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19412">19412</a>: more than one JRE on classpath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19604">19604</a>: Changing JRE JARs triggers useless build<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18926">18926</a>: unable to add JDK 1.1.8 to Installed JRE's in Preferences<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19723">19723</a>: InputStreamReader doesn't user workspace encoding<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19796">19796</a>: NPE in ConsoleDocumentManager<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19745">19745</a>: Launch Configuration Bug<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 10, 2002 - Problem Reports Fixed</h3>
			<ul>
				<li>API change on IVMConnector.<br>See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19569">19569</a>: Auxiliary processes started by IVMConnector cannot be registered<br></li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18998">18998</a>: Stack overflow with cyclic projects (might belong to JDT/Core)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19314">19314</a>: Edit JRE Container dialog always shows 'Default'<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18863">18863</a>: Default source lookup computed incorrectly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18981">18981</a>: Replacing default JDK doesn't trigger rebuild<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19202">19202</a>: JavaLineBreakpoint holds JDIThread pointers<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19159">19159</a>: ObjectActionDelegate hierarchy memory leak<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19315">19315</a>: JRE_LIB container on path results in -Xbootclasspath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18536">18536</a>: Eval: NumberFormatException thrown when trying to evaluate negative hexadecimal or octal number<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19570">19570</a>: "Add Jars..." to classpath in launch configuration uses absolute pathnames<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19569">19569</a>: Auxiliary processes started by IVMConnector cannot be registered<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19554">19554</a>: Accessibility : cannot add Exception breakpoint from menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19554">19554</a>: StepEventImpl.EVENT_KIND is defined as int<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19705">19705</a>: Manage breakpoint actions enabled for other text editors<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19373">19373</a>: Changing connection type on JavaConnectTab does not show arg widgets<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 7, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18100">18100</a>: Internal error in Lauch Configurations dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18650">18650</a>: Scrapbook doesn't launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18998">18998</a>: Stack overflow with cyclic projects (might belong to JDT/Core)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18863">18863</a>: Default source lookup computed incorrectly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18981">18981</a>: Replacing default JDK doesn't trigger rebuild<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19202">19202</a>: JavaLineBreakpoint holds JDIThread pointers<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15212">15212</a>: Object shows up when I launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17868">17868</a>: breakpoint inbetween lines<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19074">19074</a>: EvaluationThread holds onto evaluation objects<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19157">19157</a>: JavaMethodBreakpoints hold onto debug targets<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19159">19159</a>: ObjectActionDelegate hierarchy memory leak <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19315">19315</a>: JRE_LIB container on path results in -Xbootclasspath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19422">19422</a>: NPE out of SnippetEditorActionContributor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19314">19314</a>: Edit JRE Container dialog always shows 'Default'<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19373">19373</a>: Changing connection type on JavaConnectTab does not show arg<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17137">17137</a>: Wrong display of String variable value<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18652">18652</a>: Snippet editor toolbar actions not visible<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18856">18856</a>: Lose indication of error in Java Breakpoint Properties dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18931">18931</a>: Context menu of Snippet editor has conflict on 'e'<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18935">18935</a>: Add/Remove watchpoint enabled for Snippet Editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18940">18940</a>: Setting imports needs to restart the evaluation context<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19005">19005</a>: 'java snippet imports' dialog: missing '...' on button label<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19175">19175</a>: Remove deprecated methods<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19329">19329</a>: IVMConnector implementation needs to have access to source p<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19363">19363</a>: Missing wizard banner on library container<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=19541">19541</a>: Java debug timeout preference not persisted<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>June 1, 2002 - Problem Reports Fixed</h3>
			<li>API Change - return values can now be null for the following:
				<ul>
				<li>AbstractJavaLaunchConfigurationDelegate#getBootpath(..) - can now return null to 
				   indicate a default bootpath, or an empty array to indicate an empty bootpath.</li>
				<li>VMRunnerConfiguration#get/setBootClassPath(..) - can now accept/return null to
					indicate a default bootpath, or an empty array to indicate an empty bootpath.</li>
				</ul>
			</li>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16909">16909</a>: Project selection for source lookup<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18448">18448</a>: Default container entry<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18434">18434</a>: Empty boot path si not the same as default boot path<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18482">18482</a>: Move all entries to bootpath fails<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18485">18485</a>: Reverting to default classpath broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18432">18432</a>: Use step filters menu item enabled for all debug targets.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18044">18044</a>: JavaBreakpointPropertiesDialog should also set foreground<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18174">18174</a>: Quotes in execution arguments of Java launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18395">18395</a>: Suspend on compilation error broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17158">17158</a>: Disabled menu item Add Method Breakpoint in context menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17616">17616</a>: Source not shown for "thread" while exiting program<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18512">18512</a>: Snippet evaluation returning wrong result?<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18231">18231</a>: ArchiveSourceLocation holds onto open jars too long<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 31, 2002 - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11947">11947</a>: NPE in JavaUISourceLocator when remote debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18115">18115</a>: IllegalArgumentException: Duplicate VM: 0<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17348">17348</a>: Eval : NullPointerException when the source doesn't match the runtime class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17795">17795</a>: ClassCastException when inspecting expression<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17530">17530</a>: timeout not honored in attach launcher<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18360">18360</a>: Snippet editor open java element actions using deprecated superclass<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17416">17416</a>: Snippet editor leaks actions<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18378">18378</a>: Leaking image in launch config dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18296">18296</a>: Debug Hover Fix<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18319">18319</a>: Elusive Ellipsis<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17753">17753</a>: InternalException removing installed breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18329">18329</a>: deadlock launching eclipse in eclipse<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 30, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17838">17838</a>: Error correction for conditional breakpoint allows enter on empty String<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17321">17321</a>: Problem in Installed JREs preferences<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17065">17065</a>: Sharing JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16080">16080</a>: classpath changes when JRE changes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17643">17643</a>: Classpath viewers do not show proper default classpaths<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17690">17690</a>: Add JRE: rt.jar is shown instead of classes.zip for j9 VM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9516">9516</a>: add JRE dialog comes up in an error condition<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18204">18204</a>: Missing property string for Add Breakpoint in ruler meno<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13381">13381</a>: Better choice for default working dir in Java local config<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17194">17194</a>: Classpath > Advanced: Cannot append jar to Variable<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18188">18188</a>: Inspect is broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17434">17434</a>: Add Package on JavaSnippet imports should indicate progress<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15316">15316</a>: Need progress message while remote launching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17025">17025</a>: Adding JREs<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16633">16633</a>: Console view doesn't open automatically when running tests<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17691">17691</a>: DisplayView registers a document listener and nobody removes it<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15823">15823</a>: Register jpage as a text file type with VCM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17081">17081</a>: IncompatibleThreadStateException attempting to pause remote launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16824">16824</a>: Auto generated launch configuration naming scheme differs<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17440">17440</a>: Snippet editor allows setting of imports with default package<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16916">16916</a>: Mneumonic collision when attaching source for JRE_LIB<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16917">16917</a>: Mneumonic collision in Classpath tab, Source tab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17386">17386</a>: Open on Type in console improvements<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 29, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>The default working directory for Java Applications is now the associated project folder
			 in the local file system.</li>
			 </ul>
			 <p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17865">17865</a>: Wrong "this" context in evaluation & expression view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13349">13349</a>: Add breakpoint action disabled in editor pop-up<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17377">17377</a>: Add/Remove breakpoint not enabled correctly if selection change from outliner<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17867">17867</a>: VM Disconnected Exceptions in the log<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17751">17751</a>: InvalidStackFrameException(s) after a StepOver<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16930">16930</a>: Eval: incompatible thread state<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17073">17073</a>: Sharing JRE in buildpath - errors when JRE does not exist<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17520">17520</a>: Exception logged on cancelling MainMethodFinder for JavaApplicationAction<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16819">16819</a>: Incorrect error message when main not found for Run/Debug Java<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18019">18019</a>: Missing JDTLaunchActionSet<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17162">17162</a>: ManageBreakpointActionDelegate triggers reconcile on selection change<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17043">17043</a>: Mneumonic missing for project selection viewer off of Connection tab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18001">18001</a>: Rename "Local Java App" to "Java App"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17890">17890</a>: Should not assume type of PropertyChangeEvent values<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15741">15741</a>: NPE in JavaRuntime.detectVMConfiguration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16702">16702</a>: Unhandled NPE in HCR manager<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=18040">18040</a>: Index out of bounds creating new remote java launch config<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16046">16046</a>: Launch configuration dialog doesn't/can't cancel a launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17132">17132</a>: Advanced dialog on class path config tabs should not be a title area dialog<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 28, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>The "Java Launch" action set has been removed and integrated into the debug platform's
			new extension point - "org.eclipse.debug.ui.launchShortcuts". The actions are now available
			off of the "Run/Debug As..." cascading menu.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>May 27, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16340">16340</a>: Fix deprecations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16351">16351</a>: Inspect and Display incorrectly enabled in the display view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16400">16400</a>: Console view doesn't get focus<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16547">16547</a>: Use progress dialog in stead of status line<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16880">16880</a>: Code assist does not work in expression view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16992">16992</a>: Copyrights in test suite<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=17095">17095</a>: ResourceException when closed projects in workspace<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16834">16834</a>: ObjectCollectedException opening java editor in target workbench<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16844">16844</a>: Debugger source lookup dialog needs viewer label<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16848">16848</a>: Object collected exceptions<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 21, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12740">12740</a>: Wierd behavior when debugging standalone SWT example<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16037">16037</a>: JavaArgumentsTab layout<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16328">16328</a>: JRE home directory" field on "Add JRE" dialog is too short<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16284">16284</a>: Launch configs prompt for unsaved changes when there are none<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16406">16406</a>: JavaArgumentTab: directory fields should be at the bottom<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16306">16306</a>: ConcurrentModificationException during HotSwap<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12966">12966</a>: Remote debugging with Sun J2ME Wireless Toolkit fails<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16350">16350</a>: NativeMethodException from line location request<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16408">16408</a>: UnsupportedOperation Exception while hovering<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9659">9659</a>: Use book title capitalization in tooltips and button text<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16450">16450</a>: Java Model Exception out of ActionDelegateHelper<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15825">15825/a>: orphaned scrabook launch configs<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16428">16428</a>: Confusing error when trying to launch when plugin missing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4383">4383</a>: Artwork required<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15251">15251</a>: Support to navigate from JavaDoc error to type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16439">16439</a>: NPE out of ManageMethodBreakpointActionDelegate<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16417">16417</a>: JavaLaunchActionSet not contributed to all Java perspectives<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16446">16446</a>: Can't launch programs on Linux with default java executable name<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 19, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>The actions used to create and launch a Java application have been moved to their
			 own action set named "Java Launch". The action set will be visible in new Java or Debug perspectives.</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14877">14877</a>: NPE on workbench close<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15881">15881</a>: ClassCastException trying to open launch configuration dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12966">12966</a>: Remote debugging with Sun J2ME wireless Toolkit fails<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15913">15913</a>: No space in JavaConnectTab argument group<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15740">15740</a>: Get rid of JRE variables on "Installed JRE" page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10838">10838</a>: Java launch config: don't search entire project for a main class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15197">15197</a>: Prompt when > 1 config for selected type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15949">15949</a>: JDIDebugTarget can resume threads which hit a breakpoint early<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15867">15867</a>: JavaConnectTab problems: Mneumonics, NumberFormatException<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15976">15976</a>: ATTR_SOURCE_PATH_PROVIDER equals ATTR_CLASSPATH_PROVIDER<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15862">15862</a>: Cannot add internal jar to classpath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11819">11819</a>: Default JRE and javadoc location<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16164">16164</a>: Missing mneumonics on the AddVMDialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16151">16151</a>: Move Run actions to the top of the Run menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16150">16150</a>: Create Java Launch Action Set<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15739">15739</a>: Show breakpoint condition in hover help<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15969">15969</a>: Promote standard classpath/sourcepath providers to API<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15699">15699</a>: Non-deterministic layout on "connect tab"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16068">16068</a>: Support to add library to source/class/boot path<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16064">16064</a>: Source location persistence should use XML<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16100">16100</a>: Add Java Exception Breakpoint should also be on menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15792">15792</a>: VMDisconnectedExceptions in log<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16193">16193</a>: NPE in JavaConnectTab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16196">16196</a>: SnippetEditorActionContributor#setActiveEditor can be called with null<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15885">15885</a>: Revert button not enabled after changes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16218">16218</a>: Asked to save changes when none<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11601">11601</a>: console hangs while displaying long strings without crlf<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16219">16219</a>: re-setting "use default classpath" does not work<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16252">16252</a>: DebugException: Marker id: 19 not found<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16313">16313</a>: NPE out of StandardSourcePathProvider<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13524">13524</a>: Console doesn't send Ctrl-Break to remote program<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16346">16346</a>: Can add same container > 1 times to class/source path<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16353">16353</a>: "Launch" java applications do not honor build if required<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16257">16257</a>: Debug plugin trying to restart on shutdown<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16065">16065</a>: JRE resolution for variables/containers<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15200">15200</a>: Notification of JRE changes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16237">16237</a>: HCR not supported notification<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16027">16027</a>: "Terminate failed" error messages are backwards<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16224">16224</a>: scrapbook displays incorrect result when return type is string<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16358">16358</a>: Advanced actions creating dialogs on the wrong shell<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16192">16192</a>: JDT Launch Configurations dialog Arguments tab Apply disabled<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14082">14082</a>: Launch Configurations -> Environment -> Classpath<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 14, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>API for IVMConnector has changed. A vm connector now accepts a map of arguments from which to
			establish a remote connection to a VM.</li>
			<li>New extension point and launch configuration attribute to control classpath and
			 source lookup path computation. See extension point "org.eclipse.jdt.launching.classpathProviders",
			 <code>IJavaLaunchConfiguration.ATTR_CLASSPATH_PROVIDER</code> and 
			 <code>IJavaLaunchConfiguration.ATTR_SOURCE_PATH_PROVIDER</code> </li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15522">15522</a>: Rename Debug menu to "Run"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15609">15609</a>: Fix deprecated getSourcePosition() call<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15662">15662</a>: Display of "null" shows nothing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15531">15531</a>: Support "default JRE"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15476">15476</a>: Action for "Add Watchpoint"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15461">15461</a>: Configs created with convenience actions do not switch persp.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11403">11403</a>: Request timeout<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15668">15668</a>: Stack frame with no src selects line number in current editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15667">15667</a>: Adding a Jar to the src lookup path of a remote launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15666">15666</a>: Folder added to src lookup of remote launch has JAR icon<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13453">13453</a>: Mneumonics on launch config Common tab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7245">7245</a>: Debugger source lookup should be controlled by launch config<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15469">15469</a>: Unbounded cache in ManageWatchpointActionDelegate<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15738">15738</a>: JRE for scrapbook<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15702">15702</a>: Moving up in the Source tab for remote launch configuration is incorrect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15835">15835</a>: Scrap book does not work<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15481">15481</a>: Abbreviation on the JavaMainTab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15622">15622</a>: Need a way to get current tab from configuration dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15605">15605</a>: Contribute the JDT debug action set to all Java perspectives<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15478">15478</a>: Auto-toggling of ShowQualified action in VariablesView<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12300">12300</a>: Sharing launch config difficult because of VM_INSTALL_ID<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15581">15581</a>: Move source lookup resolution to AbstractJavaLaunchConfigurationDelegate<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15195">15195</a>: Attach source action<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14977">14977</a>: Working directory should support project relative path<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13567">13567</a>: Change/Enhance "IVMConnector" extension point<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15633">15633</a>: Incorrect enablement for ManageBreakpointActionDelegate hierarchy<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15372">15372</a>: NPE launching target eclipse<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15678">15678</a>: Drop to Frame not updating UI/stack frames correctly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10965">10965</a>: Working directory for JavaSnippetEditor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15445">15445</a>: surprising behavior after hitting 'run'<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15601">15601</a>: Exception breakpoints set on inner class exceptions<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13028">13028</a>: F3 in Java editor caused NPE in snippet editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15765">15765</a>: Getting working directory changed/restarting evaluation context when there is not context<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15846">15846</a>: ManageWatchpointAction doesn't handle configs with no projects<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11893">11893</a>: Launch configuration dialog Accelerator conflict<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15346">15346</a>: UnsupportedOperationException in JDIThread.computeStackFrames<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10971">10971</a>: Stepping resumes instead<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12561">12561</a>: Exceptions in log: AddBreakpointAction#selectionChanged<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14108">14108</a>: Timing issue with evaluation and thread state<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15866">15866</a>: NumberFormatException if timeout number set to big<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>May 8, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14836">14836</a>: BIDI:Scrapbook editor: bad display of adjacent Hebrew or Arabic syntactic units<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12823">12823</a>: Hard to find JRE for launching java applications<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13074">13074</a>: NPE evaluating fully qualified array declaration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14972">14972</a>: Editor ruler actions do not update properly on working copy<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15064">15064</a>: Instanceof evaluation is broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13005">13005</a>: "Run to return" should be "Step Return"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13042">13042</a>: NPE after killing Java process<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13632">13632</a>: unknown remote host just throws exception<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14994">14994</a>: Unsigned right shift of char, byte, or short is broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14996">14996</a>: null instanceof Object throws ClassCastException<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15154">15154</a>: Shortcut for Add breakpoint conflicts with Build All<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15184">15184</a>: number format exception<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13584">13584</a>: Attempting to create breakpoints while resource tree locked<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15383">15383</a>: Scrapbook launching failed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14906">14906</a>: Single-click java launching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15017">15017</a>: Debug code completion missing "later" proposals<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14997">14997</a>: Evaluations with null on top of stack show no result<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11405">11405</a>: Launch Timeout<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15437">15437</a>: ReferenceType#visibleMethods doesn't conform to the spec<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14728">14728</a>: Scrollbars on Launch Configurations/Classpath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15000">15000</a>: Evaluation instruction resource bundle keys contain the = char<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15009">15009</a>: More information in breakpoint properties dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15361">15361</a>: "Suspend on compilation errors" doesn't work<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15377">15377</a>: Add: Add Method Breakpoint to the Debug menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15458">15458</a>: Wrong class name format when doing eval of static method<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15132">15132</a>: Breakpoints View: Hide Qualified Names option not saved on eclipse shutdown<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14895">14895</a>: Toggle button tooltip text should be static<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13297">13297</a>: new launch config: ui problem with tab switching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13984">13984</a>: Stale root tree items in debug perspective view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13448">13448</a>: Difficult to tell what is wrong with launch configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15016">15016</a>: Main type search could be primed with current text<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14753">14753</a>: Reverse order of configuration types in New configuration menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15102">15102</a>: NPE attempting to launch<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 30, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Environment variables have been removed from Java launch configurations. A java program
			cannot access system environment variables, thus the ability to set them provides little benefit.</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14410">14410</a>: Java breakpoint properties dialog missing error icon<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14158">14158</a>: Launcher Configurations modified by UI<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14324">14324</a>: JDI client does not convert primitive method arguments to the correct type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12748">12748</a>: Snippet editor in debug perspective<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13074">13074</a>: NPE evaluating fully qualified array declaration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14569">14569</a>: Remove Run... and Debug... from the Packages View<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14507">14507</a>: J9 launcher doesn't prompt to retry<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13674">13674</a>: ClassNotPreparedException from uninitialized inner types<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14315">14315</a>: Debugger code completion does not handle array types properly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14879">14879</a>: Run to Line enabled for the SnippetEditor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9690">9690</a>: Need accelerator for "run" in snippet editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9848">9848</a>: JavaSnippetEditor toolbar actions not disabled during evaluation<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14882">14882</a>: New launch configs with a project but no main type are not fully initialized<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14225">14225</a>: Display view should have Find/Replace<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7004">7004</a>: DCR: Deselect All button on step filter preference page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14718">14718</a>: Display view doesn't inherit java editor's background color<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9653">9653</a>: open type/open exception - should be consistent w.r.t. progress reporting<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13427">13427</a>: Unchecked exception in breakpoint condition not indicated<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14912">14912</a>: NPE attempting to Run to line<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14805">14805</a>: No free return values in expression eval<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14925">14925</a>: Return statements do not stop evaluation<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13193">13193</a>: launch configs too easy to delete one<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13418">13418</a>: ClassCastException on terminate of program with conditional breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12700">12700</a>: Method entry breakpoint enabled when neither exit or entry<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13337">13337</a>: launch configs: creation could be made simpler<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13630">13630</a>: Single launching problematic when ambigious on a file type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12937">12937</a>: No evaluation imports for binary types with attached source<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14027">14027</a>: Disallow evaluation in the context of an array instance<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8251">8251</a>: Present more information when Display fails<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14958">14958</a>: Internal Error exiting workbench<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=15193">15193</a>: Source resolution for alternate runtime JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14266">14266</a>: Scoping exception breakpoint table not scrollable<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 23, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8966">8966</a>: Debug Perspective is not automatically select the servlet thread<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14273">14273</a>: AbstractJavaLaunchConfigurationDelegate has misspelled method<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14069">14069</a>: Rapid stepping & toString<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13525">13525</a>: Error evaluating with no public class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13380">13380</a>: Expression label shows the underpinnings of evaluation<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13016">13016</a>: Condition breakpoint evals update expression/var view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13352">13352</a>: Condition ignored/no errors reported<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14104">14104</a>: Eval of local instance var slow<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12592">12592</a>: Should disable all breakpoints while invoking toString()<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13608">13608</a>: Display view code complete does not include templates<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14188">14188</a>: Display view doesn't update global actions until context menu used<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1726">1726</a>: Migrate test suite to use workbench framework (1GKDB4Y)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1742">1742</a>: Moving scrapbook page to other project does not update available packages (1GKZ2FO)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12636">12636</a>: Unable to get evaluation context for Scrapbook pages<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14296">14296</a>: Static and Final actions in popup menu have greyed out icon<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14250">14250</a>: use workbench element list selection dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14295">14295</a>: Scrapbook pages get confused when more than one started..stopped<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14326">14326</a>: Error in RunToLineAction.init<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12708">12708</a>: NPE in Add Watchpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14045">14045</a>: Deadlock exiting workspace<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10444">10444</a>: Reuse the same editor in Debug Perspective<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14254">14254</a>: NPE while debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13377">13377</a>: Reporting errors in snippet interpretation in the log<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13389">13389</a>: Condition breakpoint with no condition<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13292">13292</a>: SAXParseException in launch config edit (empty .launch file)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8111">8111</a>: IncompatibleThreadStateException displayed in Detail pane when thread manually suspended<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14107">14107</a>: Second target incorrectly breaks on conditional<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14025">14025</a>: NPE on evaluation of array.length<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11934">11934</a>: exception found in the log<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 18, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8362">8362</a>: Usability: Add exception computes hierarchy on each key stroke<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13792">13792</a>: Performance improvement when changing JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13720">13720</a>: Breakpoint ruler actions do not work on class files with source<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13684">13684</a>: CoreException thrown when no project is specified<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5162">5162</a>: 1.0 -- JSP breakpoints don't get removed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5495">5495</a>: Breakpoint not installed if filename has underscore<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9079">9079</a>: Pattern breakpoints show as unknown<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13441">13441</a>: Rename launch config, then save leaves wrong selection<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12657">12657</a>: see stack trace<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13336">13336</a>: Failed remote launch left in incorrect state in UI<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13866">13866</a>: ClassCastException with instanceof conditional breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9655">9655</a>: open type/open exception - should be consistent w.r.t. empty entry<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13162">13162</a>: breakpoint properties dialog details<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13920">13920</a>: NPE evaluating in local type in field declaration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13798">13798</a>: Disallow evaluations that require local type signatures<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9523">9523</a>: redundant menu entry in variables view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12997">12997</a>: AST eval can use java debug model directly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13414">13414</a>: Tight loop with conditional breakpoint locks up UI<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13104">13104</a>: AST evaluation engine should reuse evaluation thread<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13015">13015</a>: stepping to a line with a conditional breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13363">13363</a>: Conditional Breakpoint evaluation failed dialog missing accel<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13169">13169</a>: Missing description on Java -> Debug preference pages<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13883">13883</a>: DebugException found in the log<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=14060">14060</a>: stepping slow - timer takes 99% of CPU<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 11, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12665">12665</a>: ClassNotLoaded JDI exception during conditional breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13423">13423</a>: HCR failure notifications aren't being sent to the UI<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13444">13444</a>: Tooltip incorrect for add package import in Java snippet editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13364">13364</a>: No visual indication that a breakpoint has a condition set<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13173">13173</a>: No console output in Java Persp.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9861">9861</a>: Double-click does not work for strings in scrapbook page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=13388">13388</a>: Exception evaluating method with array type parameter<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 9, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Breakpoints can now be configured (enabled, disabled, etc.) from the ruler in java editor</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12640">12640</a>: Workspace runnable not run correctly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12350">12350</a>: Class header javadoc in eval ast classes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9290">9290</a>: Feature: dynamic pattern breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11514">11514</a>: Feature: support WAS 5.0 JSP debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12383">12383</a>: Relaunch last aborted with cryptic message when JRE moved<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12793">12793</a>: Spurious dialog asking to save changes in launch config dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12695">12695</a>: Need to get full set of breakpoints hit from thread<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1543">1543</a>: folders included in 'choose package' dialog (1GAJD9E)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8265">8265</a>: AssertionFailedException during code completion in JavaSnippetEditor, DisplayView<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11569">11569</a>: Method breakpoint cause stop on anonymous and local subtype method<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12784">12784</a>: String.startsWith(String) creates bad compilation error<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10736">10736</a>: Breakpoint#ensureMarker failing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12208">12208</a>: NPE in AST eval<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10758">10758</a>: utilize classpath variable initializers<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11603">11603</a>: Can't add method breakpoints to inner types at runtime<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12591">12591</a>: Internal error hovering while native on stack<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12609">12609</a>: Eval with error causes eval timeout<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1637">1637</a>: Rollover icon the same as flat icon (1GF64JZ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1681">1681</a>: make Java Debug UI a seperate plugin (1GIGG3X)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9683">9683</a>: Open on Type in console does not work on anon inner types<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8322">8322</a>: Detail evaluation timeout overwrites previous value<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11382">11382</a>: Null Pointer Exception opening preferences for Java->Installed JRE's<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8804">8804</a>: Should not ask to save when running<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12633">12633</a>: NPE evaluating in static context<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11128">11128</a>: Access to a field in a particular super-type through IJavaObject<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3578">3587</a>: DCR: Enable/Disable a breakpoint in vertical ruler of Java Editor (1GFQ6DY)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10921">10921</a>: Turn on J9 JIT<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>April 2, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>An extension point that represents different kinds of connections to remote VMs. See org.eclipse.jdt.launching\doc\org_eclipse_jdt_launching_vmConnectors.html</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12389">12389</a>: Error message at double-click on empty console<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1546">1546</a>: Remote Evaluation (AST evaluation)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8157">8157</a>: ProjectBuildWatcher is too invasive<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12563">12563</a>: Extensible remote connect type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12448">12448</a>: Overwriting launch configs with same name<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12452">12452</a>: NPE evaluating from anonymous innter type referencing enclosing type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12433">12433</a>: NPE code assisting with inner type in expressions view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9155">9155</a>: Hide Final Fields should be Hide Final Variables<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>March 28, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3977">3977</a>: Launching from projects with binary/jars (1GFDBYC)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12209">12209</a>: AST Eval engine API not fully implemented<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12204">12204</a>: Not handling moved JREs properly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6615">6615</a>: IOException running test suite<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>March 26, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Scrapbook pages can set imports to provide context for the page</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1723">1723</a>: No code assist in display view for binaries with source (1GLE0F6)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6089">6089</a>: display view code assist cotext should be receiving type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6955">6955</a>: Java launch config should support classpath/bootpath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8576">8576</a>: rt.jar shoud not be removed from bootclasspath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11196">11196</a>: Launch config: rt.jar on classpath<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11958">11958</a>: step filtering pref page - shoudl not use compilation unit icon for filters<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9079">9079</a>: Pattern breakpoints show as <unknown> <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12012">12012</a>: J9 plugin needs to be updated<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10281">10281</a>: ClassPrepare events swamping system<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8971">8971</a>: Function keys in custom perspective does not work<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3877">3877</a>: Fields in installed JRE dialogs should not be bordered text<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11937">11937</a>: Switch-to-perspective wdigets on Common Tab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11945">11945</a>: Run mode perspective not applicable to debug-only config type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10437">10437</a>: Make use of ListIterator in JavaBreakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1569">1569</a>: Would like to inspect from the context of an inspect result (1GDKNZ7)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3734">3734</a>: Update configs as resources moved/deleted<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11997">11997</a>: IllegalArgumentException in ManageWatchpointAction<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12182">12182</a>: Can step return logging internal errors<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12027">12027</a>: Breakpoints requests are not created for interfaces<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12222">12222</a>: NPE attempting to create Remote Java Application configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1757">1757</a>: HotSpot VM -server argument (1GLCPDH)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11938">11938</a>: NPE in JavaSourceLocator when remote debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12211">12211</a>: copyright statements incorrect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1633">1633</a>: Scrapbook imports<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=12250">12250</a>: Duplicate launch configs appear in dialog<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>March 18, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10130">10130</a>: Launch Configurations "navigation tree" should start expanded<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9756">9756</a>: Debug/Run history menu items should be disabled if no history yet<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11297">11297</a>: JavaMethodBreakpoint always stops at entry and exit<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7963">7963</a>: Add JRE dialog incorrectly flags correct JRE location<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8772">8772</a>: Infinitely looping stack trace in target pgm locks UI<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10566">10566</a>: Copy value in variables view should work with CTRL-C<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5534">5534</a>: Add failed launches to the history<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10919">10919</a>: Scrapbook can't print arrays<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11390">11390</a>: JavaSourceLocator has incorrect class in plugin.xml<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11391">11391</a>: Java launcher verifies the java project before needed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10850">10850</a>: more JRE to environment tab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11242">11242</a>: annoying prompt for saving a launch configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11246">11246</a>: Exception during launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10805">10805</a>: NPE in JavaDebugOptionsManager if source name is null<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10838">10838</a>: Java launch config: don't search entire project for a main class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11476">11476</a>: Exception scope wording<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11478">11478</a>: Inspect is broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11092">11092</a>: Stepping performance revisited<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10595">10595</a>: Debug into non-JavaBuildPath no longer works<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11265">11265</a>: Need replacement source locator API<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9204">9204</a>: NPE in Java Launch Configuration Delegate<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>March 12, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Java Watchpoints can be added from the variables view or the expression view.
			 This feature was previously only available from the outliner</li>
			<li>Launch configurations can be edited by selecting the new "Run/Debug Configurations..."
			 options from the Run/Debug pulldown menus.</li>
			 </ul>
			 <p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10839">10839</a>: Java launch config: main type checks are too constraining<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10816">10816</a>: Debugging tries to show itself in resources perspective(?)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10484">10484</a>: Index out of bounds in JavaEnvironmentTab<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10784">10784</a>: Launch configurations: Edit button enabled when no environment var to edit<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10490">10490</a>: Java Main tab invalidates on inner class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9073">9073</a>: Not prompted for build on unsaved resource<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11031">11031</a>: Double save confirmation on launch configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11034">11034</a>: Launch configurations prompting for save when no changes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10991">10991</a>: Launch configurations: double click edit enviroment vars<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10096">10096</a>: Eclipse not aware of launched JVM (JRockit 3.1.3)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11060">11060</a>: JDIFieldVariable.setValue(IValue) fails for static fields<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10894">10894</a>: Unable to get a super field from a IJavaObject object<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10956">10956</a>: Default watchpoint settings<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7735">7735</a>: Enhancement Request: double-click stack trace to reach source<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10811">10811</a>: Deregistered launches not removed by JavaHCRManager<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10973">10973</a>: Scoping JavaExceptionBreakpoints not working correctly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11004">11004</a>: Step filters and exception breakpoint filters need better sorting<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9501">9501</a>: Hidden watchpoint support<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7507">7507</a>: debugger keyboard shortcuts do not work in 20020109<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10640">10640</a>: NPE on empty workspace with launch configurations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10894">10894</a>: Unable to get a super field from a IJavaObject object<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11163">11163</a>: launcher on linux looks for 'javaw.exe' instead of 'javaw'<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11127">11127</a>: Installed JRE page should detect removed JREs<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10771">10771</a>: JDIThread and interrupted during evaluation<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10220">10220</a>: Need menu options to edit launch configurations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11030">11030</a>: JDIStackFrame data caching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11118">11118</a>: Termination performance<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11161">11161</a>: Resource tree locked<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10131">10131</a>: A "Launch Configurations" configuration should be showable on the Run/Debug menu...<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11101">11101</a>: NPE on shared launch configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10896">10896</a>: Java breakpoints must have HANDLE_ID attribute set<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=11124">11124</a>: Launch configurations do not hanlde removed JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10292">10292</a>: Errors terminating debugged process<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10693">10693</a>: vm crash during debugging<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>March 5, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Java launch configurations have been moved from the UI plug-in (org.eclipse.jdt.debug.ui)
			 to the "headless" launching plug-in (org.eclipse.jdt.launching). This facilitates headless,
			 programmatic launching. This is a breaking API change. As well, pre-existing launch configurations
			 are deleted on workbench startup, as they are incompatible with the chages made.</li>
			<li>Java Exception breakpoints can be scoped.  Package, type and limited regular expressions can
			be set as the scope for the breakpoint.  The breakpoint is only "hit" if the exception is generated
			from one of these locations.  Can be set off of the properties dialog for the breakpoint.</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9171">9171</a>: NPE attempting JDI test TestAll<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9715">9715</a>: Java Connect tab "browse" button has no ellipsis<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10672">10672</a>: In DebugUIPlugin method call Launch.getLauncher can return null<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10671">10671</a>: Need callback by LaunchManager to listeners when a thread terminates<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9845">9845</a>: Remove All action activation in ExpressionsView<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6741">6741</a>: Disable 'drop to frame' when we know it will fail<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9854">9854</a>: TypeImpl.classNameToSignature fails for float[]<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10624">10624</a>: GUI Blooper: "Open on..." in debugger s/b "Open", "Drop To Frame"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1668">1668</a>: Stop on Uncaught exception should be scoped (1GHOUOQ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4937">4937</a>: Display view contents not restored properly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10594">10594</a>: EventDispatcher wrappering all dispatches in Workspace runnables<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7013">7013</a>: Re-work display/inspect/run<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3503">3503</a>: Can't set execution arguments on a type in the outliner (1G43JUN)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9881">9881</a>: java 'debug options' pref page - buttons too small<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5822">5822</a>: Customizable run/debug profiles <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3851">3851</a>: Runnables on build path as .class not detected (1GEX6I0)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1550">1550</a>: DCR: Launcher Binding (1GBPW6T)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10686">10686</a>: Double clicking in vertical ruler to add breakpoint: breakpoint does not show<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8572">8572</a>: Step filtering should filter class loader by default<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9896">9896</a>: Wrong warning in Add/Edit JRE dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10147">10147</a>: Moving VMs is not handled well.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10772">10772</a>: Single-click launching generates exception on class with no main method<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9678">9678</a>: Unable to enter & save classpath entry<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10638">10638</a>: Launch configuration wizard not honoring selection<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10644">10644</a>: NPE pressing apply button on launch configuration with no name<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10645">10645</a>: NPE pressing apply button twice<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10646">10646</a>: Can add empty environment variable for launch configurations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10782">10782</a>: Exception applying changes to Launch configuration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9241">9241</a>: API - java launch configs whould be headless<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10641">10641</a>: NPE verifying name in launch configurations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10649">10649</a>: Title comment changes setting working directory<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1585">1585</a>: Java launcher: Don't prompt for element to launch if there's only one (1GE6S2P)<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>February 28, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10218">10218</a>: breakpoint change mechanism<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1695">1695</a>: DCR: support process/thread specific breakpoints (1GIYJTQ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10009">10009</a>: Creating image descriptor registry on shutdown<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10252">10252</a>: Class StandardVM doubles fields from super class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9778">9778</a>: Console title not updated on launch removal<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10417">10417</a>: inspect/display to not work in snippet editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10255">10255</a>: Single click launching should not be the default<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10424">10424</a>: NPE in snippet editor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9685">9685</a>: jdi isObsolete() called 13 times when clicking on stack frame<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10432">10432</a>: Deleting a resource wipes out launch configuration history<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9695">9695</a>: Snippet editor fails evaluations on deprecation warnings<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9229">9229</a>: Console terminate not enabled in Java perspective<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10437">10437</a>: Make use of ListIterator in JavaBreakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7803">7803</a>: Problems with breakpoints after changing JRE<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10454">10454</a>: Adding JRE through launch configuration dialog does not persist<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10154">10154</a>: Breakpoints with thread filter should be labeled as such<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4294">4294</a>: Can't distinguish b/w UIMain's in Debug/Running Man Menus (1GKZDGW)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4296">4296</a>: Can't set Program Arguments from Outline (1GKZDW8)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8096">8096</a>: run java-application always asks for the default launcher<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1528">1528</a>: snippets: can start SWT program twice (1G47CME)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10242">10242</a>: Launch/Debug history contains a number<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>February 26, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Launch configurations allow execution directory to be specified</li>
			<li>Launch histories are maintained for both launching styles during the transition.</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9493">9493</a>: Cannot launch with configuration fully specified<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9830">9830</a>: Launch config arguments inserted prior to class on command line<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9475">9475</a>: NPE out of LaunchManagerVisitor creating a launch configuration for callback<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9902">9902</a>: ImageDescriptorRegistry must empty hash map in dispose<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5859">5859</a>: Execution Directory<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10198">10198</a>: Remove all terminated not enabled after terminating run<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10214">10214</a>: Add transitional support for history with both launching styles<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9846">9846</a>: No source lookup during debbing available in integration build 20020212<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=10202">10202</a>: Have to reselect terminated debug target to enable "Remove all Terminated" action<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8435">8435</a>: Variables disappear on 1.4rc if showing details pane<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1729">1729</a>: HCR with compilation error (1GKF820)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6916">6916</a>: DCR: allow to set timeout on remote debug connections<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1735">1735</a>: Need breakpoint actions in editor ruler (1GKPU71)<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>February 14, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9668">9668</a>: Method breakpoints enabled for source methods<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9456">9456</a>: AssertionFailedException attempting to draw overlays for breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9618">9618</a>: Terminated targets not updating<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9626">9626</a>: ConcurrentModificationException in JDIDebugTarget#canSuspend()<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9649">9649</a>: Can't rebuild all - never returns<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9556">9556</a>: NPE in JavaRuntime.getDefaultVMInstall<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9591">9591</a>: exception in compiler pref page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9737">9737</a>: Invalid thread access initializing JavaPlugin<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>February 12, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>The Java debug options preference page is now presented as part of the Java preferences</li>
			<li>Basic icons and there support has been removed</li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7964">7964</a>: Move Java debug options to Java preference page section<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9124">9124</a>: NPE using launch configurations<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8683">8683</a>: NPE after suspending VM attempting to step on system thread<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9122">9122</a>: debugging is extremally slow (20020129 + latest)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8252">8252</a>: Label for inspected expression incorrect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1717">1717</a>: Debug Model & Model Presentation issues (1GK29FE)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8746">8746</a>: Threads showing as suspended when not -- mutlithreaded app<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9316">9316</a>: Invalid thread access<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8337">8337</a>: HotSwap: Two error dialogs redefining class during debug on 1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9111">9111</a>: Invalid thread access running test suite<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6370">6370</a>: Breakpoint Properties Dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9327">9327</a>: JavaDebugOptionsManager startup loading breakpoints during resource changed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6724">6724</a>: Hit Count indication in debug UI confusing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7012">7012</a>: AddBreakpointAction not correctly updated when breakpoint added by other action<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8481">8481</a>: Auto-breakpoint on compilation errors<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9122">9122</a>: debugging is extremally slow (20020129 + latest)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9320">9320</a>: Usability: Disabled breakpoints shouldn't show as installed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9387">9387</a>: AddBreakpointAction generates invalid thread access<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9396">9396</a>: NPE in add breakpoint action<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9213">9213</a>: "Persisted" property on breakpoints does not make sense<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8301">8301</a>: Evaluation actions need in the context menus of the details panes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8250">8250</a>: Inspect and Display Actions not enabled correctly<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8993">8993</a>: ObjectCollectedExceptions filling up the log<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1587">1587</a>: Need support to set an exception breakpoint from a string (1GE8HQO)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1587">1587</a>: JavaDebugOptionsManager attempting to modify resource in resource change callback<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7973">7973</a>: JRE variables on installed JRE's pref page confusing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6743">6743</a>: Uncaught exception preference should have group title<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7967">7967</a>: Java UI source locator should be API<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6297">6297</a>: Autodetected Standard VM JRE entry disappears when running on custom VM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9353">9353</a>: <Not responding> stack frame after suspending VM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1659">1659</a>: Questions dealing with UI (1GGNR38)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9129">9129</a>: console - open on type does not do anything<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1716">1716</a>: Editor opening during debugging (1GK266A)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1677">1677</a>: Breakpoint hitcount inconsistency (1GI8ZL6)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8458">8458</a>: Need "Inspect" action in variables view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9310">9310</a>: Accellerator Keys not working in Debug Perspective<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8690">8690</a>: Delete key should work in Launch menu<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9430">9430</a>: Process.getInputStream().ready() never succeeds<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>February 5, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8666">8666</a>: TimeoutException during terminate<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8616">8616</a>: Feature: Suspend all threads option<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8634">8634</a>: Exception breakpoints not persisted<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7804">7804</a>: Internal VMDisconnected trying to delete event requests after VM is gone<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8953">8953</a>: Editor opens on save if debugger is stopped at breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8013">8013</a>: No failure message when frame dropping failed after HotSwap<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8323">8323</a>: Debugger Source Lookup dialog : minor fixes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6845">6845</a>: Add source code for JDI interfaces<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8054">8054</a>: HCR failure: many stacks of the same method.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8246">8246</a>: Incorrect spacing in label for DebugTarget when terminated<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8844">8844</a>: Suspend policy showing twice for watchpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4048">4048</a>: Mnuemonic problems (1GH3218)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8159">8159</a>: LaunchView toolbar actions not updated on long steps<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8315">8315</a>: Double clicking on installed JRE should allow edit<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8920">8920</a>: Out of synch type tracking is slow<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6411">6411</a>: Auto-detect VM Install when required<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8435">8435</a>: Variables disappear on 1.4rc if showing details pane<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6408">6408</a>: Attempts to set breakpoint on unsaved resource fails<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8702">8702</a>: Problems using alternate JDI client<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8870">8870</a>: Pluggable JDI client<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1521">1521</a>: StringBuffer representation (1GE3BFA)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9012">9012</a>: StringIndexOutOfBoundsException in OpenOnConsoleTypeAction.parseSelection<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9026">9026</a>: Compilation error breakpoints are showing in breakpoints view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9056">9056</a>: API - suspend on uncaught exception<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9055">9055</a>: API - step filters should be configurable per target<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=9079">9079</a>: Pattern breakpoints show as <unknown><br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8803">8803</a>: execution arguments: add current directory setting<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8814">8814</a>: Store VM Arguments in repository<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8816">8816</a>: Disappearing variables<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8830">8830</a>: Step over jumps to 4 frames below<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1702">1702</a>: Leave variables expanded on resume (1GJHLYK)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8914">8914</a>: preference page strings missing in 20020129 + latest<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1748">1748</a>: property sheet and breakpoint not in synch (1GL2Q6E)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1616">1616</a>: Vector evaluation error (1GFJA0T)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1539">1539</a>: Internationalization of integers (1G8U8KN)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8261">8261</a>: Scrapbook dies with JDK1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8728">8728</a>: SDK should only be auto-detected the first time<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 29, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Method entry and exit breakpoints can be set on binary methods. See 
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7859">7859</a>: Feature: method exit breakpoints<br></li>
			<li>A VM can be suspended/resumed.  See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7860">7860</a>: Feature: support suspend/resume of VM<br></li>
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8422">8422</a>: Convenience Constructor for JavaSourceLocator<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8086">8086</a>: Debug -> Run results in different bahavior than Ctrl-F11<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7405">7405</a>: User defined step filters should have validity check<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7859">7859</a>: Feature: method exit breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7880">7880</a>: Scrapbook page making IDE super slow<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8053">8053</a>: Debug view actions do not update after evaluation completes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8457">8457</a>: Stepping in obsolete methods should be disabled<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7606">7606</a>: Launch configuration tests are failing<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5666">5666</a>: Breakpoints do not work on class with native methods<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8176">8176</a>: Mnemonic Collision in Console View<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8312">8312</a>: Tooltips for step filtering should use title capitalization<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8395">8395</a>: Smart drop-to-frame ignores anonymous inner class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8127">8127</a>: Outline View has mnemonic collison<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7860">7860</a>: Feature: support suspend/resume of VM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8697">8697</a>: Hit count ignored on breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8189">8189</a>: Each debug launch opens new Debug Perspective<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8364">8364</a>: Breakpoints aren't appearing in BreakpointsView<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8144">8144</a>: Loss of connection to 1.4 VM<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8139">8139</a>: Variables collapse when stepping on 1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7508">7508</a>: Selfhosting problems using JDK 1.4 to run target and host<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8579">8579</a>: Toggling detail pane with JDK 1.4 confuses debugger<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8488">8488</a>: Display/Inspect on Debugger gives "ClassNotFoundException"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8627">8627</a>: method arguments to class in jar<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8654">8654</a>: Debugger won't show source stopped not in debugged project<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 24, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8388">8388</a>: NPE from HCR Manager<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8055">8055</a>: HCR failure: drop fails in following code<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8012">8012</a>: Smart frame dropping is slow, and no busy cursor<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8265">8265</a>: AssertionFailedException during code completion in JavaSnippetEditor, DisplayView<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8056">8056</a>: Walkback during HCR in host.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8404">8404</a>: HCR does not pop frames with non-fully qualified named parameters<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8154">8154</a>: AddExceptionDialog incorrectly reporting exceptions not subclasses of Throwable<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8391">8391</a>: Cannot add exception breakpoint<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 23, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8157">8157</a>: ProjectBuildWatcher is too invasive<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3847">3847</a>: Runing a program fails with closed project on classpath. (1GEWKFO)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=8086">8086</a>: Debug -> Run results in different behavior than Ctrl-F11<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 22, 2002, - Problem Reports Fixed</h3>
			<ul>
			<li>Java breakpoint creation has changed to not require the use of Java elements.
			Unfortunately, the resulting changes invalidates breakpoints created previous to this build.
			The out of date breakpoints will be deleted at startup.
			See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7807">7807</a>: Breakpoint creation API should not use java elements</li>.
			<li>HotSwap enhancement - when performing a hot swap, the debugger only pops frames of methods
			 that have been changed.</li>
			 </ul> 
			 <p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5854">5854</a>: Breakpoint marker deleted without notifying breakpoint object<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6862">6862</a>: Adding watchpoint in outlineview can be incorrect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7631">7631</a>: Adding watchpoint from packages view associates with project<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7766">7766</a>: Scrapbook output not shown for J9<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6489">6489</a>: Plugin version numbers incorrect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1728">1728</a>: No busy cursor for long operation changing primitive type rendering<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1651">1651</a>: (minor) Method entry breakpoints are shown in the javadoc comment<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7809">7809</a>: AddExceptionDialog makes illegal access to internal class<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1699">1699</a>: Display window enhancement<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1713">1713</a>: Icon for "Show type/qualified names" could be clearer (1GJY72V)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5653">5653</a>: DCR: Debugger should catch uncaught exception by default<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7002">7002</a>: Suspend on uncaught exception does not expose the type of the exception<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7862">7862</a>: Feature:hidden breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7807">7807</a>: Breakpoint creation API should not use java elements<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7915">7915</a>: breakpoint marker attributes need qualified names<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7310">7310</a>: JDI timeout exception in debugger<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6745">6745</a>: Step filtering secondary dialogs (Add Type...)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7947">7947</a>: JDIDebugModel still using types for breakpoints<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6130">6130</a>: Snippet editor/ display view do not immediately take new prefs<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7457">7457</a>: JDK1.4 given a source root of "src"<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1718">1718</a>: Concurrent modification in JDI cache (1GK7HTK)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5587">5587</a>: Step Over jumps to caller<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6063">6063</a>: Snippet & Display should catch up with changes of JavaSourceViewerConfiguration<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7858">7858</a>: Feature: gets super class for an IJavaClassType<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7651">7651</a>: OpenOnConsoleTypeAction does not work for inner types<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7619">7619</a>: Walkback while debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6661">6661</a>: InternalException when exiting on jdk 1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7404">7404</a>: Add filter for step filtering broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1689">1689</a>: Debugger selects incorrect stack frame after HCR (1GIQ56J)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1595">1595</a>: README: Exception while stepping (1GELEBF)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1644">1644</a>: How do I debug code in the scrapbook. (1GF815W)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1538">1538</a>: Watch List - expressions and adding in advance (1G86IIJ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6388">6388</a>: Variables view's static and field buttons are backwards<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6814">6814</a>: Empty error dialog when opening type from console<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7737">7737</a>: Changing code while debugging seems to generate an automatic build, however the running code doesn�t change until a re-launch<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7765">7765</a>: Support skipping over certain classes when debugging<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1544">1544</a>: Unable to terminate thread until... (1GAJOUQ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7516">7516</a>: NPE when attempting to start a remote Java debug<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=4985">4985</a>: Icon for show package names in breakpoints list is backwards<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6549">6549</a>: Missing mnemonics for Launcher properties page<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7391">7391</a>: Incompatible thread state running test suite<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7898">7898</a>: Divide by zero crashed Eclipse<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7955">7955</a>: Not all entries of a Hashtable are shown in the inspector/debugger<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7535">7535</a>: IncomptableThreadStateException while stepping<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 15, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6548">6548</a>: Missing mnemonics in Debug preferences<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7298">7298</a>: Drop to frame is always disabled<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7228">7228</a>: dialog should have yes/no buttons...<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6518">6518</a>: Internal error while doing evaluation<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7194">7194</a>: Unbound cache in Expression view content provider<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6736">6736</a>: stack frame unavailable running code snippet<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5346">5346</a>: Debugger silently fails to prompt for source<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1667">1667</a>: Breakpoint not hit when located inside multiline method declaration arguments (1GH0L24)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5538">5538</a>: Smoke 208: Add JRE dialog shows wrong JRE JAR file path<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5644">5644</a>: Can set breakpoint in JavaDoc<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7385">7385</a>: Breakpoint not hit if on variable declaration with no initial<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7425">7425</a>: Doubleclick a breakpoint in debug perspective results in error<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7503">7503</a>: Breakpoint in an InnerClass anonymous inner classes are not hit<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6437">6437</a>: Timeout when launching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7178">7178</a>: main in inner class doesn't run<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1565">1565</a>: HCR silently fails updating the target (1GDEYCU)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7433">7433</a>: Problems opening workspace with new build<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7307">7307</a>: execution args on classes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1594">1594</a>: Moving a source file loses breakpoints (1GEN5XZ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7185">7185</a>: Highlighting of line on which the debugger is operating not working<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5573">5573</a>: ClassNotFoundException running snippet in debugger<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1642">1642</a>: Flooding console with output without new lines (1GLDYBV)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3500">3500</a>: Cannot extend runtime path in the UI (1G3SPC3)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7007">7007</a>: Debugger leaking memory<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6526">6526</a>: Inconsistent error message after failed Inspect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1692">1692</a>: Recently launched programs: Contains program arguments (1GIVC5W)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1620">1620</a>: README: Remote Evaluation (1GEUT42)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1679">1679</a>: Breakpoint view should reflect selectd target (1GI94VS)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1650">1650</a>: Run/Debug console display confusing (1GFC0TB)<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>January 9, 2002, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7133">7133</a>: Illegal references to Breakpoints view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7203">7203</a>: Display view brought to front when doing Inspect<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1660">1660</a>: Do not prompt for source when no source attachment<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7201">7201</a>: Console does not show output from scrapbook<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6437">6437</a>: Timeout when launching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1758">1758</a>: Code Review: JDI debug model shutdown (1GLCWH3)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6575">6575</a>: JDIDebugTarget not cleaned up on shutdown<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7209">7209</a>: Run to line is broken<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6980">6980</a>: JDK12DebugLauncher and company should be renamed<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7342">7342</a>: missing resource string: JavaRuntime.Setting_JRE_classpath_variables<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7392">7392</a>: JDIThreads show <not responding> at startup <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6989">6989</a>: Step into resumes<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1661">1661</a>: Source attachment wizard for JARs form variable entries (1GI6Q7S)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6581">6581</a>: Hard to enable Finsih button on Attach source dialog<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3868">3868</a>: Investigate problems with source lookup with src & jar (1GEZYGV)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1675">1675</a>: Quiet suspend/resume events (1GI3TLQ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1610">1610</a>: Run-time workbench launchers (1GETD51)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7291">7291</a>: Inspector does not memorize inspected Objects between two debug sessions<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6851">6851</a>: Debugger: Clicking too quickly on Step tool disables Step tools<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>December 18, 2001, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1665">1665</a>: Drop to frame hangs if after invoke (1GH3XDA)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6817">6817</a>: J9 Launching doesn't work<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6759">6759</a>: Turning filters on/off makes Eclipse unresponsive<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6326">6326</a>: JDI: VirtualMachine.classesByName() fails for arrays<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6834">6834</a>: ClassCastExeption running Eclipse on Linux<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6501">6501</a>: src.jar not found 1.4 by default<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1532">1532</a>: UI - Right click "Run" button (1G5T0T)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1613">1613</a>: Debugger VM launching error never displayed (1GETDGZ)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5686">5686</a>: Launch/Run actions should be available on menubar<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6911">6911</a>: Terminate and remove does not notify JDIDebugTarget<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1708">1708</a>: Consistency in the presentation of the Display, Run, Inspect (1GJUH54)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3940">3940</a>: Keep getting Locate Source dialog (1GF6BU2)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6446">6446</a>: RunToLine needs shortcut<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6524">6524</a>: BadLocationException restoring DisplayView contents<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1741">1741</a>: Scrapbook actions missing from context menu (1GKZ2C1)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6815">6815</a>: Double clicking a line in the console should do an open type<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6471">6471</a>: Console OpenType + Go to Line<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6990">6990</a>: Display action linked to editor when focus in Display view<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6991">6991</a>: Hot keys do not work for inspect/display in scrapbook <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1580">1580</a>: Run in Package dialog should select the current context<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5387">5387</a>: Can add the same exception breakpoint multiple times<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7019">7019</a>: Non-public classes appear to confuse debugger source lookup<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7067">7067</a>: native method exception retrieving source name <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1566">1566</a>: run action missing from package view and outliner (1GDF2VH)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1598">1598</a>: Usability: Must select correct element to launch (1GEMBEL)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1634">1634</a>: First launch offers choice of 1 launcher (1GF5XKA)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3586">3586</a>: SH: Launch/Debug list with runnables not complete and bad to use (1GBADLN)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3625">3625</a>: user.dir not set as expected (1GDEZG9)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6529">6529</a>: exception when no built state in the scrapbook<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6975">6975</a>: Be able to execute methods on any inspected variables<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6952">6952</a>: Smart frame dropping after HCR <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7024">7024</a>: Launchers are using JDK 1.3 API<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>December 11, 2001, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6576">6576</a>: Efficiency - use computeStackFrames internally<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6613">6613</a>: Drop frame above native frame does not work on 1.4<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6746">6746</a>: Class cast exception during hotswap<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6640">6640</a>: Method ID of 0 is valid JDWP<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6738">6738</a>: Fatal error in JDWP<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5556">5556</a>: Walkback when workspace opened<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6737">6737</a>: JDIDebugTarget still registered with JavaHCR manager after terminate and remove <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5569">5569</a>: Stepping out of Object.wait()<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1750">1750</a>: IDE almost froze placing a breakpoint while running Eclipse in Eclipse (1GL4FRG)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6744">6744</a>: IOException/Disconnect while launching<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6112">6112</a>: Run in package ignored<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>December 6, 2001, - Problem Reports Fixed</h3>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1628">1628</a>: README: packages appear when doing eval (1GEYFPN)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6389">6389</a>: System threads show suspended at startup <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1567">1567</a>: Full build caused hot code replace failure (1GDH1CH)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5941">5941</a>: hot swap fails when native method on stack<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6187">6187</a>: Hot swap in main causes Eclipse to crash<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1558">1558</a>: Feature: CRC's and in synch (1GD0ANF)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1753">1753</a>: NPE in LocalEvaluationEngine <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6434">6434</a>: Scrapbook does not work with JDK1.4 <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6530">6530</a>: Rapid successive evaluation causes trouble <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5290">5290</a>: Source does not show up on debug<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>December 4, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li> The debugger suspends execution when an uncaught exception is thrown.
				Can be configured using the Java Debug Options preference page.
				@see  <A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5653">5653</A> for
				details and on step filtering settings migration.
			<li> Stack frames, threads, and debug targets will now display when code in
				the VM is out of synch with the code in the workspace. This can occur
				when a hot code replace fails or when a hot code replace succeeds but the
				VM is unable to pop old stack frames from the call stack.
				@see  <A HREF="http://bugs/eclipse/org/bugs/show_bug.cgi?id=1558">1558</A> for
				details.
			<li> Stepping performance improvement. By increasing the amount of data cached in
				our stack frame model, stepping is now dramatically faster in many cases.
			</ul>
			<p>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6447">6447</a>: Inner class breakpoints not hit<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6209">6209</a>: Step filtering should be off by default<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5225">5225</a>: 1.0 -- Casting problem in RunToLineAction class <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6109">6109</a>: NPE stopping Timer <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3881">3881</a>: minor: menu order inconsistency (1GF24TF) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6393">6393</a>: No stack frames shown after breakpoint hit <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1635">1635</a>: README: Attach launching not working with debug element selection (1GF5ZQC) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6510">6510</a>: NPE changing Java Debug Options with active debug target <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6248">6248</a>: Insufficient error reporting in JavaApplicationLauncher <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1738">1738</a>: Can't set scrapbook package to package in prereq project (1GKZ25D) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5901">5901</a>: Variables not showing up  until read<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1738">1738</a>: Can't set scrapbook package to package in prereq project (1GKZ25D)<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1766">1766</a>: Text too low in change variable value text box (1GLE8CB) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6321">6321</a>: Console IOException <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6508">6508</a>: Stepping is slow <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6519">6519</a>: Evaluation failed message for deprecated method <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6523">6523</a>: NPE changing suspend on exception pref with terminated targets <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1639">1639</a>: Run-in package can't be deleted (1GF7RQY) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1519">1519</a>: README: Hit count not reset (1GET20Y)  <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1539">1539</a>: README: VMDisconnected terminating scrapbook launch (1GEHZG7) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1657">1657</a>: Snippet Evaluation - internal failure when trying to run a scrapbook page (1GGN8Q9) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6291">6291</a>: Remote debug does not connect <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1608">1608</a>: README: Cannot connect to VM - time out (1GEUNH3) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1615">1615</a>: Launching on J9 lets pop up a dos console (1GEUOEI) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6166">6166</a>: NPE relaunching a java application <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6228">6228</a>: Runtime error running in debug mode (integration build 20011120) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5835">5835</a>: code assist crash in scrapbook <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5585">5585</a>: Error stepping in a thread with no stack frames.<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5861">5861</a>: NPE before hitting a breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5882">5882</a>: Thread suspend automatically before hitting a breakpoint<br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1712">1712</a>: Disconnect does not work on attach launch using SUN JDK1.2.2 (1GJYJ1E) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6405">6405</a>: Strange suspend on ThreadDeath using SUN JDK 1.3 <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1618">1618</a>: README: debug does not see source changes (1GEUN5G) <br>
			<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6511">6511</a>: Launch history items are showing <terminated> <br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 27, 2001, - Problem Reports Fixed</h3>
			<p>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1746">1746</A>: Debug target not expanded on hit breakpoint (1GLE3U8)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6192">6192</A>: Missing debug icons<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6084">6084</A>: NPE from force loading Java Breakpoints<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5567">5567</A>: Variable doesn't showup in Variables View although line is e<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3640">3640</A>: Associating source with a JAR at the last possible moment (1<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5510">5510</A>: Cannot evaluate in scrapbook - unable to create eval context<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6120">6120</A>: Run/Debug should support working directory<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1673">1673</A>: Layout from the launcher (1GHVZED)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6128">6128</A>: HelloWorld does not print "hello world"<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6156">6156</A>: NPE in LocalEvaluationEngine deploy action<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6161">6161</A>: NoClassDefFoundError running a scrapbook snippet<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6256">6256</A>: NPE when selecting process in process view<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6023">6023</A>: IOException writing after proxy closed<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 20, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li>Hot Swap support for 1.4 compliant VM's</li>
			<li>New plug-in (org.eclipse.jdt.debug.ui). First cut at "extracting" the Java debug UI from the
			Java tooling UI.</li>
			</ul>
			<p>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5715">5715</A>: Problems using scrapbook<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5791">5791</A>: NPE in SocketUtil<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5623">5623</A>: JDK 1.4 hot swap<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5612">5612</A>: Evaluation is performed in wrong "receiver" context<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5640">5640</A>: NPE launching when Java build path refs a missing project<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1753">1753</A>: Scrapbook: NoClassDefFoundError (1GLE11G)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5621">5621</A>: JavaHotCodeReplaceManager added early as resource change lis<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1643">1643</A>: README: Scrapbook does not clean up its temp files. (1GF808S<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5863">5863</A>: JDI exception handling<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5871">5871</A>: VMDisconnectedException notification on resume<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5792">5792</A>: Internal JDI error<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5963">5963</A>: UnsupportedOperationException from "fast" running program<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1615">1615</A>: Launching on J9 lets pop up a dos console (1GEUOEI)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3468">3468</A>: Smoke 114: Strange alert when running in Display (1GEI115)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3884">3884</A>: menus inconsistent: console and display (1GF252F)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5113">5113</A>: NPE in Java Model Presentation<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5902">5902</A>: com.sun.jdi.InternalException removing breakpoint request on<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5883">5883</A>: No notification of an uncaught exception when stepping<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5594">5594</A>: DCR: Can't evaluate expressions in class files<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5945">5945</A>: NPE during debugging<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5164">5164</A>: J9: Console Windows popping up<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5984">5984</A>: UnsupportedOperationException resuming thread<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5928">5928</A>: Debugger fails if Java Build Path contains a phantom resourc<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 13, 2001, - Problem Reports Fixed</h3>
			<p>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5139">5139</A>: Remove SnippetSupportBreakpoint<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5816">5816</A>: Resource tree locked error on hot swap<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5367">5367</A>: Meaningless brackets presented with primitive display option<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5115">5115</A>: Workspace source locator fails with mulitple package fragmen<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3751">3751</A>: No hover help on Display view (1GELOEK)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3883">3883</A>: error dialog in display is too scary (1GF24YQ)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=1646">1646</A>: Feature: Resolution failure notification (1GF9OG5)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3623">3623</A>: Enable Display, Run and Inspect Actions in Workbench toolbar<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=3468">3468</A>: Smoke 114: Strange alert when running in Display (1GEI115)<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5589">5589</A>: InvalidStackFrameException updating variables<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5787">5787</A>: launching with j9 fails<br>
			<A HREF="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5717">5787</A>: Breakpoint not hit in local class<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 12, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li>toString() support for arrays</li>
			<li>Support for hot swap and drop to frame on 1.4 compliant VMs</li>
			</ul>
			<p>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5257">5257</A>: Set breakpoint takes very long<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=4926">4926</A>: Exception on doubleclicking breakpoint<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5627">5627</A>: NPE setting detail pane orientation<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5630">5630</A>: Drop to frame does not re-select top stack frame<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5631">5631</A>: Breakpoint not reinstalled after hot swap<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5415">5415</A>: Plugin Name in Plugin Registery is wrong<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=1743">1743</A>: Scrapbook should have accelerator for Display (1GKZ3BT)<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5591">5591</A>: Debug perspective missing view shortcuts<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5625">5625</A>: Missing accelerators on detail pane orientation of pref page<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=1646">1646</A>: Feature: Resolution failure notification (1GF9OG5)<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5579">5579</A>: Would like option to switch to Debug perspective on breakpoi<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5460">5460</A>: Internal error when VM argument -mx: is too low<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=4282">4282</A>: IllegalArgumentEx from HoverControler (1GKYY59)<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=1741">1741</A>: Scrapbook actions missing from context menu (1GKZ2C1)<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5671">5671</A>: Pop to frame goes one too far<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5630">5630</A>: Drop to frame does not re-select top stack frame<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5631">5631</A>: Breakpoint not reinstalled after hot swap<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=1741">1741</A>: Scrapbook actions missing from context menu (1GKZ2C1)<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5671">5671</A>: Pop to frame goes one too far<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5494">5494</A>: Debug/Run "latest" Menus Confusing<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5576">5576</A>: Usability: Cannot disable breakpoint from context menu<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5505">5505</A>: Can't Remote Connect MicroAnalyzer from Java Perspective<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5553">5553</A>: Can't Remote Debug on QNX ARM Target<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5590">5590</A>: Step return fails on J9<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5596">5596</A>: Option to make F10 to save and compile<br>
			<A HREF="http://dev.eclipse.org/bugs/show_bug.cgi?id=5787">5787</A>: launching with j9 fails<br>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 5, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li>
			Support for 'toString()' in variables view. Depress the "Show Detail" button
			in the variable view toolbar. 'toString' for arrays is not yet supported
			(but is coming shortly). The vertical/horizontal split is controlled by
			a 'Debug' preference.</li>
			</ul>
			<p>
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5115">5115</a>: Workspace
			source locator fails with mulitple package fragmen
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5360">5360</a>:
			ListenerList#removeAll
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5467">5467</a>:
			Bad import in LocalEvaluationEngine
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5257">5257</a>:
			Set breakpoint takes very long
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5415">5415</a>:
			Plugin Name in Plugin Registery is wrong
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1663">1663</a>:
			Missing toString() feature makes debugging painful (1GH3W9P)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5421">5421</a>:
			Detail area does not update while stepping
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5474">5474</a>:
			should not use tool tips for labels
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4945">4945</a>:
			Promote #getBreakpoint from IJavaThread to IThread
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5460">5460</a>:
			Internal error when VM argument -mx: is too low
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5422">5422</a>:
			Allow detail area to split vertical or horizontal
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5437">5437</a>: Variable
			not showing in Variables view even when assigned a value
			</p>
		</div>
		<div class="homeitem3col">
			<h3>November 1, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li>
			API Change - IDebugConstants have been migrated to DebugPlugin and IBreakpoint.</li>
			
			<li>
			API Change - IDebugStatusConstants have been migrated to DebugException.</li>
			
			<li>
			API Change - IVariableModification has two new methods - setValue(IValue),
			and verifyValue(IValue).</li>
			</ul>
			<p>
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5349">5349</a>:
			ClassCastExceptions caused by BreakpointManager
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5129">5129</a>:
			Copy is disabled in the console
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5114">5114</a>:
			Add exception dialog ignores caught/uncaught selection
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1737">1737</a>:
			Feature: filter static initializers (1GKQHTT)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5307">5307</a>:
			TVT: Hardcoded category name in Debug (org.eclipse.debug.ui\
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5340">5340</a>:
			Cancelling add exception breakpoint has no effect
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4954">4954</a>:
			Evaluation does not update variable view
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1648">1648</a>:
			Inspect, Display, and Run to line, are enabled in all editor
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1603">1603</a>:
			Evaluate actions of the Display view evaluate on empty selec
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4953">4953</a>:
			Double click does not change value in inspector
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1763">1763</a>:
			Add Filter button disable until something to add (1GLE2J4)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1704">1704</a>:
			Investigate option to step filter synthetic methods (1GJOTQZ
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5281">5281</a>:
			Step into resumes instead
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5367">5367</a>:
			Meaningless brackets presented with primitive display option
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5115">5115</a>:
			Workspace source locator fails with mulitple package fragmen
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1699">1699</a>:
			Display window enhancement (1GJ6GR9)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5161">5161</a>:
			More info in Console open on type dialog
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1743">1743</a>:
			Scrapbook should have accelerator for Display (1GKZ3BT)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=3623">3623</a>:
			Enable Display, Run and Inspect Actions in Workbench toolbar
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1628">1628</a>:
			README: packages appear when doing eval (1GEYFPN)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5286">5286</a>:
			Walkback relaunching a program
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5310">5310</a>:
			"Copy" is disabled in Console
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5316">5316</a>:
			Cannot copy from console
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1554">1554</a>:
			Method entry breakpoints on source methods (1GC2U31)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5401">5401</a>:
			Would like to copy contents of debug console
			</p>
		</div>
		<div class="homeitem3col">
			<h3>October 21, 2001, - Problem Reports Fixed</h3>
			<ul>
			<li>
			API Change (method addition). IDebugModelPresentation now supports value
			"details". @see org.eclipse.debug.ui.IDebugModelPresentation#getDetail(IValue).</li>
			
			<li>
			API Change - ISnippetSupportBreakpoint has been removed. This does not
			break any clients. A "run-to-line" breakpoint is now used in place of a
			snippet support breakpoint.</li>
			</ul>
			<p>
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=3544">3544</a>:
			Launch selection dialog has too many entries (1G5XYYS)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1759">1759</a>:
			Widget is disposed error on breakpoint properties (1GLE3NA)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1756">1756</a>:
			Breakpoints installed in all classes with "name*" (1GLCLBW)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4576">4576</a>:
			Thread suspend/resume errors in classes with the "same" name
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1769">1769</a>:
			Hit count watchpoints not always re-enabled (1GLE911)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5142">5142</a>:
			Internal Error on relaunch
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5144">5144</a>:
			Error when opening display view
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1531">1531</a>:
			Feature: navigate from console output to resource (1G81S73)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1518">1518</a>:
			Icons needed for actions (1GI5UXW)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5113">5113</a>:
			NPE in Java Model Presentation
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5114">5114</a>:
			Add exception dialog ignores caught/uncaught selection
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5139">5139</a>:
			Remove SnippetSupportBreakpoint
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1648">1648</a>:
			Inspect, Display, and Run to line, are enabled in all editor
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5083">5083</a>: Breakpoint
			not hit
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=5234">5234</a>:
			Debugger doesn't stop on breakpoint
			</p>
		</div>
		<div class="homeitem3col">
			<h3>October 18, 2001, - Problem Reports Fixed</h3>
			<ul>
				<li>Support for "open on type" from a selection in the console.</li>
			</ul>
			<p>
			<a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=3452">3452</a>:
			NPE doing Display from Binary (1GLEG5K)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1751">1751</a>:
			Console misses style range for quick output (1GL4R1L)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1584">1584</a>:
			Renaming Scrapbook page does not remove associated VM (1GE5T
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1700">1700</a>:
			JSP Support for 2.0 (1GJ8LK3)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4951">4951</a>:
			Breakpoints remain installed after target terminates
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4952">4952</a>:
			Multiple breakpoints on the same line
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=4955">4955</a>:
			Hit count breakpoint does not re-enable
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1747">1747</a>:
			Ctrl-S does not work in the SnippetEditor (1GL1GH8)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1655">1655</a>:
			BUG - Timing out on toString; total redraw of debug view (1G
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1601">1601</a>:
			Displaying a variable appends to same line (1GENIVH)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1578">1578</a>:
			README: breakpoints in class with same name (1GDXNGO)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1731">1731</a>:
			jdt.debug missing plugin.properties file (1GKEYT0)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1730">1730</a>:
			debug.core missing plugin.properties file (1GKEYJY)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1707">1707</a>:
			Backspacing inserted error message does not fire selection c
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1638">1638</a>:
			The case for IBreakpoints (1GI3JYO)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1537">1537</a>:
			classFilePattern breakpoint attribute optimization (1GHE13E)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1640">1640</a>:
			USABILITY - Inspect and Display reset selection (1GF6CH0)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1672">1672</a>:
			Cannot evaluate classes in a sealed jar (1GHU6YK)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1678">1678</a>:
			Efficient handling of step event (1GI92KD)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1645">1645</a>:
			NPE on shutdown (1GF87PO)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1711">1711</a>:
			2 inner class breakpoints lead to weird state (1GJUZ1Y)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1672">1672</a>:
			Cannot evaluate classes in a sealed jar (1GHU6YK)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1641">1641</a>:
			README: inspected fields not updated when stepping (1GF7R4X)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1626">1626</a>:
			Outline is useless in debugger (1GEWBVR)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1600">1600</a>:
			Bug icon for program suggests program is buggy (1GENCVC)
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1590">1590</a>:
			README: breakpoints on method decl cause break on exit (1GE8
			<br><a href="http://dev.eclipse.org/bugs/show_bug.cgi?id=1573">1573</a>:
			Presentation should also be content provider (1GDTUJH)
			</p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>