<?require_once('../header.php');?>

<table>

<tr valign="top">
<td style="width: 170px; padding-right: 10px;">
<div class="left">

<h3>Open Source Projects</h3>

<a href="http://hpfem.org/hermes/">Hermes</a>, 
<a href="http://agros2d.org/">Agros2D</a>, 
<a href="http://femhub.org/">FEMhub Distribution</a>, 
<a href="http://hpfem.org/himg/">Himg</a>, 
<a href="http://hpfem.org/xgen/">Xgen</a>,
<a href="http://hpfem.org/mesheditor-flex/">Flex Mesh Editor</a><br>

<h3>HowTo</h3>
<a href="http://github.com/hpfem/hermes/wiki">hp-FEM Group HowTo</a><br>

<h3>Sample Results</h3>
<br>
<center>
<img src="images/lset.jpg" width="150" height="100" alt="*"/><br>
Interface tracking in two-component flow.
<br>
</center>

<br>

<center>
<img src="images/microheat.jpg" width="150" height="130" alt="*"/><br>
Microwave heating.
</center>

<br>

<center>
<img src="images/gp-1.jpg" width="150" height="90" alt="*"/><br>
Resonances in Einstein-Bose gases. 
</center>

<br>

<center>
<img src="images/lena512-2.jpg" width="150" height="150" alt="*"/><br>
Image compression with adaptive hp-FEM
</center>

</div>
</td>

<td>
<div class="center">
<h3> The hp-FEM Group</h3>
<p>
The hp-FEM group at the University of Nevada, Reno and 
University of West Bohemia, Pilsen is a leader in the development, implementation, and 
dissemination of modern computational methods for engineering and scientific 
problems described by partial differential equations (PDE). Our work 
is freely available through several open source projects.
</p>

<h3>Hermes</h3>

<p>
<center>
<a href="http://hpfem.org/hermes"><img src="images/hvt.png" width=400px ></a>
</center>
</p>

<p>
Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel hp-adaptivity algorithms 
help solve a large variety of problems ranging from ODE and stationary linear PDE to complex time-dependent nonlinear 
multiphysics PDE systems. 
</p>

<h3>Use Hermes through NCLab</h3>

<p>
<center>
<a href="https://nclab.com">
<img align="center" src="images/nclab-1.png" width="200" 
style="padding:5px; margin-right:5px; border-style:none">
<img align="center" src="images/nclab-2.png" width="200"
style="padding:5px; margin-right:5px; border-style:none"><br>
<img align="center" src="images/nclab-3.png" width="200" 
style="padding:5px; margin-right:5px; border-style:none">
<img align="center" src="images/nclab-4.png" width="200"
style="padding:5px; margin-right:5px; border-style:none">
</a>
</center>
<p>
NCLab is a third-party product that is not developed by our group at UNR.

<h3>International Conferences ESCO and FEMTEC</h3>

<p>
We organize two series of international conferences: European Seminar on Coupled Problems (ESCO
<a href="http://esco2012.femhub.com">2012</a>, 
<a href="http://hpfem.org/events/esco-2010/">2010</a>, 
<a href="http://hpfem.org/events/esco-2008/">2008</a>) 
in Europe and Finite Element Methods in Engineering 
and Science (FEMTEC
<a href="http://hpfem.org/events/femtec-2011/">2011</a>, 
<a href="http://hpfem.org/events/femtec-2009/">2009</a>, 
<a href="http://hpfem.org/events/femtec-2006/">2006</a>) in the U.S.

</p>

<h3>The Dark Side of FEM</h3>

<p>
Do not format your harddisk yet! If the science is not
working, maybe it's art. Visit our art gallery 
<a href="../gallery_darkside">Dark Side of FEM</a> :)
</p>

</div>
</td>

<td style="width: 170px; padding-left: 10px;">

