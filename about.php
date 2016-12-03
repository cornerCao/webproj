<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <style type="text/css">

        #background{
            margin: 30px auto;
            max-width: 700px;
        }

        #background > p{
            text-indent: 20px;
            font-size: 15px;
        }
        ul{
            list-style: none;
        }
        .position ul{
            list-style: none;
        }
        #links{
            position: fixed;
            top: 10%;
            right: 3%;
            width: 100px;
            height: 100px;
            text-align: center;
            padding-top: 15px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
<?php
$active = 'about';
include_once 'helper/nav.php';
?>
<h1 style="text-align:center;margin-top:100px;">About</h1>
<div id="background">
    <p>Smart computing is emerging as an important multidisciplinary area, which effectively makes use of computer hardware, software, social media and communication networks together with digital sensors, smart devices, internet technologies, big data analytics, computational intelligence and intelligent systems to realize various innovative applications. Smart computing can be broadly classified into two major areas: how to design and build smart computing systems and how to use computing technology to design smart things and make human life better. Applications of smart computing span across different areas, such as business, healthcare, environmental protection, security, entertainment, and social activities. The advancement of cloud computing, pervasive computing and social computing are bringing smart computing to a newer dimension and improving our ways of living.
    </p>
    <p>2014 International Conference on Smart Computing (SMARTCOMP 2014) invites original papers on any topic that is related to smart computing. Hosted by the Department of Computing, The Hong Kong Polytechnic University, SMARTCOMP 2014 is the first international conference on smart computing. With the theme “Innovation and Applications through Smart Computing”, SMARTCOMP 2014 will provide an interactive forum for researchers, engineers and vendors from different disciplines to exchange ideas and experience, identify future directions and challenges, and explore collaborative research and system development. This conference will significantly benefit a large variety of audience from both academia and industry. You are cordially invited and most welcome to participate in SMARTCOMP 2014.
    </p>

</div>
<a id="gotoTop" onclick="gotoTop()"><span class="glyphicon glyphicon-chevron-up"></span></a>
<div id="links">
    <span style="font-size: 13px" class="glyphicon glyphicon-link"></span>
    <span style="text-align: center"><a  href="https://www.polyu.edu.hk/web/en/home/index.html" target="_blank">PolyU</a></span><br>
    <span style="font-size: 13px" class="glyphicon glyphicon-link"></span>
    <span style="text-align: center"><a  href="https://www.comp.polyu.edu.hk/" target="_blank">COMP</a></span>
</div>
<?php
$caption = ["Honorary Chair","General Co-chairs","Program Co-chairs","Program Vice Chairs","Workshop/Demo Co-chairs","Panel Co-chairs","Publicity Co-chairs","Publication Co-chairs","Finance Chair","Registration Chair","Local Arrangement Co-chairs","Conference Secretary","Steering Committee"];
//        $list[]=["Vijayakumar Bhagavatula, Carnegie Mellon University, USA","Jiannong Cao, The Hong Kong Polytechnic University, Hong Kong"];

$data[] = ["caption"=>"Honorary Chair","list"=>[["Timothy Tong",'The Hong Kong Polytechnic University','Hong Kong']]];
$data[] = ["caption"=>"General Co-chairs","list"=>[["David Zhang",'The Hong Kong Polytechnic University','Hong Kong'],["Albert Zomaya",'The University of Sydney','Australia']]];
$data[] = ["caption"=>"Program Co-chairs","list"=>[["Vijayakumar Bhagavatula",'Carnegie Mellon University','USA'],["Jiannong Cao",'The Hong Kong Polytechnic University','Hong Kong']]];
$data[] = ["caption"=>"Program Vice Chairs","list"=>[["Henry Chan","The Hong Kong Polytechnic University",'Hong Kong'],['Sajal Das', 'Missouri University of Science and Technology','USA'],['Victor Leung', 'The University of British Columbia', 'Canada'],['Neeraj Suri', 'Technische Universität Darmstadt', 'Germany'],['Jane You', 'The Hong Kong Polytechnic University', 'Hong Kong']]];
$data[] = ["caption"=>"Workshop/Demo Co-chairs","list"=>[["Giuseppe Anastasi", 'University of Pisa', 'Italy'],["Ray Cheung", 'City University of Hong Kong', 'Hong Kong '],['Zili Shao', 'The Hong Kong Polytechnic University', 'Hong Kong']]];
$data[] = ["caption"=>"Panel Co-chairs","list"=>[['Christian Becker', 'University of Mannheim', 'Germany'],['Baochun Li', 'University of Toronto', 'Canada']]];
$data[] = ['caption'=>"Publicity Co-chairs",'list'=>[['Habib M. Ammari', 'University of Michigan-Dearborn', 'USA'],
    ['Lei Zhang','The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ['caption'=>'Publication Co-chairs',
    'list'=>[['Alvin Chan', 'The Hong Kong Polytechnic University', 'Hong Kong'],
        ['Hong-va Leong', 'The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ["caption"=>'Finance Chair',
    'list'=>[['Carmen Au', 'The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ["caption"=>'Registration Chair',
    'list'=>[['Dan Wang', 'The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ["caption"=>'Local Arrangement Co-chairs',
    'list'=>[['Vienna Lam', 'The Hong Kong Polytechnic University', 'Hong Kong' ],
        ['Bonny Yeung', 'The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ["caption"=>'Conference Secretary',
    'list'=>[['Carmen Au', 'The Hong Kong Polytechnic University', 'Hong Kong']]];

$data[] = ["caption"=>'Steering Committee',
    'list'=>[['Jiannong Cao', 'Chair', 'The Hong Kong Polytechnic University', 'Hong Kong'],
        ['Sajal Das', 'Co-chair', 'Missouri University of Science and Technology', 'USA'],
        ['Vijayakumar Bhagavatula', 'Carnegie Mellon University', 'USA'],
        ['Victor Leung', 'The University of British Columbia', 'Canada'],
        ['Neeraj Suri', 'Technische Universität Darmstadt', 'Germany'],
        ['Albert Zomaya', 'The University of Sydney', 'Australia']]];
?>

<h1 style="text-align:center;">Committee members</h1>
<?foreach($data as $title){?>
    <div class="row col-sm-offset-3 col-lg-7" style="display: inline-block">
        <div class="col-lg-12">
            <h4 class="page-header"><?echo $title['caption'];?></h4>
        </div>
        <?foreach ($title['list'] as $person){?>
            <div class="col-lg-4 col-sm-6 text-center" style="height:110px;">
<!--                <img class="img-circle img-responsive img-center" src="" height="90px" width="90px" style="margin:0 auto;" alt="">-->
        <span style="font-size: 15px;"><strong><?echo $person[0];?></strong>
            <?if(count($person)==4){?>
                <small style="color:#888;"><?echo $person[1];?></small>
            <?}?>
        </span><br/>
                <span style='color:#999;'><em><?echo count($person)==4?$person[2]:$person[1];?></em></span><br/>
                <span style="color:#888;"><strong><?echo count($person)==4?$person[3]:$person[2];?></strong></span>
            </div>
        <?}?>
    </div>
<?}
?>
<script src="jquery-3.1.1.min.js"></script>
<script>
    $(window).scroll(function(){
        var min_height = 300;
        var s = $(window).scrollTop();
        //The gotoTop fidein when users scroll to a certain position
        if( s > min_height){
            $("#gotoTop").fadeIn(200);
        }else{
            $("#gotoTop").fadeOut(200);
        };
    });
    function gotoTop() {
        $('html,body').animate({scrollTop:0},400);
    }
</script>
</body>
</html>