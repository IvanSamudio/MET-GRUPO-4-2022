<!DOCTYPE html>
<html lang="es">
<head>
    <base href="{BASE_URL}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{$Titulo}</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/calendario.css">
    <link rel="stylesheet" href="css/horarios.css">
    {* <link rel="stylesheet" href="{$basehref}css/estilos.css"> *}
    {* <link rel="stylesheet" href="{$basehref}css/calendario.css"> *}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="../TurnoFacil/Images/logo-transparente.png" alt="logo" srcset="" width="200px" height="100px">
    </div>
    
    <div class="menu">
        <div class="iconoMenu">
            <svg viewBox="0 0 60 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 4C0 1.79086 1.79086 0 4 0H56C58.2091 0 60 1.79086 60 4V46C60 48.2091 58.2091 50 56 50H4C1.79086 50 0 48.2091 0 46V4Z" fill="white" fill-opacity="0.01"/>
            <rect width="30" height="30" transform="translate(15 10)" fill="white" fill-opacity="0.01"/>
            <path d="M19 33H41H19Z" fill="#F2F2F2"/>
            <path d="M19 17H41M19 25H41M19 33H41" stroke="#F2F2F2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M4 1H56V-1H4V1ZM59 4V46H61V4H59ZM56 49H4V51H56V49ZM1 46V4H-1V46H1ZM4 49C2.34315 49 1 47.6569 1 46H-1C-1 48.7614 1.23858 51 4 51V49ZM59 46C59 47.6569 57.6569 49 56 49V51C58.7614 51 61 48.7614 61 46H59ZM56 1C57.6569 1 59 2.34315 59 4H61C61 1.23858 58.7614 -1 56 -1V1ZM4 -1C1.23858 -1 -1 1.23858 -1 4H1C1 2.34315 2.34315 1 4 1V-1Z" fill="#F2F2F2"/>
            </svg>
        </div>

        <div class="icono"><svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 15C28.1458 15 26.3332 15.5498 24.7915 16.58C23.2498 17.6101 22.0482 19.0743 21.3386 20.7873C20.6291 22.5004 20.4434 24.3854 20.8051 26.204C21.1669 28.0225 22.0598 29.693 23.3709 31.0041C24.682 32.3152 26.3525 33.2081 28.171 33.5699C29.9896 33.9316 31.8746 33.7459 33.5877 33.0364C35.3007 32.3268 36.7649 31.1252 37.795 29.5835C38.8252 28.0418 39.375 26.2292 39.375 24.375C39.375 21.8886 38.3873 19.504 36.6291 17.7459C34.871 15.9877 32.4864 15 30 15Z" fill="#F2F2F2"/>
            <path d="M30 3.75C24.8083 3.75 19.7331 5.28954 15.4163 8.17392C11.0995 11.0583 7.73497 15.158 5.74817 19.9546C3.76137 24.7511 3.24154 30.0291 4.2544 35.1211C5.26726 40.2131 7.76733 44.8904 11.4385 48.5616C15.1096 52.2327 19.7869 54.7327 24.8789 55.7456C29.9709 56.7585 35.2489 56.2386 40.0455 54.2518C44.842 52.265 48.9417 48.9005 51.8261 44.5837C54.7105 40.2669 56.25 35.1918 56.25 30C56.2421 23.0405 53.4739 16.3683 48.5528 11.4472C43.6317 6.52611 36.9595 3.75794 30 3.75ZM44.985 46.7363C44.9476 44.2769 43.9456 41.9306 42.1948 40.203C40.4441 38.4753 38.0847 37.5046 35.625 37.5H24.375C21.9154 37.5046 19.556 38.4753 17.8052 40.203C16.0544 41.9306 15.0524 44.2769 15.015 46.7363C11.6148 43.7002 9.21701 39.7029 8.13908 35.2737C7.06115 30.8446 7.35395 26.1925 8.97871 21.9335C10.6035 17.6745 13.4835 14.0094 17.2376 11.4236C20.9916 8.83775 25.4425 7.45317 30.0009 7.45317C34.5594 7.45317 39.0103 8.83775 42.7643 11.4236C46.5183 14.0094 49.3984 17.6745 51.0232 21.9335C52.6479 26.1925 52.9408 30.8446 51.8628 35.2737C50.7849 39.7029 48.3871 43.7002 44.9869 46.7363H44.985Z" fill="#F2F2F2"/>
            </svg>
        </div>

        <div class="icono">
        <a href=" "><svg viewBox="0 0 54 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M52.459 25.5898L28.3242 1.47265C28.1504 1.29854 27.944 1.1604 27.7168 1.06615C27.4896 0.971899 27.246 0.923386 27 0.923386C26.754 0.923386 26.5104 0.971899 26.2832 1.06615C26.056 1.1604 25.8496 1.29854 25.6758 1.47265L1.54102 25.5898C0.837891 26.293 0.439453 27.248 0.439453 28.2441C0.439453 30.3125 2.12109 31.9941 4.18945 31.9941H6.73242V49.2031C6.73242 50.2402 7.57031 51.0781 8.60742 51.0781H23.25V37.9531H29.8125V51.0781H45.3926C46.4297 51.0781 47.2676 50.2402 47.2676 49.2031V31.9941H49.8105C50.8066 31.9941 51.7617 31.6016 52.4648 30.8926C53.9238 29.4277 53.9238 27.0547 52.459 25.5898Z" fill="#F2F2F2"/>
            </svg>
            </a>    
        </div>
    </div>
</header>