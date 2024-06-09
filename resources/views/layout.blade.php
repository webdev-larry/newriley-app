<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Raily - Meets on the Move</title>
    <meta
      content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
      name="description"
    />
    <meta content="Raily - Meets on the Move" property="og:title" />
    <meta
      content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
      property="og:description"
    />
    <meta content="https://azure.raily.app/files/og.jpg" property="og:image" />
    <meta content="Raily - Meets on the Move" property="twitter:title" />
    <meta
      content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
      property="twitter:description"
    />
    <meta
      content="https://azure.raily.app/files/og.jpg"
      property="twitter:image"
    />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link
      href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/css/railybeta.webflow.5fc711443.min.css"
      rel="stylesheet"
      type="text/css"
    />
    
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link
      href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad5758771455690c6cd002_favicon-32x32.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad57b8cfe4b6d03ca2342c_111.png"
      rel="apple-touch-icon"
    />
    <script
      async=""
      src="https://www.googletagmanager.com/gtag/js?id=G-K0DRW11MFK"
    ></script>
    <script type="text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("set", "developer_id.dZGVlNj", true);
      gtag("config", "G-K0DRW11MFK");
    </script>
    
    <link
      rel="preload"
      href="https://embed.mottle.com/embed.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    
    <link
      rel="preload"
      href="https://azure.raily.app/files/video-js.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />

    <script>
      window.rlyApp = window.rlyApp || {};
      window.SenjaCollectorConfig = {
        project: "raily",
        form: "IESt8p",
        trigger: { type: "none" },
      };
      window.rlyApp.isMobile = window.innerWidth < 900;
      
      (function () {
        
        window.HELP_IMPROVE_VIDEOJS = false;
        const script = document.createElement("script");
        const videoPlaylistPlugin = document.createElement("script");
        script.src = "https://azure.raily.app/files/video.min.js";
        videoPlaylistPlugin.src =
          "https://cdn.jsdelivr.net/npm/videojs-playlist@5.1.0/dist/videojs-playlist.min.js";

        const videoScriptLoader = new Promise((done, reject) => {
          script.addEventListener("load", done);
        });
        const videoPluginLoader = new Promise((done, reject) => {
          videoPlaylistPlugin.addEventListener("load", done);
        });

        script.async = true;
        videoPlaylistPlugin.async = true;
        setTimeout(() => {
          document.head.appendChild(script);
          videoScriptLoader.then(() => {
            document.head.appendChild(videoPlaylistPlugin);
          });
        }, 4000);

        Promise.all([videoScriptLoader, videoPluginLoader]).then(() => {
          document.dispatchEvent(new CustomEvent("videojs-loaded"));
          window.rlyApp.videoJsReady = true;
        });
      })(window);
      // Загрузка виджета формы
      (function () {
        const script = document.createElement("script");
        const queryStringForWidjet = document.createElement("script");
        script.src = "https://getlaunchlist.com/js/widget.js";
        queryStringForWidjet.src = "https://getlaunchlist.com/js/widget-diy.js";
        script.async = true;
        queryStringForWidjet.async = true;
        setTimeout(() => {
          document.head.appendChild(script);
          document.head.appendChild(queryStringForWidjet);
        }, 4000);
      })(window);

      const removeDisabledWidjetBlock = (block) => {
        if (
          window.rlyApp.isMobile &&
          !block.classList.contains("is-show-mobile")
        ) {
          delete block.dataset.dataId;
          block.classList.remove("senja-embed");
        }
        if (
          !window.rlyApp.isMobile &&
          !block.classList.contains("is-show-desktop")
        ) {
          delete block.dataset.dataId;
          block.classList.remove("senja-embed");
        }
      };

      document.addEventListener("DOMContentLoaded", function () {
        // Загрузка формы опроса и обратной связи по клику
        $("#early-access-button").click(() => {
          gtag("event", "early_access");
          const $form = $("#early-access-form");
          if ($form.attr("src")) {
            return;
          }
          const src = $form.data("src");
          // Насильная перерисовка нужна чтобы обойти баг в
          $form
            .attr("src", src)
            .css("display", "none")
            .css("display", "inline");
        });
        $("#ask-raily-button").click(() => {
          gtag("event", "ask_rally");
          const $script = $("#ask-raily-script");
          const src = $script.data("src");
          $script.attr("src", src);
        });

        // события аналитики для навигации
        $("#nav-wrapper a").click((event) => {
          const button = event.currentTarget;
          gtag("event", "navigation", {
            value: button.innerText,
          });
        });

        // Запоминаем страницу перед переходом в попап
        $("[data-popup-initiator]").click((event) => {
          const button = event.currentTarget;
          const popupContext = button.dataset.popupInitiator;
          sessionStorage.setItem("popupInitiator", popupContext);
        });

        $.get("https://get.geojs.io/v1/ip/country.json", (resp) => {
          const country = resp.country.toLowerCase();
          $("body").addClass(`country-${country}`);
        });
      });
    </script>
    <link rel="stylesheet" href="hh.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
<body class="body">

        @include('includes.headers')
    <main class="main-wrapper">
        @yield('content')
    </main>
    @stack('script')
</body>
</html>