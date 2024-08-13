<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/web/css/bootstrap.css" rel="stylesheet">

    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">

    <title>تأكيد الموعد</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }

        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size: 20px;
            margin: 0;
        }

        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left: -15px;
        }

        .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>تأكيد الموعد</h1>
        <p>مرحبًا <span class="highlight">{{ $client->full_name }}</span>،</p>

        <p>
            شكرًا لتزويدنا بمعلوماتك. <br> سنتصل بك في اقرب وقت ممكن لتأكيد موعدك. <br> إذا كان لديك أي استفسارات، يرجى
            التواصل معنا على الارقام التالية :<br> 0520816447 / 0665228542
        </p>
        <p>نتطلع إلى خدمتك قريبًا.</p>
        <p>مع تحياتنا،<br>[Mr Mohamed BenMoussa]</p>
        {{-- <a href="{{ route('web.home') }}" class="button mt-5">العودة إلى الصفحة الرئيسية</a> --}}

    </div>
</body>

</html>
