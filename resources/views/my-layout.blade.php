<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Voorstelwebsite van Lars de Hond gemaakt op het HBO ICT.">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Home</title>
</head>
<body>
<header>
    <h1>Lars de Hond</h1>
    <nav>
        <ul class="topnav">
            <li><a href="/" id="home" class="{{Request::path() === '/' ? 'active' : ''}}">Home</a></li>
            <li><a href="/myprofile" id="profile" class="{{Request::path() === 'profile' ? 'active' : ''}}">Profile</a></li>
            <li><a href="/logindashboard" id="logindashboard" class="{{Request::path() === 'logindashboard' ? 'active' : ''}}">Dashboard</a></li>
            <li><a href="/faqs" id="faqs" class="{{Request::path() === 'faqs' ? 'active' : ''}}">FAQ</a></li>
            <li><a href="/blog" id="blog" class="{{Request::path() === 'blog' ? 'active' : ''}}">Blog</a></li>
            @yield('menu')
            <a href="https://hz.nl/" id="logo" target="_blank"><img src="/images/logo.png" alt="logo" class="logo"></a>
        </ul>
    </nav>
</header>
<aside>
    <ul>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">
                <h4>Belangrijke links</h4>
            </a>
            <div class="dropdown-content">
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/EN/6.-Regulations-Study-Programmes/CER-HZ-Bachelor-full-time-2022-2023-DEF-June-13.pdf"
                   target="_blank">HZ HBO-ICT Course and Examination Regulations</a>
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
                   target="_blank">The Implementation Regulations </a>
                <a href="https://learn.hz.nl/my/" target="_blank">Learn environment</a>
                <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                   target="_blank">Teams environment</a>
                <a href="https://hz.osiris-student.nl/#/voortgang/" target="_blank">study progress</a>
                <a href="https://github.com/hz-hbo-ict" target="_blank">Github</a>
            </div>
        </li>
    </ul>
    @yield('article')
</aside>
@yield('content')
<footer>
    <div class="card-container4">
        <a href="http://larswebtech.nl/" target="_blank"><img src="../images/webtech.jpg" alt="larswebtech" class="xsmall"></a>
        <div class="card1">
            <p>Lars de Hond HBO ICT</p>
        </div>
        <a href="https://hz.nl/opleidingen/hbo-ict?utm_campaign=GS+%7C+VT+NL+%7C+Economie+%26+Management+%7C+Sanne&utm_
    term=informatica%20opleiding&utm_source=adwords&utm_medium=ppc&hsa_ver=3&hsa_acc=1275142988&hsa_mt=p&hsa_src=g&hsa_cam=16016975502&hsa_grp=137964015572&hsa_tgt=kwd-130298890&hsa_kw=informatica%20opleiding&hsa_ad=578501639192&hsa_
    net=adwords&gclid=EAIaIQobChMItcSfqfSR-gIVkql3Ch36jgdQEAAYASAAEgK81fD_BwE" target="_blank"><img src="../images/ictlogo.jpg" alt="hbo_ict" class="xsmall"></a>
    </div>
</footer>
</body>
</html>
