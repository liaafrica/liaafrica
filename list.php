<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $thisPage="list"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>African Library and Information Associations</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #c5c3c3;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#669900;
	text-decoration: none; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo~~ */
.header {
	background-color: #4b4b4b;
	height:5em;
	vertical-align:middle;
	text-align:center;
	padding-top:40px;
}

.header a {
	color:#FFF;
	font-size:2.5em;
	font-weight:bold;
}	
	
.navBar {
	background-color: #669900;
	color:#FFF;
	width:100%;
}
/*
ul.navBar {
	list-style: none;	
	display:block;
	margin-bottom: 15px;
	background-color: #669900;
	color:#FFF;
}

.navBar ul li a,.navBar ul li a:visited {
		padding: 5px 5px 5px 15px;
		display:block;
		text-decoration:none;
}

.navBar ul li a:hover, .navBar ul li a:active, .navBar ul li a:focus {
	background-color:#606060;
	color:#669900;	
}
*/
/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {
	padding: 10px;
	padding-top:10px;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #606060;
	color:#fff;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

.mapView a {
	float:left;	
	padding: 10px 30px;
	color:#669900;
	margin-right:15px;
	text-decoration:none;
	
}

.listView {
	float:left;	
	padding:10px 30px;
	/*background:#669900;*/
	color:606060;
}

.views {
	padding:50px 50px;	
	font-size: 1.5em;
}

.subView {
	font-size: 0.8em;	
	padding-top:15px;
}

.subViewText {	
	background-color:#669900;
}

.subView a {
	color:#669900;
	text-decoration:none;
}

.title {
	font-weight:bold;	
}

#breadcrumbs {
	padding:10px 50px;
}

p {
	padding:5px 50px;	
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
  <div class="header"><a href="index.php">African Library and Information Associations</a><!-- end .header --></div>
  <div class="clearfloat"></div>
  <div class="navBar">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li  id="currentitem"><a href="index.php">Directory</a>
    </li>
    <li><a href="#">Downloads</a></li>
    <li><a href="#">About</a>
    </li>
    <li><a href="#">Contact</a></li>
    <li id="placeHolder"></li>
  </ul>
  </div>
<div class="clearfloat"></div>

  <div class="content">
 
   <ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a class="" href="index.php">Map View</a>
        <!--<ul>
          <li><a href="#">Item 1.1</a></li>
          <li><a href="#">Item 1.2</a></li>
          <li><a href="#">Item 1.3</a></li>
        </ul>-->
      </li>
      <li id="currentpage"><a class="" href="list.php">List View</a>
        <!--<ul>
          <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>
            <ul>
              <li><a href="#">Item 3.1.1</a></li>
              <li><a href="#">Item 3.1.2</a></li>
            </ul>
          </li>
          <li><a href="#">Item 3.2</a></li>
          <li><a href="#">Item 3.3</a></li>
        </ul>-->
      </li>
    </ul>
<!--<div class="mapView"><a href="index.php">Map View</a></div><div class="listView"><span class="subViewText">List View</span><div class="subView"><span class="subViewText">Country</span>  |  <a href="">Region</a></div></div><div class="clearfloat"></div><div></div>-->
<div class="clearfloat"></div>
<p><span class="title">Botswana</span><br />
Botswana Library Association
</p>
<p><span class="title">Ethiopia</span><br />
School for Information Studies in Africa (SISA)
</p>
<p><span class="title">Ghana</span><br />
Ghana Library Association
</p>
<p><span class="title">Kenya</span><br />
Kenya Library Association
</p>
<p><span class="title">Namibia</span><br />
Namibian Information Workers Association
</p>
<p><span class="title">Nigeria</span><br />
NLA (Nigerian Library Association)
</p>
<p><span class="title">Senegal</span><br />
Senegalese Association of Librarians Archivist and 
Documentalists<br /><br />
School of Library, Archival and Documentation 
Studies (L'Ecole des Bibliothacaires, Archivistes et 
Documentalistes-EBAD)  at the Cheikh Anta Diop 
University in Dakar
</p>
<p><span class="title">South Africa</span><br />
<a href="liasa.php">Library and Information Association of South Africa (LIASA)</a><br /><br />
Development of Information Science in South Africa (DISSANET)<br /><br />
Organization of South African Law Libraries (OSALL)<br /><br />
Committee for Higher Education Librarians of South Africa (CHELSA)
</p>
<p><span class="title">Swaziland Library Association</span><br />
Swaziland Library Association
</p>
<p><span class="title">Tanzania</span><br />
Tanzania Library Association
</p>

<p><span class="title">Uganda</span><br />
Uganda Library Association?
Uganda Community Libraries Association
</p>
<p><span class="title">Zimbabwe</span><br />
Zambia Library Association
Zimbabwe Library Association
</p>
<!-- end .content --></div>
  <div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
