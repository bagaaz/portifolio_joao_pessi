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
    <meta property="og:url" content="https://joao.devconecta.com.br">
    <meta property="og:title" content="João Pessi | Creative Designer">
    <meta property="og:description" content="João Pessi, Creative Designer com experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais. Transforme suas ideias em realidade.">
    <meta property="og:image" content="{{ asset('img/webp/joao_pessi.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://joao.devconecta.com.br">
    <meta property="twitter:title" content="João Pessi | Creative Designer">
    <meta property="twitter:description" content="João Pessi, Creative Designer com experiência em UX/UI, Motion Design, Brand Design e Design para mídias pagas e sociais. Transforme suas ideias em realidade.">
    <meta property="twitter:image" content="{{ asset('img/webp/joao_pessi.webp') }}">

    <!-- Preload para fontes -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </noscript>

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
                        <a href="#contato" class="text-lg text-white font-bold hover:text-secondary px-4">Contato</a>
                        <a href="#sobre" class="text-lg text-white font-bold hover:text-secondary px-4">Sobre</a>
                    </nav>
                </div>
            </div>

            <div class="md:max-w-7xl flex flex-col md:flex-row-reverse md:justify-between mx-auto mt-5">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('img/webp/heroes.webp') }}">
                    <img src="{{ asset('img/webp/heroes_mobile.webp') }}" alt="Vetor de homem mechendo no computador">
                </picture>

                <div class="md:w-1/2 flex flex-col justify-center items-center md:items-start mt-4 md:mt-0">
                    <h1 class="text-[2rem] md:text-[4rem] text-white font-bold text-center md:text-start">Bem-vindo ao meu mundo de design!</h1>

                    <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-4">
                        Descubra uma seleção de projetos impactantes que transformam ideias em realidade. Explorar novas formas de criar experiências visuais é o que guia cada trabalho.
                    </p>
                    <p class="text-white md:text-lg text-base font-normal text-center md:text-start mt-2">
                        Navegue pelas diversas áreas de design e veja como criatividade e inovação podem se combinar para gerar resultados excepcionais.
                    </p>

                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 md:mt-24">
                        <a href="mailto:joaopaulopessi@gmail.com" target="_blank" class="md:text-2xl font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-regular fa-envelope"></i> Contato</a>
                        <a href="https://api.whatsapp.com/send/?phone=27997759860&text&type=phone_number&app_absent=0" target="_blank" class="md:text-2xl font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dirt_white p-8">
            <div class="md:max-w-7xl grid grid-cols-1 md:grid-cols-4 gap-4 mx-auto md:-mt-28">
                <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                    <img src="{{ asset('img/webp/ux_ui.webp') }}" alt="UX/UI Design" loading="lazy">
                    <h2 class="text-2xl font-bold text-center mt-10">UX/UI</h2>
                    <p class="font-normal text-center mt-5">
                        Design de interfaces intuitivas e experiências de usuário memoráveis para aplicativos móveis e web.
                    </p>
                </div>

                <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                    <img src="{{ asset('img/webp/motion_design.webp') }}" alt="Motion Design" loading="lazy">
                    <h2 class="text-2xl font-bold text-center mt-10">Motion Design</h2>
                    <p class="font-normal text-center mt-5">
                        Criação de animações e vídeos envolventes para campanhas publicitárias, apresentações e conteúdo digital.
                    </p>
                </div>

                <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                    <img src="{{ asset('img/webp/brand_design.webp') }}" alt="Brand Design" loading="lazy">
                    <h2 class="text-2xl font-bold text-center mt-10">Brand Design</h2>
                    <p class="font-normal text-center mt-5">
                        Criação de identidades visuais marcantes e coesas, incluindo logotipos, paletas de cores e diretrizes de marca, para ajudar seu negócio a se destacar.
                    </p>
                </div>

                <div class="flex flex-col justify-between items-center bg-white border border-solid border-primary shadow-xl px-5 py-10">
                    <img src="{{ asset('img/webp/media_desing.webp') }}" alt="Design para mídias pagas e sociais" loading="lazy">
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
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/flash_solda.webp') }}">
                        <img src="{{ asset('img/webp/flash_solda_mobile.webp') }}" alt="Projeto Flash Solda" loading="lazy">
                    </picture>

                    <div class="md:w-2/5 text-center md:text-start">
                        <h3 class="text-primary text-[2.5rem] font-bold mt-4">Flash Solda</h3>
                        <span class="text-primary text-lg font-normal mt-2">UX/UI</span>
                        <p class="text-lg mt-4">
                            Desenvolvimento de uma landing page para a Flash Solda, focada na venda de uma máquina de solda alinhada a uma metodologia de estudo. O objetivo era destacar as vantagens do pacote e apresentar a oferta de maneira clara e atrativa para o usuário.
                        </p>

                        <div class="w-full md:w-4/5 grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <a href="https://www.behance.net/gallery/199321637/Landing-Page-Flash-Solda" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4">Conhecer</a>
                            <a href="https://www.figma.com/proto/yjcGlXoX1WkIMrfSwgfJGA/Flash-Solda?page-id=0%3A1&node-id=1-39&viewport=355%2C413%2C0.07&t=X4P6uc0E9R1cdr4z-1&scaling=min-zoom&content-scaling=fixed" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4"><i class="fa-brands fa-figma"></i> Ver protótipo</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/savvi.webp') }}">
                        <img src="{{ asset('img/webp/savvi_mobile.webp') }}" alt="Projeto Flash Solda" loading="lazy">
                    </picture>

                    <div class="md:w-2/5 text-center md:text-start">
                        <h3 class="text-primary text-[2.5rem] font-bold mt-4">Savvi</h3>
                        <span class="text-primary text-lg font-normal mt-2">Motion</span>
                        <p class="text-lg mt-4">
                            Desenvolvimento de um vídeo institucional para a Savvi com o objetivo de apresentar a empresa, seus funcionários e cases de sucesso durante o evento Mercado Live Experience 2023. O vídeo deveria transmitir a essência da empresa e destacar suas conquistas.
                        </p>

                        <div class="w-full md:w-4/5 grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <a href="https://www.behance.net/gallery/188610615/Video-Institucional-Savvi" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4">Conhecer</a>
                            <a href="https://vimeo.com/901494621" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4"><i class="fa-brands fa-vimeo-v"></i> Ver vídeo</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/frutekas.webp') }}">
                        <img src="{{ asset('img/webp/frutekas_mobile.webp') }}" alt="Projeto Flash Solda" loading="lazy">
                    </picture>

                    <div class="md:w-2/5 text-center md:text-start">
                        <h3 class="text-primary text-[2.5rem] font-bold  mt-4">Frutekas</h3>
                        <span class="text-primary text-lg font-normal mt-2">UX/UI</span>
                        <p class="text-lg mt-4">
                            A Landing Page Frutekas foi criada para e compartilhar com o mundo o sabor autêntico e a pureza das frutas brasileiras. O objetivo deles é simples: proporcionar aos consumidores uma opção saudável e prática para desfrutar da frescura das frutas sem abrir mão da qualidade.
                        </p>

                        <div class="w-full md:w-4/5 grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <a href="https://www.behance.net/gallery/195451873/Landing-Page-Frutekas" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4">Conhecer</a>
                            <a href="https://www.figma.com/proto/eSilsFPF4BHjtm9mmdU2eG/Frutekas?page-id=0%3A1&node-id=1-5&viewport=460%2C400%2C0.08&t=vRmM0g2wYz3sv7KO-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=1%3A5" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4"><i class="fa-brands fa-figma"></i> Ver protótipo</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center border-b-[5px] border-solid border-primary pb-10 mt-10 md:mt-20">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('img/webp/kontrol.webp') }}">
                        <img src="{{ asset('img/webp/kontrol_mobile.webp') }}" alt="Projeto Flash Solda" loading="lazy">
                    </picture>

                    <div class="md:w-2/5 text-center md:text-start">
                        <h3 class="text-primary text-[2.5rem] font-bold mt-4">Kontrol</h3>
                        <span class="text-primary text-lg font-normal mt-2">Branding</span>
                        <p class="text-lg mt-4">
                            Desenvolvi a identidade visual para a Kontrol Tecnologia, uma empresa de software de gestão de estabelecimentos. O objetivo central foi transmitir uma sensação de segurança e modernidade aos clientes, representada pelos tons de azul escuro e claro.
                        </p>

                        <div class="w-full md:w-4/5 grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <a href="https://www.behance.net/gallery/120414797/Kontrol-Tecnologia" target="_blank" class="font-bold text-center border-2 border-solid border-primary text-primary hover:bg-primary hover:text-white py-4">Conhecer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="bg-dirt_white md:pb-16">
            <div class="w-full md:max-w-7xl bg-primary p-8 md:px-16 mx-auto">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <h2 class="md:w-[30%] text-3xl font-bold text-white text-center px-4">Vamos começar um projeto?</h2>
                    <p class="md:w-[30%] text-white font-normal text-center mt-5">
                        Entre em contato para discutir seus próximos projetos e descobrir como posso ajudá-lo a alcançar seus objetivos de design.
                    </p>

                    <div class="w-full md:w-[30%] grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 md:mt-0">
                        <a href="mailto:joaopaulopessi@gmail.com" target="_blank" class="font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-regular fa-envelope"></i> Contato</a>
                        <a href="https://api.whatsapp.com/send/?phone=27997759860&text&type=phone_number&app_absent=0" target="_blank" class="font-bold text-center border-2 border-solid border-white text-white hover:bg-white hover:text-primary py-4"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="p-8">
            <div class="md:max-w-7xl flex flex-col md:flex-row-reverse md:justify-between mx-auto">
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/webp/joao_pessi.webp') }}" alt="Foto do João Pessi" loading="lazy">
                </div>

                <div class="md:w-9/12 flex flex-col md:mr-8">
                    <div class="border-b-[4px] border-solid border-primary py-4">
                        <h2 class="text-primary text-3xl font-bold text-center md:text-start">Olá, sou o João Pessi</h2>
                    </div>

                    <div class="font-normal text-start mt-4">
                        <p class="mb-2">
                            Tenho {{ ((int) \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(1997, 10, 28)))*-1 }} anos e moro no Espírito Santo, Brasil.
                        </p>
                        <p class="mb-2">
                            Trabalho como Designer há <span class="font-bold">{{ ((int) \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(2019, 1, 1)))*-1 }} anos</span>, acumulando experiência em várias áreas do design, como <span class="font-bold">Motion Design</span>, <span class="font-bold">UX/UI</span>, <span class="font-bold">Design Gráfico</span> e <span class="font-bold">Branding</span>.
                        </p>
                        <p class="mb-2">
                            Minhas criações são voltadas para atender ás <span class="font-bold">necessidades de meus clientes</span>, sempre buscando soluções inovadoras que se destacam.
                        </p>
                        <p class="mb-2">
                            Minha abordagem ao design é centrada em contar histórias visuais que <span class="font-bold">conectam ideias e emoções</span>. Eu acredito que um design bem executado pode transformar uma <span class="font-bold">visão em realidade</span>, impactando positivamente as carcas e projetos com os quais colaboro.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-primary text-center py-6">
        <span class="text-white">Desenvolvendo criatividade em cada detalhe</span>
    </footer>

    <script src="https://kit.fontawesome.com/3aaec5b8b5.js" crossorigin="anonymous" defer></script>
    @vite('resources/js/app.js')
</body>
</html>
