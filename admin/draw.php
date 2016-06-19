<?php    
 /* CAT:Bar Chart */ 
 require('connect.php');
 /* pChart library inclusions */ 
 include("../pchar/class/pData.class.php"); 
 include("../pchar/class/pDraw.class.php"); 
 include("../pchar/class/pImage.class.php"); 
$MyData = new pData(); 
if(isset($_GET['year']))$listyear=$_GET['year']; else $listyear=date('Y')-1;
//Lập trình lấy ra dữ liệu từ bảng hóa đơn
$label=array();
for($month=1;$month<=12;$month++)
{
	$label[]='Tháng '.$month;
}
$arryear=explode(',',$listyear);
foreach($arryear as $year)
{
	$values=array();
	for($month=1;$month<=12;$month++)
	{
		$omonth=$month; 	if($omonth<10)$omonth='0'.$omonth;
		$begin=$year.'-'.$omonth.'-01 00:00:00';//Đầu tháng trước
		$time=mktime(0,0,0,$month,1,$year);//Lấy số giây bất kỳ trong 1 tháng	
		$end=$year.'-'.$omonth.'-'.date('t',$time).' 23:59:59';//cuối tháng
		$total=$lib->gettotal($begin,$end)/1000000000;
		$values[]=round($total,2);
		//$tongtien+=$total;
	}
	$MyData->addPoints($values,$year); 
}
 /* Create and populate the pData object */ 
 $MyData->addPoints($label,"month"); 
 
 $MyData->setAbscissa("month"); 
 $MyData->setAbscissaName("Tổng tiền"); 
 $MyData->setAxisDisplay(0,AXIS_FORMAT_METRIC,1); 
 /* Create the pChart object */ 
 $myPicture = new pImage(1400,800,$MyData); 
 $myPicture->drawGradientArea(0,0,1400,800,DIRECTION_VERTICAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240,"EndR"=>180,"EndG"=>180,"EndB"=>180,"Alpha"=>100)); 
 $myPicture->drawGradientArea(0,0,1400,800,DIRECTION_HORIZONTAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240,"EndR"=>180,"EndG"=>180,"EndB"=>180,"Alpha"=>20)); 
 $myPicture->setFontProperties(array("FontName"=>"../pchar/fonts/arial.ttf","FontSize"=>12)); 

 /* Draw the chart scale */  
 $myPicture->setGraphArea(100,30,1380,780); 
 $myPicture->drawScale(array("CycleBackground"=>TRUE,"DrawSubTicks"=>TRUE,"GridR"=>0,"GridG"=>0,"GridB"=>0,"GridAlpha"=>10,"Pos"=>SCALE_POS_TOPBOTTOM)); //  

 /* Turn on shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10)); 

 /* Draw the chart */  
 $myPicture->drawBarChart(array("DisplayPos"=>LABEL_POS_INSIDE,"DisplayValues"=>TRUE,"Rounded"=>TRUE,"Surrounding"=>30)); 

 /* Write the legend */  
 $myPicture->drawLegend(570,215,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL)); 

 /* Render the picture (choose the best way) */ 
 $myPicture->autoOutput("pictures/example.drawBarChart.vertical.png"); 
?>