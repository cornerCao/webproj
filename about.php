<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <style type="text/css">

        #about{
            margin: 30px auto;
            max-width: 650px;
        }
        #title{
            margin: 70px auto 0;
            text-align: center;
            color:#888;
        }

        #about > p{
            text-indent: 20px;
        }

    </style>
</head>
<body>
<?php
$active = 'about';
include_once 'helper/nav.php';
?>
<h1 id="title">About</h1>
<div id="about">
    <p>Smart computing is emerging as an important multidisciplinary area, which effectively makes use of computer hardware, software, social media and communication networks together with digital sensors, smart devices, internet technologies, big data analytics, computational intelligence and intelligent systems to realize various innovative applications. Smart computing can be broadly classified into two major areas: how to design and build smart computing systems and how to use computing technology to design smart things and make human life better. Applications of smart computing span across different areas, such as business, healthcare, environmental protection, security, entertainment, and social activities. The advancement of cloud computing, pervasive computing and social computing are bringing smart computing to a newer dimension and improving our ways of living.
    </p>
    <p>2014 International Conference on Smart Computing (SMARTCOMP 2014) invites original papers on any topic that is related to smart computing. Hosted by the Department of Computing, The Hong Kong Polytechnic University, SMARTCOMP 2014 is the first international conference on smart computing. With the theme “Innovation and Applications through Smart Computing”, SMARTCOMP 2014 will provide an interactive forum for researchers, engineers and vendors from different disciplines to exchange ideas and experience, identify future directions and challenges, and explore collaborative research and system development. This conference will significantly benefit a large variety of audience from both academia and industry. You are cordially invited and most welcome to participate in SMARTCOMP 2014.
    </p>

</div>
<?php
include_once "helper/footer.php";
?>

</body>
</html>