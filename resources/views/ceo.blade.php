<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Pessi | Creative Designer</title>
    <link rel="icon" href="{{ asset('img/webp/favico.webp') }}" type="image/x-icon">
    <meta name="description" content="João Pessi, Creative Designer com experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais. Transforme suas ideias em realidade.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourwebsite.com/">
    <meta property="og:title" content="João Pessi | Creative Designer">
    <meta property="og:description" content="João Pessi, Creative Designer com experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais. Transforme suas ideias em realidade.">
    <meta property="og:image" content="{{ asset('img/webp/social_image.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://yourwebsite.com/">
    <meta property="twitter:title" content="João Pessi | Creative Designer">
    <meta property="twitter:description" content="João Pessi, Creative Designer com experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais. Transforme suas ideias em realidade.">
    <meta property="twitter:image" content="{{ asset('img/webp/social_image.webp') }}">

    @vite('resources/css/app.css')
</head>
<body>
<header class="header">
    <span class="text-xs md:text-sm text-white">Pronto para transformar suas ideias em realidade?</span>
</header>

<main>
    <section class="bg-primary p-8 pb-40">

        <div class="md:max-w-7xl flex justify-center md:justify-between items-center mx-auto md:pb-8 md:border-b md:border-solid md:border-dirt_white">
            <div class="flex">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('img/webp/logo_white.webp') }}">
                    <img src="{{ asset('img/webp/logo_white_mobile.webp') }}" alt="Logo João Pessi">
                </picture>
                <div class="flex flex-col justify-center items-center text-white ml-4">
                    <span class="text-xl md:text-2xl font-bold">João Pessi</span>
                    <span class="text-xs md:text-sm">Creative Designer</span>
                </div>
            </div>

            <div class="hidden md:block">
                <nav class="flex justify-center items-center">
                    <a href="#" class="text-lg text-white font-bold hover:text-secondary px-4">Início</a>
                    <a href="#projetos" class="text-lg text-white font-bold hover:text-secondary px-4">Projetos</a>
                    <a href="#" class="text-lg text-white font-bold hover:text-secondary px-4">Contato</a>
                    <a href="#sobre" class="text-lg text-white font-bold hover:text-secondary px-4">Sobre</a>
                </nav>
            </div>
        </div>

        <div class="md:max-w-7xl flex flex-col md:flex-row-reverse md:justify-between mx-auto mt-5">
            <div>
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('img/webp/heroes.webp') }}">
                    <img src="{{ asset('img/webp/heroes_mobile.webp') }}" alt="Vetor de homem mechendo no computador">
                </picture>
            </div>

            <div class="md:w-1/2 flex flex-col justify-center items-center md:items-start mt-4 md:mt-0">
                <h1 class="text-[2rem] md:text-[4rem] text-white font-bold text-center md:text-start">Bem-vindo ao meu mundo de design!</h1>

                <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-4">
                    Descubra uma seleção de projetos impactantes que transformam ideias em realidade. Explorar novas formas de criar experiências visuais é o que guia cada trabalho.
                </p>
                <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-2">
                    Navegue pelas diversas áreas de design e veja como criatividade e inovação podem se combinar para gerar resultados excepcionais.
                </p>

                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 md:mt-24">
                    <a href="/contato" class="md:text-2xl font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-regular fa-envelope"></i> Contato</a>
                    <a href="#" class="md:text-2xl font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dirt_white p-8">
        <div class="md:max-w-7xl grid grid-cols-1 md:grid-cols-4 gap-4 mx-auto md:-mt-28">
            <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                <img src="{{ asset('img/webp/ux_ui.webp') }}" alt="UX/UI Design">
                <h2 class="text-2xl font-bold text-center mt-10">UX/UI</h2>
                <p class="font-normal text-center mt-5">
                    Design de interfaces intuitivas e experiências de usuário memoráveis para aplicativos móveis e web.
                </p>
            </div>

            <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                <img src="{{ asset('img/webp/motion_design.webp') }}" alt="Motion Design">
                <h2 class="text-2xl font-bold text-center mt-10">Motion Design</h2>
                <p class="font-normal text-center mt-5">
                    Criação de animações e vídeos envolventes para campanhas publicitárias, apresentações e conteúdo digital.
                </p>
            </div>

            <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                <img src="{{ asset('img/webp/brand_design.webp') }}" alt="Brand Design">
                <h2 class="text-2xl font-bold text-center mt-10">Brand Design</h2>
                <p class="font-normal text-center mt-5">
                    Criação de identidades visuais marcantes e coesas, incluindo logotipos, paletas de cores e diretrizes de marca, para ajudar seu negócio a se destacar.
                </p>
            </div>

            <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                <img src="{{ asset('img/webp/media_desing.webp') }}" alt="Design para mídias pagas e sociais">
                <h2 class="text-2xl font-bold text-center mt-10">Design para mídias pagas e sociais</h2>
                <p class="font-normal text-center mt-5">
                    Desenvolvimento de peças criativas para anúncios pagos e conteúdo para redes sociais, otimizadas para engajamento e conversão.
                </p>
            </div>
        </div>
    </section>

    <section id="projetos" class="bg-dirt_white p-8 pb-20">
        <div class="w-full md:max-w-7xl mx-auto">
            <div class="flex justify-center md:justify-start items-end">
                <h2 class="text-primary text-[2rem] md:leading-[3rem] md:text-[4rem] font-bold text-center">Projetos</h2>
                <div class="hidden md:block h-[5px] bg-primary w-full ml-4"></div>
            </div>

            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                <div>
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/flash_solda.webp') }}">
                        <img src="{{ asset('img/webp/flash_solda_mobile.webp') }}" alt="Projeto Flash Solda">
                    </picture>
                </div>

                <div class="md:w-2/5 text-center md:text-start">
                    <h3 class="text-primary text-[2.5rem] font-bold mt-4">Flash Solda</h3>
                    <p class="text-primary text-base font-normal mt-2">
                        O projeto Flash Solda foi um desafio interessante, onde trabalhei no design de UX/UI para uma aplicação industrial. A meta era criar uma interface intuitiva que melhorasse a eficiência operacional.
                    </p>
                </div>
            </div>

            <div class="flex flex-col-reverse md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                <div class="md:w-2/5 text-center md:text-start">
                    <h3 class="text-primary text-[2.5rem] font-bold mt-4">MyCoffee</h3>
                    <p class="text-primary text-base font-normal mt-2">
                        Para MyCoffee, desenvolvi uma série de vídeos animados para campanhas publicitárias, focando em transmitir a essência da marca de maneira cativante e envolvente.
                    </p>
                </div>

                <div>
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/my_coffee.webp') }}">
                        <img src="{{ asset('img/webp/my_coffee_mobile.webp') }}" alt="Projeto MyCoffee">
                    </picture>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                <div>
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/simples_oil.webp') }}">
                        <img src="{{ asset('img/webp/simples_oil_mobile.webp') }}" alt="Projeto Simples Oil">
                    </picture>
                </div>

                <div class="md:w-2/5 text-center md:text-start">
                    <h3 class="text-primary text-[2.5rem] font-bold mt-4">Simples Oil</h3>
                    <p class="text-primary text-base font-normal mt-2">
                        No projeto Simples Oil, criei uma identidade visual completa, desde o logotipo até o design de embalagens, para reforçar a presença da marca no mercado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre" class="bg-primary p-8">
        <div class="md:max-w-7xl flex flex-col md:flex-row md:justify-between items-center mx-auto">
            <div>
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('img/webp/joao_pessi.webp') }}">
                    <img src="{{ asset('img/webp/joao_pessi_mobile.webp') }}" alt="João Pessi, Creative Designer">
                </picture>
            </div>

            <div class="md:w-1/2 flex flex-col justify-center items-center md:items-start mt-4 md:mt-0">
                <h2 class="text-[2rem] md:text-[4rem] text-white font-bold text-center md:text-start">Sobre João Pessi</h2>

                <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-4">
                    Com vasta experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais, João Pessi é um Creative Designer apaixonado por transformar ideias em realidade. Sempre buscando novas formas de criar experiências visuais impactantes, ele se destaca pela inovação e criatividade.
                </p>

                <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-4">
                    Atuando em diversos projetos, João Pessi tem ajudado empresas a se destacarem no mercado através de soluções visuais únicas e memoráveis. Seu portfólio é uma prova de seu compromisso com a excelência e a satisfação do cliente.
                </p>
            </div>
        </div>
    </section>
</main>

<footer class="footer bg-primary p-8">
    <div class="md:max-w-7xl flex flex-col md:flex-row md:justify-between items-center mx-auto">
        <div class="flex flex-col justify-center items-center md:items-start text-white">
            <span class="text-lg md:text-xl font-bold">João Pessi</span>
            <span class="text-xs md:text-sm">Creative Designer</span>
        </div>

        <div class="mt-4 md:mt-0">
            <nav class="flex justify-center items-center">
                <a href="#" class="text-lg text-white font-bold hover:text-secondary px-4">Início</a>
                <a href="#projetos" class="text-lg text-white font-bold hover:text-secondary px-4">Projetos</a>
                <a href="#" class="text-lg text-white font-bold hover:text-secondary px-4">Contato</a>
                <a href="#sobre" class="text-lg text-white font-bold hover:text-secondary px-4">Sobre</a>
            </nav>
        </div>
    </div>
</footer>

</body>
</html>
