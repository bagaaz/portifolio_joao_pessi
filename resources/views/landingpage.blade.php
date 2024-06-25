<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Pessi | Creative Designer</title>
    <link rel="icon" href="{{ asset('img/webp/favico.webp') }}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>
<body>
    <header class="header">
        <span class="text-white">Pronto para transformar suas ideias em realidade?</span>
    </header>

    <main>
        <section class="bg-primary p-8">

            <div class="flex justify-center items-center">
                <div class="flex">
                    <img src="{{ asset('img/webp/logo_white_mobile.webp') }}" alt="Logo João Pessi">
                    <div class="flex flex-col justify-center items-center text-white ml-4">
                        <span class="text-xl font-bold">João Pessi</span>
                        <span class="text-xs">Creative Designer</span>
                    </div>
                </div>
            </div>

            <div class="flex-col mt-5">
                <div>
                    <img src="{{ asset('img/webp/heroes_mobile.webp') }}" alt="Hero" class="w-full">
                </div>

                <div class="flex flex-col justify-center items-center mt-4">
                    <h1 class="text-[2rem] text-white font-bold text-center">Bem-vindo ao meu mundo de design!</h1>

                    <p class="text-white text-base font-normal text-center mt-4">
                        Descubra uma seleção de projetos impactantes que transformam ideias em realidade. Explorar novas formas de criar experiências visuais é o que guia cada trabalho.
                    </p>
                    <p class="text-white text-base font-normal text-center mt-2">
                        Navegue pelas diversas áreas de design e veja como criatividade e inovação podem se combinar para gerar resultados excepcionais.
                    </p>

                    <div class="w-full grid grid-cols-1 gap-4 mt-8">
                        <a href="/contato" class="font-bold text-center border-2 border-solid border-white text-white py-4"><i class="fa-regular fa-envelope"></i> Contato</a>
                        <a href="#" class="font-bold text-center border-2 border-solid border-white text-white py-4"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dirt_white p-8">
            <div class="grid grid-cols-1 gap-4">
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

        <section class="bg-dirt_white p-8 pb-20">
            <h2 class="text-primary text-[2rem] font-bold text-center">Projetos</h2>

            <div class="flex flex-col justify-center items-center border-b-[5px] border-solid border-primary pb-10 mt-10">
                <div>
                    <img src="{{ asset('img/webp/flash_solda_mobile.webp') }}" alt="Projeto Flash Solda">
                </div>

                <div class="text-center">
                    <h3 class="text-primary text-[2.5rem] font-bold text-center mt-4">Flash Solda</h3>
                    <span class="text-primary text-lg font-normal mt-2">UX/UI</span>
                    <p class="text-center text-lg mt-4">
                        Desenvolvimento de uma landing page para a Flash Solda, focada na venda de uma máquina de solda alinhada a uma metodologia de estudo. O objetivo era destacar as vantagens do pacote e apresentar a oferta de maneira clara e atrativa para o usuário.
                    </p>

                    <div class="w-full grid grid-cols-1 gap-4 mt-8">
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4">Conhecer</a>
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4"><i class="fa-brands fa-figma"></i> Ver protótipo</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center border-b-[5px] border-solid border-primary pb-10 mt-10">
                <div>
                    <img src="{{ asset('img/webp/savvi_mobile.webp') }}" alt="Projeto Savvi">
                </div>

                <div class="text-center">
                    <h3 class="text-primary text-[2.5rem] font-bold text-center mt-4">Savvi</h3>
                    <span class="text-primary text-lg font-normal mt-2">Motion</span>
                    <p class="text-center text-lg mt-4">
                        Desenvolvimento de um vídeo institucional para a Savvi com o objetivo de apresentar a empresa, seus funcionários e cases de sucesso durante o evento Mercado Live Experience 2023. O vídeo deveria transmitir a essência da empresa e destacar suas conquistas.
                    </p>

                    <div class="w-full grid grid-cols-1 gap-4 mt-8">
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4">Conhecer</a>
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4"><i class="fa-brands fa-vimeo-v"></i> Ver vídeo</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center border-b-[5px] border-solid border-primary pb-10 mt-10">
                <div>
                    <img src="{{ asset('img/webp/frutekas_mobile.webp') }}" alt="Projeto Frutekas">
                </div>

                <div class="text-center">
                    <h3 class="text-primary text-[2.5rem] font-bold text-center mt-4">Frutekas</h3>
                    <span class="text-primary text-lg font-normal mt-2">UX/UI</span>
                    <p class="text-center text-lg mt-4">
                        A Landing Page Frutekas foi criada para e compartilhar com o mundo o sabor autêntico e a pureza das frutas brasileiras. O objetivo deles é simples: proporcionar aos consumidores uma opção saudável e prática para desfrutar da frescura das frutas sem abrir mão da qualidade.
                    </p>

                    <div class="w-full grid grid-cols-1 gap-4 mt-8">
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4">Conhecer</a>
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4"><i class="fa-brands fa-figma"></i> Ver protótipo</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center border-b-[5px] border-solid border-primary pb-10 mt-10">
                <div>
                    <img src="{{ asset('img/webp/kontrol_mobile.webp') }}" alt="Projeto Kontrol">
                </div>

                <div class="text-center">
                    <h3 class="text-primary text-[2.5rem] font-bold text-center mt-4">Kontrol</h3>
                    <span class="text-primary text-lg font-normal mt-2">Branding</span>
                    <p class="text-center text-lg mt-4">
                        Desenvolvi a identidade visual para a Kontrol Tecnologia, uma empresa de software de gestão de estabelecimentos. O objetivo central foi transmitir uma sensação de segurança e modernidade aos clientes, representada pelos tons de azul escuro e claro.
                    </p>

                    <div class="w-full grid grid-cols-1 gap-4 mt-8">
                        <a href="#" class="font-bold text-center border-2 border-solid border-primary text-primary py-4">Conhecer</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary p-8">
            <div class="flex flex-col">
                <h2 class="text-3xl font-bold text-white text-center px-4">Vamos começar um projeto?</h2>
                <p class="text-white font-normal text-center mt-5">
                    Entre em contato para discutir seus próximos projetos e descobrir como posso ajudá-lo a alcançar seus objetivos de design.
                </p>

                <div class="w-full grid grid-cols-1 gap-4 mt-8">
                    <a href="/contato" class="font-bold text-center border-2 border-solid border-white text-white py-4"><i class="fa-regular fa-envelope"></i> Contato</a>
                    <a href="#" class="font-bold text-center border-2 border-solid border-white text-white py-4"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </section>

        <section class="p-8">
            <div class="flex justify-center">
                <img src="{{ asset('img/webp/joao_pessi.webp') }}" alt="Foto do João Pessi">
            </div>

            <div class="border-b-[4px] border-solid border-primary py-4">
                <h2 class="text-primary text-3xl font-bold text-center">Olá, sou o João Pessi</h2>
            </div>

            <div class="font-normal text-start mt-4">
                <p class="mb-2">
                    Tenho 26 anos e moro no Espírito Santo, Brasil.
                </p>
                <p class="mb-2">
                    Trabalho como Designer há <span class="font-bold">5 anos</span>, acumulando experiência em várias áreas do design, como <span class="font-bold">Motion Design</span>, <span class="font-bold">UX/UI</span>, <span class="font-bold">Design Gráfico</span> e <span class="font-bold">Branding</span>.
                </p>
                <p class="mb-2">
                    Minhas criações são voltadas para atender ás <span class="font-bold">necessidades de meus clientes</span>, sempre buscando soluções inovadoras que se destacam.
                </p>
                <p class="mb-2">
                    Minha abordagem ao design é centrada em contar histórias visuais que <span class="font-bold">conectam ideias e emoções</span>. Eu acredito que um design bem executado pode transformar uma <span class="font-bold">visão em realidade</span>, impactando positivamente as carcas e projetos com os quais colaboro.
                </p>
            </div>
        </section>
    </main>

    <footer class="bg-primary text-center py-6">
        <span class="text-white">Desenvolvendo criatividade em cada detalhe</span>
    </footer>

    <script src="https://kit.fontawesome.com/3aaec5b8b5.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</body>
</html>