<div class="right">
<h3>Latest News</h3>
<ul>
<li>
<b>March 2012</b>: First Hermes2D modules developed.
</li>
<li>
<b>January 2012</b>: Hermes2D parallelized.
</li>
<li>
<b>November 2011</b>: Abstract Submission for ESCO 2012 Open,
</li>
<li>
<b>September 2011</b>: Hermes Version 1.0 Released! Read more
<a href="http://hpfem.org/hermes/">here</a>.
</li>
<li>
<b>August 2011</b>: The next <a href="http://esco2012.femhub.com/">ESCO 2012</a> will be 
organized by <a href="http://femhub.com/">FEMhub Inc.</a>
</li>
<li>
<b>July 2011</b>: Hermes was presented at invited lectures (Erlangen, Rome, INRIA).
Several new people migrated from Comsol to Hermes mostly to use hp-adaptivity with 
dynamical meshes for transient problems.
</li>
<li>
<b>June, 2011</b>: Templating of Hermes2D in progress. The goal is to have only one
version of the library (not real and complex versions).
</li>
<li>
<b>May 9 -13, 2011</b>: <a href="http://hpfem.org/events/femtec-2011/">FEMTEC 2011</a>
takes place.
</li>
<li>
<b>April 2011</b>: New repository hermes-dev.git at Github serves
for testing of changes before they are pushed into the master 
repository hermes.git.
</li>
<li>
<b>April 2011</b>: Explicit support for linear problems ended.
Linear problems need to be formulated using a jacobian-residual
formulation (same as nonlinear problems).
</li>
<li>
<b>March 2011</b>: New object-oriented weak forms 
pushed to master. Some examples still need 
upgrading.
</li>
<li>
<b>February 2011</b>: Mateusz Paprocki has joined our team in Reno. VTK
solution output was finally added to H2D. Progress on Hermes compilation
on Mac was made.
</li>
<li>
<b>January 2011</b>: Dr. Sascha Schnepp from Technical University Darmstadt 
arrived for a six-weeks stay.
</li>
<li>
December 2010: Time integration in Hermes can be done using an
arbitrary Butcher's table. 
</li>
<li>
November 2010: <a href="http://math.nist.gov/~WMitchell/">Bill Mitchell</a> from NIST visited 
for a few days.
</li>
<li>
November 2010: <a href="http://hpfem.org/hermes">Hermes</a> entered a feature-freeze stage of cleaning,
consolidation, and preparation for the first official release.
</li>
<li>
October 2010: <a href="http://hpfem.org/events/femtec-2011/">FEMTEC 2011</a> announced.
</li>
<li>
September 2010: Hermes1D, Hermes2D and Hermes3D merged into
a single git repository <a href="http://github.com/hpfem/hermes">Hermes</a>.
</li>
<li>
Septeber 2010: New version of Hermes2D merged into upstream.
</li>
<li>
July 2010: New version of H2D in progress in
branch <a href="http://github.com/solin/hermes2d/commits/change">change</a>. 
</li>
<li>
June 28 - July 3: <a href="http://hpfem.org/events/esco-2010/">ESCO 2010</a> was a great success!
</li>
<li>
May 2010: Special issue of MATCOM dedicated to ESCO 2008 
finally printed. 
</li>
<li>
March 24 - 28, 2010: Visit of Dr. Christopher Kees (U.S. Army Engineer 
Research and Development Laboratory)
</li>
<li>
March 18, 2010: Plenary lecture 
for 160 people on scientific computing on the occasion of the 
<a href="http://www.lawrencehallofscience.org/jshs/">Junior 
Science and Humanities Symposium (JSHS)</a>. The 
presentation (minus movies) is <a href="data/circus-circus.pdf">here</a>.
</li>
<li>
Glen Hansen from INL visited in February 2010
and gave several lectures on <a href="data/hansen-1.pdf">JFNK</a> 
and <a href="data/hansen-2.pdf">Trilinos</a>. The computer 
codes he used are  <a href="data/heat-eq.tar.gz">here</a>.
</li>
<li>
Bill Mitchell from NIST visited in December 2009.
<a href="images/snow_trip.jpg"><img src="images/snow_trip.jpg" width=150px height=115px></a>
</li>
<li>
<b>Summer 2009:</b>
<ul>
<li>
Agros2D was used by the group of A. Fejfar at the Institute of Physics in Prague
to model electric behavior of crystalline structures 
(<a href="../talks/09/Fejfar-RelationNanoMacro-ICANS23-Utrecht2009.pdf">see presentation</a>).
</li>
<li>
The Hermes project was presented 
9 times during summer 2009 (7 invited presentations).
See the Publications section for PDF files.
<li> 
Preparations for ESCO 2010 started, preliminary web page is 
<a href="http://hpfem.org/events/esco-2010">here</a>.
</li>
</li>
</ul>
</li>
<li>
<b>July 2009:</b><br>
Idaho National Laboratory (INL) grant to explore the potential
of adaptive multimesh hp-FEM for nuclear fuel performance
analysis.
</li>
<li>
<b>June 2009:</b><br>
Major DoE grant for advanced multiphysics computer
simulations of nuclear reactor processes - Nevada News press 
release <a href="http://www.unr.edu/nevadanews/templates/details.aspx?articleid=5074&amp;zoneid=8">here</a>.
</li>
</ul>
</div>

</td>
</tr>
</table>

<?require_once('../footer.php');?>
