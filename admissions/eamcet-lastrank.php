<?php 
include '../init.php';
$active="admissions";
include ROOT_DIR .  '/common/header.php'; ?>
<link rel="stylesheet" href="<?php echo ROOT_URL .'/css/style_anuradha.css'; ?>" />
<style>
    tr
	{mso-height-source:auto;}
col
	{mso-width-source:auto;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Normal;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl65
	{mso-style-parent:style0;
	color:black;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl66
	{mso-style-parent:style0;
	color:black;
	font-size:20.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	color:black;
	font-size:20.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	color:black;
	font-size:20.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	color:black;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#E7E6E6;
	mso-pattern:black none;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#E7E6E6;
	mso-pattern:black none;
	white-space:normal;}
</style>
<div class="background">
  <section  id="eamcet-lastrank">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <header class="section-header">
  <h4 class="blue-clr bold">EAMCET Last Rank </h4></header>
  <div class="box">
<div class="table-responsive">
<!--
<table cellspacing="0"  class="table table-striped custom"style="font-size:85%;table-layout: auto;width: 100%;">
	<colgroup width="36"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="65"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="92"></colgroup>
	<colgroup width="89"></colgroup>
	<colgroup width="91"></colgroup>
	<colgroup width="88"></colgroup>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;" colspan=3 rowspan=3 height="153" align="left" valign=top><b><font  color="#000000">AY 2020-21 EAMCET<br>    Analysis</font></b></td>
		<td style="border: 1px solid #14777f;" colspan=4 align="center" valign=middle><b><font color="#000000">Ist Phase Allotments</font></b></td>
		<td style="border: 1px solid #14777f;" colspan=4 align="center" valign=middle><b><font color="#000000">IInd Phase Allotments</font></b></td>
		<td style="border: 1px solid #14777f;" colspan=4 rowspan=2 align="center" valign=middle><b><font color="#000000">Rank Difference from Ist Phase to IInd Phase</font></b></td>
		</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  colspan=2 align="center" valign=middle><b><font color="#000000">Boys</font></b></td>
		<td style="border: 1px solid #14777f;"  colspan=2 align="center" valign=middle><b><font color="#000000">Girls</font></b></td>
		<td style="border: 1px solid #14777f;"  colspan=2 align="center" valign=middle><b><font color="#000000">Boys</font></b></td>
		<td style="border: 1px solid #14777f;"  colspan=2 align="center" valign=middle><b><font color="#000000">Girls</font></b></td>
		</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Closing Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Closing Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Closing Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">Closing Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#FF0000">Boys Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#FF0000">Boys Closing Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#FF0000">Girls Starting Rank</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#FF0000">Girls Closing Rank</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  rowspan=8 height="160" align="center" valign=middle><b><font color="#000000">CSE</font></b></td>
		<td style="border: 1px solid #14777f;"  rowspan=8 align="center" valign=middle><b><font color="#000000">294/294</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">OC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1091" sdnum="1033;"><font color="#000000">1091</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4837" sdnum="1033;"><font color="#000000">4837</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1900" sdnum="1033;"><font color="#000000">1900</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5154" sdnum="1033;"><font color="#000000">5154</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1324" sdnum="1033;"><font color="#000000">1324</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4830" sdnum="1033;"><font color="#000000">4830</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="2022" sdnum="1033;"><font color="#000000">2022</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5154" sdnum="1033;"><font color="#000000">5154</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="233" sdnum="1033;"><b><font color="#FF0000">233</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-7" sdnum="1033;"><b><font color="#FF0000">-7</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="122" sdnum="1033;"><b><font color="#FF0000">122</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-A</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="12680" sdnum="1033;"><font color="#000000">12680</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="18217" sdnum="1033;"><font color="#000000">18217</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="11416" sdnum="1033;"><font color="#000000">11416</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="18980" sdnum="1033;"><font color="#000000">18980</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="12680" sdnum="1033;"><font color="#000000">12680</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19524" sdnum="1033;"><font color="#000000">19524</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="11416" sdnum="1033;"><font color="#000000">11416</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="18980" sdnum="1033;"><font color="#000000">18980</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1307" sdnum="1033;"><b><font color="#FF0000">1307</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-B</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3258" sdnum="1033;"><font color="#000000">3258</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8019" sdnum="1033;"><font color="#000000">8019</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1666" sdnum="1033;"><font color="#000000">1666</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9427" sdnum="1033;"><font color="#000000">9427</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3258" sdnum="1033;"><font color="#000000">3258</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8723" sdnum="1033;"><font color="#000000">8723</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1666" sdnum="1033;"><font color="#000000">1666</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9659" sdnum="1033;"><font color="#000000">9659</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="704" sdnum="1033;"><b><font color="#FF0000">704</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="232" sdnum="1033;"><b><font color="#FF0000">232</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-C</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5648" sdnum="1033;"><font color="#000000">5648</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20014" sdnum="1033;"><font color="#000000">20014</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19287" sdnum="1033;"><font color="#000000">19287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19287" sdnum="1033;"><font color="#000000">19287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5648" sdnum="1033;"><font color="#000000">5648</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21184" sdnum="1033;"><font color="#000000">21184</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19287" sdnum="1033;"><font color="#000000">19287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19287" sdnum="1033;"><font color="#000000">19287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1170" sdnum="1033;"><b><font color="#FF0000">1170</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-D</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4065" sdnum="1033;"><font color="#000000">4065</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8491" sdnum="1033;"><font color="#000000">8491</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5664" sdnum="1033;"><font color="#000000">5664</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9667" sdnum="1033;"><font color="#000000">9667</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3098" sdnum="1033;"><font color="#000000">3098</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8295" sdnum="1033;"><font color="#000000">8295</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5281" sdnum="1033;"><font color="#000000">5281</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9996" sdnum="1033;"><font color="#000000">9996</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-967" sdnum="1033;"><b><font color="#FF0000">-967</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-196" sdnum="1033;"><b><font color="#FF0000">-196</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-383" sdnum="1033;"><b><font color="#FF0000">-383</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="329" sdnum="1033;"><b><font color="#FF0000">329</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-E</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center"><font color="#000000">6189</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="36141" sdnum="1033;"><font color="#000000">36141</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7310" sdnum="1033;"><font color="#000000">7310</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17872" sdnum="1033;"><font color="#000000">17872</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6189" sdnum="1033;"><font color="#000000">6189</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="36141" sdnum="1033;"><font color="#000000">36141</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="16196" sdnum="1033;"><font color="#000000">16196</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17872" sdnum="1033;"><font color="#000000">17872</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8886" sdnum="1033;"><b><font color="#FF0000">8886</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">SC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5049" sdnum="1033;"><font color="#000000">5049</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="33728" sdnum="1033;"><font color="#000000">33728</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14003" sdnum="1033;"><font color="#000000">14003</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="34493" sdnum="1033;"><font color="#000000">34493</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6106" sdnum="1033;"><font color="#000000">6106</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="33728" sdnum="1033;"><font color="#000000">33728</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14166" sdnum="1033;"><font color="#000000">14166</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="35774" sdnum="1033;"><font color="#000000">35774</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1057" sdnum="1033;"><b><font color="#FF0000">1057</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="163" sdnum="1033;"><b><font color="#FF0000">163</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1281" sdnum="1033;"><b><font color="#FF0000">1281</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">ST</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3026" sdnum="1033;"><font color="#000000">3026</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20663" sdnum="1033;"><font color="#000000">20663</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19053" sdnum="1033;"><font color="#000000">19053</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="34509" sdnum="1033;"><font color="#000000">34509</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3026" sdnum="1033;"><font color="#000000">3026</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20663" sdnum="1033;"><font color="#000000">20663</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20728" sdnum="1033;"><font color="#000000">20728</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="34509" sdnum="1033;"><font color="#000000">34509</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1675" sdnum="1033;"><b><font color="#FF0000">1675</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  rowspan=8 height="160" align="center" valign=middle><b><font color="#000000">IT</font></b></td>
		<td style="border: 1px solid #14777f;"  rowspan=8 align="center" valign=middle><b><font color="#000000">84/84</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">OC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4768" sdnum="1033;"><font color="#000000">4768</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7019" sdnum="1033;"><font color="#000000">7019</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5697" sdnum="1033;"><font color="#000000">5697</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7179" sdnum="1033;"><font color="#000000">7179</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4910" sdnum="1033;"><font color="#000000">4910</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7019" sdnum="1033;"><font color="#000000">7019</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5669" sdnum="1033;"><font color="#000000">5669</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7179" sdnum="1033;"><font color="#000000">7179</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="142" sdnum="1033;"><b><font color="#FF0000">142</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-28" sdnum="1033;"><b><font color="#FF0000">-28</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-A</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="24920" sdnum="1033;"><font color="#000000">24920</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="27299" sdnum="1033;"><font color="#000000">27299</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="22649" sdnum="1033;"><font color="#000000">22649</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="24460" sdnum="1033;"><font color="#000000">24460</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23091" sdnum="1033;"><font color="#000000">23091</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="27299" sdnum="1033;"><font color="#000000">27299</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="29360" sdnum="1033;"><font color="#000000">29360</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="35228" sdnum="1033;"><font color="#000000">35228</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-1829" sdnum="1033;"><b><font color="#FF0000">-1829</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6711" sdnum="1033;"><b><font color="#FF0000">6711</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10768" sdnum="1033;"><b><font color="#FF0000">10768</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-B</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8760" sdnum="1033;"><font color="#000000">8760</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10457" sdnum="1033;"><font color="#000000">10457</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10828" sdnum="1033;"><font color="#000000">10828</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="13477" sdnum="1033;"><font color="#000000">13477</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8760" sdnum="1033;"><font color="#000000">8760</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9953" sdnum="1033;"><font color="#000000">9953</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10828" sdnum="1033;"><font color="#000000">10828</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="13477" sdnum="1033;"><font color="#000000">13477</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-504" sdnum="1033;"><b><font color="#FF0000">-504</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-C</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="59587" sdnum="1033;"><font color="#000000">59587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="59587" sdnum="1033;"><font color="#000000">59587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="59587" sdnum="1033;"><b><font color="#FF0000">59587</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="59587" sdnum="1033;"><b><font color="#FF0000">59587</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-D</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9793" sdnum="1033;"><font color="#000000">9793</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="11027" sdnum="1033;"><font color="#000000">11027</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10832" sdnum="1033;"><font color="#000000">10832</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="12648" sdnum="1033;"><font color="#000000">12648</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8745" sdnum="1033;"><font color="#000000">8745</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10827" sdnum="1033;"><font color="#000000">10827</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10832" sdnum="1033;"><font color="#000000">10832</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="12648" sdnum="1033;"><font color="#000000">12648</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-1048" sdnum="1033;"><b><font color="#FF0000">-1048</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-200" sdnum="1033;"><b><font color="#FF0000">-200</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-E</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="11715" sdnum="1033;"><font color="#000000">11715</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21159" sdnum="1033;"><font color="#000000">21159</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="28396" sdnum="1033;"><font color="#000000">28396</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="28396" sdnum="1033;"><font color="#000000">28396</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="11715" sdnum="1033;"><b><font color="#FF0000">11715</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21159" sdnum="1033;"><b><font color="#FF0000">21159</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="28396" sdnum="1033;"><b><font color="#FF0000">28396</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="28396" sdnum="1033;"><b><font color="#FF0000">28396</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">SC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="36068" sdnum="1033;"><font color="#000000">36068</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="50219" sdnum="1033;"><font color="#000000">50219</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="47566" sdnum="1033;"><font color="#000000">47566</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="53426" sdnum="1033;"><font color="#000000">53426</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="36068" sdnum="1033;"><font color="#000000">36068</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="50219" sdnum="1033;"><font color="#000000">50219</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="42029" sdnum="1033;"><font color="#000000">42029</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="53426" sdnum="1033;"><font color="#000000">53426</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-5537" sdnum="1033;"><b><font color="#FF0000">-5537</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">ST</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="22797" sdnum="1033;"><font color="#000000">22797</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="32978" sdnum="1033;"><font color="#000000">32978</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="39988" sdnum="1033;"><font color="#000000">39988</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="43973" sdnum="1033;"><font color="#000000">43973</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23075" sdnum="1033;"><font color="#000000">23075</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="32798" sdnum="1033;"><font color="#000000">32798</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="36773" sdnum="1033;"><font color="#000000">36773</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="60954" sdnum="1033;"><font color="#000000">60954</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="278" sdnum="1033;"><b><font color="#FF0000">278</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-180" sdnum="1033;"><b><font color="#FF0000">-180</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-3215" sdnum="1033;"><b><font color="#FF0000">-3215</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="16981" sdnum="1033;"><b><font color="#FF0000">16981</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  rowspan=8 height="160" align="center" valign=middle><b><font color="#000000">CSM</font></b></td>
		<td style="border: 1px solid #14777f;"  rowspan=8 align="center" valign=middle><b><font color="#000000">84/84</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">OC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="2389" sdnum="1033;"><font color="#000000">2389</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5549" sdnum="1033;"><font color="#000000">5549</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3305" sdnum="1033;"><font color="#000000">3305</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6851" sdnum="1033;"><font color="#000000">6851</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="2389" sdnum="1033;"><font color="#000000">2389</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5549" sdnum="1033;"><font color="#000000">5549</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="3305" sdnum="1033;"><font color="#000000">3305</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6851" sdnum="1033;"><font color="#000000">6851</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-A</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8384" sdnum="1033;"><font color="#000000">8384</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19399" sdnum="1033;"><font color="#000000">19399</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21318" sdnum="1033;"><font color="#000000">21318</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="29470" sdnum="1033;"><font color="#000000">29470</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8384" sdnum="1033;"><font color="#000000">8384</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="19399" sdnum="1033;"><font color="#000000">19399</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21318" sdnum="1033;"><font color="#000000">21318</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="29470" sdnum="1033;"><font color="#000000">29470</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-B</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5816" sdnum="1033;"><font color="#000000">5816</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7386" sdnum="1033;"><font color="#000000">7386</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7350" sdnum="1033;"><font color="#000000">7350</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10297" sdnum="1033;"><font color="#000000">10297</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="6015" sdnum="1033;"><font color="#000000">6015</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8365" sdnum="1033;"><font color="#000000">8365</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7350" sdnum="1033;"><font color="#000000">7350</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10297" sdnum="1033;"><font color="#000000">10297</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="199" sdnum="1033;"><b><font color="#FF0000">199</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="979" sdnum="1033;"><b><font color="#FF0000">979</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-C</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="15781" sdnum="1033;"><font color="#000000">15781</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="15781" sdnum="1033;"><font color="#000000">15781</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1587" sdnum="1033;"><font color="#000000">1587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1587" sdnum="1033;"><font color="#000000">1587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-14194" sdnum="1033;"><b><font color="#FF0000">-14194</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-14194" sdnum="1033;"><b><font color="#FF0000">-14194</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-D</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4285" sdnum="1033;"><font color="#000000">4285</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8587" sdnum="1033;"><font color="#000000">8587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4053" sdnum="1033;"><font color="#000000">4053</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10063" sdnum="1033;"><font color="#000000">10063</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4285" sdnum="1033;"><font color="#000000">4285</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8587" sdnum="1033;"><font color="#000000">8587</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4053" sdnum="1033;"><font color="#000000">4053</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10202" sdnum="1033;"><font color="#000000">10202</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="139" sdnum="1033;"><b><font color="#FF0000">139</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-E</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7218" sdnum="1033;"><font color="#000000">7218</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21684" sdnum="1033;"><font color="#000000">21684</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17562" sdnum="1033;"><font color="#000000">17562</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17562" sdnum="1033;"><font color="#000000">17562</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7218" sdnum="1033;"><font color="#000000">7218</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21684" sdnum="1033;"><font color="#000000">21684</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17562" sdnum="1033;"><font color="#000000">17562</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="17562" sdnum="1033;"><font color="#000000">17562</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">SC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21349" sdnum="1033;"><font color="#000000">21349</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="56484" sdnum="1033;"><font color="#000000">56484</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23231" sdnum="1033;"><font color="#000000">23231</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="48184" sdnum="1033;"><font color="#000000">48184</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="21349" sdnum="1033;"><font color="#000000">21349</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="56484" sdnum="1033;"><font color="#000000">56484</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23231" sdnum="1033;"><font color="#000000">23231</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="48184" sdnum="1033;"><font color="#000000">48184</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">ST</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="18462" sdnum="1033;"><font color="#000000">18462</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="27584" sdnum="1033;"><font color="#000000">27584</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="53649" sdnum="1033;"><font color="#000000">53649</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="53649" sdnum="1033;"><font color="#000000">53649</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="18462" sdnum="1033;"><font color="#000000">18462</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="27824" sdnum="1033;"><font color="#000000">27824</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="64056" sdnum="1033;"><font color="#000000">64056</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="64056" sdnum="1033;"><font color="#000000">64056</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="240" sdnum="1033;"><b><font color="#FF0000">240</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10407" sdnum="1033;"><b><font color="#FF0000">10407</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10407" sdnum="1033;"><b><font color="#FF0000">10407</font></b></td>
	</tr>
	
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  rowspan=9 height="180" align="center" valign=middle><b><font color="#000000">CSD</font></b></td>
		<td style="border: 1px solid #14777f;"  rowspan=9 align="center" valign=middle><b><font color="#000000">42/42</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">OC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1922" sdnum="1033;"><font color="#000000">1922</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5849" sdnum="1033;"><font color="#000000">5849</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5104" sdnum="1033;"><font color="#000000">5104</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5957" sdnum="1033;"><font color="#000000">5957</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="1922" sdnum="1033;"><font color="#000000">1922</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5849" sdnum="1033;"><font color="#000000">5849</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5104" sdnum="1033;"><font color="#000000">5104</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5957" sdnum="1033;"><font color="#000000">5957</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-A</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14438" sdnum="1033;"><font color="#000000">14438</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20303" sdnum="1033;"><font color="#000000">20303</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="26071" sdnum="1033;"><font color="#000000">26071</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="26071" sdnum="1033;"><font color="#000000">26071</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14438" sdnum="1033;"><font color="#000000">14438</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="20303" sdnum="1033;"><font color="#000000">20303</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="26071" sdnum="1033;"><font color="#000000">26071</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="26071" sdnum="1033;"><font color="#000000">26071</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-B</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5287" sdnum="1033;"><font color="#000000">5287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8873" sdnum="1033;"><font color="#000000">8873</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9756" sdnum="1033;"><font color="#000000">9756</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="9756" sdnum="1033;"><font color="#000000">9756</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5287" sdnum="1033;"><font color="#000000">5287</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="8873" sdnum="1033;"><font color="#000000">8873</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10310" sdnum="1033;"><font color="#000000">10310</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10310" sdnum="1033;"><font color="#000000">10310</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="554" sdnum="1033;"><b><font color="#FF0000">554</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="554" sdnum="1033;"><b><font color="#FF0000">554</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-C</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-D</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5355" sdnum="1033;"><font color="#000000">5355</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7555" sdnum="1033;"><font color="#000000">7555</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4633" sdnum="1033;"><font color="#000000">4633</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10340" sdnum="1033;"><font color="#000000">10340</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="5355" sdnum="1033;"><font color="#000000">5355</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="7555" sdnum="1033;"><font color="#000000">7555</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="4633" sdnum="1033;"><font color="#000000">4633</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="10474" sdnum="1033;"><font color="#000000">10474</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="134" sdnum="1033;"><b><font color="#FF0000">134</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">BC-E</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14920" sdnum="1033;"><font color="#000000">14920</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23294" sdnum="1033;"><font color="#000000">23294</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="14920" sdnum="1033;"><font color="#000000">14920</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="23294" sdnum="1033;"><font color="#000000">23294</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">SC</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="50333" sdnum="1033;"><font color="#000000">50333</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="53612" sdnum="1033;"><font color="#000000">53612</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="50759" sdnum="1033;"><font color="#000000">50759</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="55005" sdnum="1033;"><font color="#000000">55005</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="33887" sdnum="1033;"><font color="#000000">33887</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="50454" sdnum="1033;"><font color="#000000">50454</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="39796" sdnum="1033;"><font color="#000000">39796</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="55005" sdnum="1033;"><font color="#000000">55005</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-16446" sdnum="1033;"><b><font color="#FF0000">-16446</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-3158" sdnum="1033;"><b><font color="#FF0000">-3158</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="-10963" sdnum="1033;"><b><font color="#FF0000">-10963</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>
	<tr style="border: 1px solid #14777f;">
		<td style="border: 1px solid #14777f;"  align="center" valign=middle><b><font color="#000000">ST</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="32406" sdnum="1033;"><font color="#000000">32406</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="33618" sdnum="1033;"><font color="#000000">33618</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="32406" sdnum="1033;"><b><font color="#FF0000">32406</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="33618" sdnum="1033;"><b><font color="#FF0000">33618</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
		<td style="border: 1px solid #14777f;"  align="center" valign=middle sdval="0" sdnum="1033;"><b><font color="#FF0000">0</font></b></td>
	</tr>	
</table>
-->

<table border=0 cellpadding=0 cellspacing=0 width=1139 style='border-collapse:
 collapse;table-layout:fixed;width:855pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=64 span=2 style='width:48pt'>
 <col width=70 style='mso-width-source:userset;mso-width-alt:2560;width:53pt'>
 <col width=73 style='mso-width-source:userset;mso-width-alt:2669;width:55pt'>
 <col width=64 span=12 style='width:48pt'>
 <tr height=35 style='height:26.25pt'>
  <td colspan=17 height=35 class=xl66 width=1139 style='border-right:1.0pt solid black;
  height:26.25pt;width:855pt'>EAMCET 2022 FIRST &amp; LAST RANK</td>
 </tr>
 <tr height=43 style='height:32.25pt'>
  <td height=43 class=xl72 width=100 style='height:32.25pt;width:75pt'>CATEGORY</td>
  <td class=xl73 width=64 style='width:48pt'>CSE</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=70 style='width:53pt'>&nbsp;</td>
  <td class=xl74 width=73 style='width:55pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>CSM</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl74 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>CSD</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl74 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>INF</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl73 width=64 style='width:48pt'>&nbsp;</td>
  <td class=xl74 width=64 style='width:48pt'>&nbsp;</td>
 </tr>
 <tr height=35 style='height:26.25pt'>
  <td height=35 class=xl69 width=100 style='height:26.25pt;width:75pt'>&nbsp;</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Close)</td>
  <td class=xl71 width=70 style='width:53pt'>FEMALE (Open)</td>
  <td class=xl71 width=73 style='width:55pt'>FEMALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>MALE (Close)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Open)</td>
  <td class=xl71 width=64 style='width:48pt'>FEMALE (Close)</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl75 width=100 style='height:16.5pt;width:75pt'>OC</td>
  <td class=xl70 width=64 style='width:48pt'>1391</td>
  <td class=xl70 width=64 style='width:48pt'>4094</td>
  <td class=xl70 width=70 style='width:53pt'>450</td>
  <td class=xl70 width=73 style='width:55pt'>5040</td>
  <td class=xl70 width=64 style='width:48pt'>2308</td>
  <td class=xl70 width=64 style='width:48pt'>5313</td>
  <td class=xl70 width=64 style='width:48pt'>2578</td>
  <td class=xl70 width=64 style='width:48pt'>6038</td>
  <td class=xl70 width=64 style='width:48pt'>2002</td>
  <td class=xl70 width=64 style='width:48pt'>5092</td>
  <td class=xl70 width=64 style='width:48pt'>338</td>
  <td class=xl70 width=64 style='width:48pt'>338</td>
  <td class=xl70 width=64 style='width:48pt'>3351</td>
  <td class=xl70 width=64 style='width:48pt'>6666</td>
  <td class=xl70 width=64 style='width:48pt'>4699</td>
  <td class=xl70 width=64 style='width:48pt'>7833</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl72 width=100 style='height:16.5pt;width:75pt'>EWS</td>
  <td class=xl65 width=64 style='width:48pt'>2391</td>
  <td class=xl65 width=64 style='width:48pt'>4845</td>
  <td class=xl65 width=70 style='width:53pt'>2608</td>
  <td class=xl65 width=73 style='width:55pt'>6007</td>
  <td class=xl65 width=64 style='width:48pt'>3186</td>
  <td class=xl65 width=64 style='width:48pt'>6010</td>
  <td class=xl65 width=64 style='width:48pt'>4093</td>
  <td class=xl65 width=64 style='width:48pt'>6924</td>
  <td class=xl65 width=64 style='width:48pt'>3294</td>
  <td class=xl65 width=64 style='width:48pt'>5887</td>
  <td class=xl65 width=64 style='width:48pt'>6819</td>
  <td class=xl65 width=64 style='width:48pt'>6819</td>
  <td class=xl65 width=64 style='width:48pt'>4293</td>
  <td class=xl65 width=64 style='width:48pt'>7139</td>
  <td class=xl65 width=64 style='width:48pt'>7783</td>
  <td class=xl65 width=64 style='width:48pt'>8200</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl75 width=100 style='height:16.5pt;width:75pt'>BC-A</td>
  <td class=xl70 width=64 style='width:48pt'>5471</td>
  <td class=xl70 width=64 style='width:48pt'>12387</td>
  <td class=xl70 width=70 style='width:53pt'>4510</td>
  <td class=xl70 width=73 style='width:55pt'>17083</td>
  <td class=xl70 width=64 style='width:48pt'>5913</td>
  <td class=xl70 width=64 style='width:48pt'>14555</td>
  <td class=xl70 width=64 style='width:48pt'>10487</td>
  <td class=xl70 width=64 style='width:48pt'>13189</td>
  <td class=xl70 width=64 style='width:48pt'>13220</td>
  <td class=xl70 width=64 style='width:48pt'>19116</td>
  <td class=xl70 width=64 style='width:48pt'>20550</td>
  <td class=xl70 width=64 style='width:48pt'>24192</td>
  <td class=xl70 width=64 style='width:48pt'>7846</td>
  <td class=xl70 width=64 style='width:48pt'>19729</td>
  <td class=xl70 width=64 style='width:48pt'>18625</td>
  <td class=xl70 width=64 style='width:48pt'>26686</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl72 width=100 style='height:16.5pt;width:75pt'>BC-B</td>
  <td class=xl65 width=64 style='width:48pt'>1838</td>
  <td class=xl65 width=64 style='width:48pt'>6751</td>
  <td class=xl65 width=70 style='width:53pt'>1632</td>
  <td class=xl65 width=73 style='width:55pt'>7407</td>
  <td class=xl65 width=64 style='width:48pt'>3557</td>
  <td class=xl65 width=64 style='width:48pt'>8258</td>
  <td class=xl65 width=64 style='width:48pt'>7477</td>
  <td class=xl65 width=64 style='width:48pt'>8834</td>
  <td class=xl65 width=64 style='width:48pt'>6820</td>
  <td class=xl65 width=64 style='width:48pt'>7819</td>
  <td class=xl65 width=64 style='width:48pt'>8592</td>
  <td class=xl65 width=64 style='width:48pt'>9368</td>
  <td class=xl65 width=64 style='width:48pt'>6877</td>
  <td class=xl65 width=64 style='width:48pt'>9316</td>
  <td class=xl65 width=64 style='width:48pt'>5567</td>
  <td class=xl65 width=64 style='width:48pt'>10592</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl75 width=100 style='height:16.5pt;width:75pt'>BC-C</td>
  <td class=xl70 width=64 style='width:48pt'>14344</td>
  <td class=xl70 width=64 style='width:48pt'>14334</td>
  <td class=xl70 width=70 style='width:53pt'>15102</td>
  <td class=xl70 width=73 style='width:55pt'>16935</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>20370</td>
  <td class=xl70 width=64 style='width:48pt'>20370</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>21351</td>
  <td class=xl70 width=64 style='width:48pt'>21351</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl72 width=100 style='height:16.5pt;width:75pt'>BC-D</td>
  <td class=xl65 width=64 style='width:48pt'>1615</td>
  <td class=xl65 width=64 style='width:48pt'>7000</td>
  <td class=xl65 width=70 style='width:53pt'>4543</td>
  <td class=xl65 width=73 style='width:55pt'>7791</td>
  <td class=xl65 width=64 style='width:48pt'>2807</td>
  <td class=xl65 width=64 style='width:48pt'>8423</td>
  <td class=xl65 width=64 style='width:48pt'>4960</td>
  <td class=xl65 width=64 style='width:48pt'>9439</td>
  <td class=xl65 width=64 style='width:48pt'>2768</td>
  <td class=xl65 width=64 style='width:48pt'>8742</td>
  <td class=xl65 width=64 style='width:48pt'>9514</td>
  <td class=xl65 width=64 style='width:48pt'>9816</td>
  <td class=xl65 width=64 style='width:48pt'>7159</td>
  <td class=xl65 width=64 style='width:48pt'>9028</td>
  <td class=xl65 width=64 style='width:48pt'>8812</td>
  <td class=xl65 width=64 style='width:48pt'>10810</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl75 width=100 style='height:16.5pt;width:75pt'>BC-E</td>
  <td class=xl70 width=64 style='width:48pt'>3548</td>
  <td class=xl70 width=64 style='width:48pt'>15003</td>
  <td class=xl70 width=70 style='width:53pt'>7559</td>
  <td class=xl70 width=73 style='width:55pt'>16603</td>
  <td class=xl70 width=64 style='width:48pt'>12121</td>
  <td class=xl70 width=64 style='width:48pt'>17043</td>
  <td class=xl70 width=64 style='width:48pt'>20883</td>
  <td class=xl70 width=64 style='width:48pt'>20883</td>
  <td class=xl70 width=64 style='width:48pt'>16856</td>
  <td class=xl70 width=64 style='width:48pt'>16856</td>
  <td class=xl70 width=64 style='width:48pt'>22907</td>
  <td class=xl70 width=64 style='width:48pt'>22907</td>
  <td class=xl70 width=64 style='width:48pt'>4216</td>
  <td class=xl70 width=64 style='width:48pt'>23517</td>
  <td class=xl70 width=64 style='width:48pt'>27004</td>
  <td class=xl70 width=64 style='width:48pt'>27004</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl72 width=100 style='height:16.5pt;width:75pt'>SC</td>
  <td class=xl65 width=64 style='width:48pt'>4805</td>
  <td class=xl65 width=64 style='width:48pt'>23304</td>
  <td class=xl65 width=70 style='width:53pt'>4931</td>
  <td class=xl65 width=73 style='width:55pt'>24413</td>
  <td class=xl65 width=64 style='width:48pt'>12565</td>
  <td class=xl65 width=64 style='width:48pt'>29508</td>
  <td class=xl65 width=64 style='width:48pt'>19082</td>
  <td class=xl65 width=64 style='width:48pt'>30788</td>
  <td class=xl65 width=64 style='width:48pt'>17753</td>
  <td class=xl65 width=64 style='width:48pt'>30580</td>
  <td class=xl65 width=64 style='width:48pt'>28758</td>
  <td class=xl65 width=64 style='width:48pt'>31879</td>
  <td class=xl65 width=64 style='width:48pt'>24633</td>
  <td class=xl65 width=64 style='width:48pt'>36149</td>
  <td class=xl65 width=64 style='width:48pt'>25804</td>
  <td class=xl65 width=64 style='width:48pt'>38316</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl75 width=100 style='height:16.5pt;width:75pt'>ST</td>
  <td class=xl70 width=64 style='width:48pt'>3311</td>
  <td class=xl70 width=64 style='width:48pt'>16319</td>
  <td class=xl70 width=70 style='width:53pt'>13638</td>
  <td class=xl70 width=73 style='width:55pt'>26302</td>
  <td class=xl70 width=64 style='width:48pt'>16142</td>
  <td class=xl70 width=64 style='width:48pt'>22145</td>
  <td class=xl70 width=64 style='width:48pt'>31787</td>
  <td class=xl70 width=64 style='width:48pt'>36047</td>
  <td class=xl70 width=64 style='width:48pt'>19788</td>
  <td class=xl70 width=64 style='width:48pt'>23266</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>NIL</td>
  <td class=xl70 width=64 style='width:48pt'>22200</td>
  <td class=xl70 width=64 style='width:48pt'>25006</td>
  <td class=xl70 width=64 style='width:48pt'>36351</td>
  <td class=xl70 width=64 style='width:48pt'>40229</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=100 style='width:75pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=70 style='width:53pt'></td>
  <td width=73 style='width:55pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
</table>

</div> </div>
  </div></div> </div>
  </section>
</div>
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>