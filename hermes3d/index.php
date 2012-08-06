<?phprequire_once('../header.php');?>

<div class="right" style="width: 180px;">

<br>
<center>
<img src="images/fichera-sln.png" width="170" height="140"><br>
Fichera problem - solution
</center>

<br/>

<center>
<img src="images/fichera-mesh.png" width="170" height="140"><br>
Fichera problem - hp-mesh
</center>

<br/>

<center>
<img src="images/fichera.png" width="170" height="130"><br>
Fichera problem - convergence
</center>

<br/>

<center>
<img src="images/layer-sln.png" width="170" height="140"><br>
Layer problem - solution
</center>

<br/>

<center>
<img src="images/layer-mesh.png" width="170" height="150"><br>
Layer problem - hp-mesh
</center>

<br/>

<center>
<img src="images/bessel-sln.png" width="170" height="140"><br>
Bessel problem - solution
</center>

<br/>

</div>

<h2>Hermes3D</h2>

<div class="left" style="width: 698px;">
<h3>Doxygen Docs and Issue Tracker</h3>

Here you can access Doxygen <a href="http://hpfem.org/hermes3d/doc.cpp/h3d-real/html/index.html">C++ Reference
(real version)</a> and <a href="http://hpfem.org/hermes3d/doc.cpp/h3d-cplx/html/index.html">C++ Reference
(complex version)</a>.
</div>

<div class="left" style="width: 698px;">
<h3>Development Plans</h3>
* Finish anisotropic poly degrees in Hcurl.<br>
* Add support for eigensolvers (SLEPc, ARPACK, Anasazi, ...).<br>
* Implement Hcurl adaptivity module.<br>
* Add examples on JFNK.<br>
* Implement adaptivity w/o reference solution, after tested in H1D and H2D.<br>
* Use distributed environment, requires distributed solvers.<br>
* Add L2 and Hdiv spaces (long-term, will be done when needed).<br>
* Adjust H3D to use hermes-common.<br>
* Revise benchmarks and examples to be compatible with H2D. <br>
* Further improve code and algorithms compatibility with H2D.<br>
* Finish anisotropic poly degrees in H1.<br>
* Create Hcurl examples.<br>
* Improve Sphinx documentation.<br>
* Enable Doxygen docs.<br>
* Write Python wrappers and include H3D in FEMhub.<br>
</div>

<div class="left" style="width: 698px;">
<h3>Contributors</h3>

See the <a href="http://git.hpfem.org/hermes.git/blob/HEAD:/AUTHORS">AUTHORS</a> file.
</div>



<?phprequire_once('../footer.php');?>
