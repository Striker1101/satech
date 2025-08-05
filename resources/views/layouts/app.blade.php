<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Satech') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wp/block.css') }}">
    <link rel="preload" as="font"
        href="https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2" crossorigin />
    <link rel="preload" as="font"
        href="https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-mu0SC55I.woff2"
        crossorigin />
    <link rel="stylesheet" id="siteground-optimizer-combined-css-d9463f1e692b96fb73f878ded50123d6"
        href="{{ asset('css/siteground-optimizer-combined.css') }}" media="all" />
    <link rel="preload" href="{{ asset('css/siteground-optimizer-combined.css') }}" as="style">
    <meta name='robots' content='max-image-preview:large' />

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery.min.js') }}?ver=3.7.1" id="jquery-core-js"></script>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery-migrate.min.js') }}?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script type="text/javascript"
        src="//demo.rstheme.com/wordpress/abuild/wp-content/plugins/revslider/public/js/libs/tptools.js?ver=6.7.23"
        id="tp-tools-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="//demo.rstheme.com/wordpress/abuild/wp-content/plugins/revslider/public/js/sr7.js?ver=6.7.23" id="sr7-js"
        async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" src="{{ asset('js/theia-sticky-sidebar.js') }}?ver=1.0.1" id="theia-sticky-sidebar-js">
    </script>
    <link rel="canonical" href="https://demo.rstheme.com/wordpress/abuild/" />
    <link rel='shortlink' href='https://demo.rstheme.com/wordpress/abuild/' />
    <meta name="generator"
        content="Elementor 3.27.5; features: e_font_icon_svg, additional_custom_breakpoints, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ asset('logo.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('logo.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('logo.png') }}" />
    <script>
        window._tpt ? ? = {};
        window.SR7 ? ? = {};
        _tpt.R ? ? = {};
        _tpt.R.fonts ? ? = {};
        _tpt.R.fonts.customFonts ? ? = {};
        SR7.devMode = false;
        SR7.F ? ? = {};
        SR7.G ? ? = {};
        SR7.LIB ? ? = {};
        SR7.E ? ? = {};
        SR7.E.gAddons ? ? = {};
        SR7.E.php ? ? = {};
        SR7.E.nonce = 'e2d36ccefe';
        SR7.E.ajaxurl = 'https://demo.rstheme.com/wordpress/abuild/wp-admin/admin-ajax.php';
        SR7.E.resturl = 'https://demo.rstheme.com/wordpress/abuild/wp-json/';
        SR7.E.slug_path = 'revslider/revslider.php';
        SR7.E.slug = 'revslider';
        SR7.E.plugin_url = 'https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/revslider/';
        SR7.E.wp_plugin_url = 'https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/';
        SR7.E.revision = '6.7.23';
        SR7.E.fontBaseUrl = '';
        SR7.G.breakPoints = [1240, 1024, 778, 480];
        SR7.E.modules = ['module', 'page', 'slide', 'layer', 'draw', 'animate', 'srtools', 'canvas', 'defaults', 'carousel',
            'navigation', 'media', 'modifiers', 'migration'
        ];
        SR7.E.libs = ['WEBGL'];
        SR7.E.css = ['csslp', 'cssbtns', 'cssfilters', 'cssnav', 'cssmedia'];
        SR7.E.resources = {};
        SR7.JSON ? ? = {};
        /*! Slider Revolution 7.0 - Page Processor */
        ! function() {
            "use strict";
            window.SR7 ? ? = {}, window._tpt ? ? = {}, SR7.version = "Slider Revolution 6.7.16", _tpt.getWinDim = function(
                t) {
                _tpt.screenHeightWithUrlBar ? ? = window.innerHeight;
                let e = SR7.F ? .modal ? .visible && SR7.M[SR7.F.module.getIdByAlias(SR7.F.modal.requested)];
                _tpt.scrollBar = window.innerWidth !== document.documentElement.clientWidth || e && window
                    .innerWidth !== e.c.module.clientWidth, _tpt.winW = window.innerWidth - (_tpt.scrollBar ||
                        "prepare" == t ? _tpt.scrollBarW ? ? _tpt.mesureScrollBar() : 0), _tpt.winH = window
                    .innerHeight, _tpt.winWAll = document.documentElement.clientWidth
            }, _tpt.getResponsiveLevel = function(t, e) {
                SR7.M[e];
                return _tpt.closestGE(t, _tpt.winWAll)
            }, _tpt.mesureScrollBar = function() {
                let t = document.createElement("div");
                return t.className = "RSscrollbar-measure", t.style.width = "100px", t.style.height = "100px", t.style
                    .overflow = "scroll", t.style.position = "absolute", t.style.top = "-9999px", document.body
                    .appendChild(t), _tpt.scrollBarW = t.offsetWidth - t.clientWidth, document.body.removeChild(t), _tpt
                    .scrollBarW
            }, _tpt.loadCSS = async function(t, e, s) {
                return s ? _tpt.R.fonts.required[e].status = 1 : (_tpt.R[e] ? ? = {}, _tpt.R[e].status = 1),
                    new Promise(((n, i) => {
                        if (_tpt.isStylesheetLoaded(t)) s ? _tpt.R.fonts.required[e].status = 2 : _tpt.R[e]
                            .status = 2, n();
                        else {
                            const l = document.createElement("link");
                            l.rel = "stylesheet";
                            let o = "text",
                                r = "css";
                            l["type"] = o + "/" + r, l.href = t, l.onload = () => {
                                s ? _tpt.R.fonts.required[e].status = 2 : _tpt.R[e].status = 2, n()
                            }, l.onerror = () => {
                                s ? _tpt.R.fonts.required[e].status = 3 : _tpt.R[e].status = 3, i(
                                    new Error(`Failed to load CSS: ${t}`))
                            }, document.head.appendChild(l)
                        }
                    }))
            }, _tpt.addContainer = function(t) {
                const {
                    tag: e = "div",
                    id: s,
                    class: n,
                    datas: i,
                    textContent: l,
                    iHTML: o
                } = t, r = document.createElement(e);
                if (s && "" !== s && (r.id = s), n && "" !== n && (r.className = n), i)
                    for (const [t, e] of Object.entries(i)) "style" == t ? r.style.cssText = e : r.setAttribute(
                        `data-${t}`, e);
                return l && (r.textContent = l), o && (r.innerHTML = o), r
            }, _tpt.collector = function() {
                return {
                    fragment: new DocumentFragment,
                    add(t) {
                        var e = _tpt.addContainer(t);
                        return this.fragment.appendChild(e), e
                    },
                    append(t) {
                        t.appendChild(this.fragment)
                    }
                }
            }, _tpt.isStylesheetLoaded = function(t) {
                let e = t.split("?")[0];
                return Array.from(document.querySelectorAll('link[rel="stylesheet"], link[rel="preload"]')).some((
                    t => t.href.split("?")[0] === e))
            }, _tpt.preloader = {
                requests: new Map,
                preloaderTemplates: new Map,
                show: function(t, e) {
                    if (!e || !t) return;
                    const {
                        type: s,
                        color: n
                    } = e;
                    if (s < 0 || "off" == s) return;
                    const i = `preloader_${s}`;
                    let l = this.preloaderTemplates.get(i);
                    l || (l = this.build(s, n), this.preloaderTemplates.set(i, l)), this.requests.has(t) || this
                        .requests.set(t, {
                            count: 0
                        });
                    const o = this.requests.get(t);
                    clearTimeout(o.timer), o.count++, 1 === o.count && (o.timer = setTimeout((() => {
                        o.preloaderClone = l.cloneNode(!0), o.anim && o.anim.kill(), void 0 !==
                            _tpt.gsap ? o.anim = _tpt.gsap.fromTo(o.preloaderClone, 1, {
                                opacity: 0
                            }, {
                                opacity: 1
                            }) : o.preloaderClone.classList.add("sr7-fade-in"), t.appendChild(o
                                .preloaderClone)
                    }), 150))
                },
                hide: function(t) {
                    if (!this.requests.has(t)) return;
                    const e = this.requests.get(t);
                    e.count--, e.count < 0 && (e.count = 0), e.anim && e.anim.kill(), 0 === e.count && (
                        clearTimeout(e.timer), e.preloaderClone && (e.preloaderClone.classList.remove(
                            "sr7-fade-in"), e.anim = _tpt.gsap.to(e.preloaderClone, .3, {
                            opacity: 0,
                            onComplete: function() {
                                e.preloaderClone.remove()
                            }
                        })))
                },
                state: function(t) {
                    if (!this.requests.has(t)) return !1;
                    return this.requests.get(t).count > 0
                },
                build: (t, e = "#ffffff", s = "") => {
                    if (t < 0 || "off" === t) return null;
                    const n = parseInt(t);
                    if (t = "prlt" + n, isNaN(n)) return null;
                    if (_tpt.loadCSS(SR7.E.plugin_url + "public/css/preloaders/t" + n + ".css", "preloader_" +
                            t), isNaN(n) || n < 6) {
                        const i = `background-color:${e}`,
                            l = 1 === n || 2 == n ? i : "",
                            o = 3 === n || 4 == n ? i : "",
                            r = _tpt.collector();
                        ["dot1", "dot2", "bounce1", "bounce2", "bounce3"].forEach((t => r.add({
                            tag: "div",
                            class: t,
                            datas: {
                                style: o
                            }
                        })));
                        const d = _tpt.addContainer({
                            tag: "sr7-prl",
                            class: `${t} ${s}`,
                            datas: {
                                style: l
                            }
                        });
                        return r.append(d), d
                    } {
                        let i = {};
                        if (7 === n) {
                            let t;
                            e.startsWith("#") ? (t = e.replace("#", ""), t =
                                `rgba(${parseInt(t.substring(0,2),16)}, ${parseInt(t.substring(2,4),16)}, ${parseInt(t.substring(4,6),16)}, `
                            ) : e.startsWith("rgb") && (t = e.slice(e.indexOf("(") + 1, e.lastIndexOf(
                                    ")")).split(",").map((t => t.trim())), t =
                                `rgba(${t[0]}, ${t[1]}, ${t[2]}, `), t && (i.style =
                                `border-top-color: ${t}0.65); border-bottom-color: ${t}0.15); border-left-color: ${t}0.65); border-right-color: ${t}0.15)`
                            )
                        } else 12 === n && (i.style = `background:${e}`);
                        const l = [10, 0, 4, 2, 5, 9, 0, 4, 4, 2][n - 6],
                            o = _tpt.collector(),
                            r = o.add({
                                tag: "div",
                                class: "sr7-prl-inner",
                                datas: i
                            });
                        Array.from({
                            length: l
                        }).forEach((() => r.appendChild(o.add({
                            tag: "span",
                            datas: {
                                style: `background:${e}`
                            }
                        }))));
                        const d = _tpt.addContainer({
                            tag: "sr7-prl",
                            class: `${t} ${s}`
                        });
                        return o.append(d), d
                    }
                }
            }, SR7.preLoader = {
                show: (t, e) => {
                    "off" !== (SR7.M[t] ? .settings ? .pLoader ? .type ? ? "off") && _tpt.preloader.show(e ||
                        SR7.M[t].c.module, SR7.M[t] ? .settings ? .pLoader ? ? {
                            color: "#fff",
                            type: 10
                        })
                },
                hide: (t, e) => {
                    "off" !== (SR7.M[t] ? .settings ? .pLoader ? .type ? ? "off") && _tpt.preloader.hide(e ||
                        SR7.M[t].c.module)
                },
                state: (t, e) => _tpt.preloader.state(e || SR7.M[t].c.module)
            }, _tpt.prepareModuleHeight = function(t) {
                window.SR7.M ? ? = {}, window.SR7.M[t.id] ? ? = {}, "ignore" == t.googleFont && (SR7.E
                    .ignoreGoogleFont = !0);
                let e = window.SR7.M[t.id];
                if (null == _tpt.scrollBarW && _tpt.mesureScrollBar(), e.c ? ? = {}, e.states ? ? = {}, e.settings ?
                    ?
                    = {}, e.settings.size ? ? = {}, t.fixed && (e.settings.fixed = !0), e.c.module = document
                    .getElementById(t.id), e.c.adjuster = e.c.module.getElementsByTagName("sr7-adjuster")[0], e.c
                    .content = e.c.module.getElementsByTagName("sr7-content")[0], "carousel" == t.type && (e.c
                        .carousel = e.c.content.getElementsByTagName("sr7-carousel")[0]), null == e.c.module ||
                    null == e.c.module) return;
                t.plType && t.plColor && (e.settings.pLoader = {
                        type: t.plType,
                        color: t.plColor
                    }), void 0 !== t.plType && "off" !== t.plType && SR7.preLoader.show(t.id, e.c.module), _tpt
                    .winW || _tpt.getWinDim("prepare"), _tpt.getWinDim();
                let s = "" + e.c.module.dataset ? .modal;
                "modal" == s || "true" == s || "undefined" !== s && "false" !== s || (e.settings.size.fullWidth = t
                    .size.fullWidth, e.LEV ? ? = _tpt.getResponsiveLevel(window.SR7.G.breakPoints, t.id), t
                    .vpt = _tpt.fillArray(t.vpt, 5), e.settings.vPort = t.vpt[e.LEV], void 0 !== t.el &&
                    "720" == t.el[4] && t.gh[4] !== t.el[4] && "960" == t.el[3] && t.gh[3] !== t.el[3] &&
                    "768" == t.el[2] && t.gh[2] !== t.el[2] && delete t.el, e.settings.size.height = null == t
                    .el || null == t.el[e.LEV] || 0 == t.el[e.LEV] || "auto" == t.el[e.LEV] ? _tpt.fillArray(t
                        .gh, 5, -1) : _tpt.fillArray(t.el, 5, -1), e.settings.size.width = _tpt.fillArray(t.gw,
                        5, -1), e.settings.size.minHeight = _tpt.fillArray(t.mh ? ? [0], 5, -1), e.cacheSize = {
                        fullWidth: e.settings.size ? .fullWidth,
                        fullHeight: e.settings.size ? .fullHeight
                    }, void 0 !== t.off && (t.off ? .t && (e.settings.size.m ? ? = {}) && (e.settings.size.m.t =
                            t.off.t), t.off ? .b && (e.settings.size.m ? ? = {}) && (e.settings.size.m.b = t.off
                            .b), t.off ? .l && (e.settings.size.p ? ? = {}) && (e.settings.size.p.l = t.off.l),
                        t.off ? .r && (e.settings.size.p ? ? = {}) && (e.settings.size.p.r = t.off.r), e
                        .offsetPrepared = !0), _tpt.updatePMHeight(t.id, t, !0))
            }, _tpt.updatePMHeight = (t, e, s) => {
                let n = SR7.M[t];
                var i = n.settings.size.fullWidth ? _tpt.winW : n.c.module.parentNode.offsetWidth;
                i = 0 === i || isNaN(i) ? _tpt.winW : i;
                let l = n.settings.size.width[n.LEV] || n.settings.size.width[n.LEV++] || n.settings.size.width[n
                        .LEV--] || i,
                    o = n.settings.size.height[n.LEV] || n.settings.size.height[n.LEV++] || n.settings.size.height[n
                        .LEV--] || 0,
                    r = n.settings.size.minHeight[n.LEV] || n.settings.size.minHeight[n.LEV++] || n.settings.size
                    .minHeight[n.LEV--] || 0;
                if (o = "auto" == o ? 0 : o, o = parseInt(o), "carousel" !== e.type && (i -= parseInt(e.onw ? ?
                        0) || 0), n.MP = !n.settings.size.fullWidth && i < l || _tpt.winW < l ? Math.min(1, i / l) :
                    1, e.size.fullScreen || e.size.fullHeight) {
                    let t = parseInt(e.fho) || 0,
                        s = ("" + e.fho).indexOf("%") > -1;
                    e.newh = _tpt.winH - (s ? _tpt.winH * t / 100 : t)
                } else e.newh = n.MP * Math.max(o, r);
                if (e.newh += (parseInt(e.onh ? ? 0) || 0) + (parseInt(e.carousel ? .pt) || 0) + (parseInt(e
                        .carousel ? .pb) || 0), void 0 !== e.slideduration && (e.newh = Math.max(e.newh, parseInt(e
                        .slideduration) / 3)), e.shdw && _tpt.buildShadow(e.id, e), n.c.adjuster.style.height = e
                    .newh + "px", n.c.module.style.height = e.newh + "px", n.c.content.style.height = e.newh + "px",
                    n.states.heightPrepared = !0, n.dims ? ? = {}, n.dims.moduleRect = n.c.module
                    .getBoundingClientRect(), n.c.content.style.left = "-" + n.dims.moduleRect.left + "px", !n
                    .settings.size.fullWidth) return s && requestAnimationFrame((() => {
                    i !== n.c.module.parentNode.offsetWidth && _tpt.updatePMHeight(e.id, e)
                })), void _tpt.bgStyle(e.id, e, window.innerWidth == _tpt.winW, !0);
                _tpt.bgStyle(e.id, e, window.innerWidth == _tpt.winW, !0), requestAnimationFrame((function() {
                    s && requestAnimationFrame((() => {
                        i !== n.c.module.parentNode.offsetWidth && _tpt.updatePMHeight(e.id,
                            e)
                    }))
                })), n.earlyResizerFunction || (n.earlyResizerFunction = function() {
                    requestAnimationFrame((function() {
                        _tpt.getWinDim(), _tpt.moduleDefaults(e.id, e), _tpt.updateSlideBg(t, !
                            0)
                    }))
                }, window.addEventListener("resize", n.earlyResizerFunction))
            }, _tpt.buildShadow = function(t, e) {
                let s = SR7.M[t];
                null == s.c.shadow && (s.c.shadow = document.createElement("sr7-module-shadow"), s.c.shadow
                    .classList.add("sr7-shdw-" + e.shdw), s.c.content.appendChild(s.c.shadow))
            }, _tpt.bgStyle = async (t, e, s, n, i) => {
                const l = SR7.M[t];
                if ((e = e ? ? l.settings).fixed && !l.c.module.classList.contains("sr7-top-fixed") && (l.c
                        .module.classList.add("sr7-top-fixed"), l.c.module.style.position = "fixed", l.c.module
                        .style.width = "100%", l.c.module.style.top = "0px", l.c.module.style.left = "0px", l.c
                        .module.style.pointerEvents = "none", l.c.module.style.zIndex = 5e3, l.c.content.style
                        .pointerEvents = "none"), null == l.c.bgcanvas) {
                    let t = document.createElement("sr7-module-bg"),
                        o = !1;
                    if ("string" == typeof e ? .bg ? .color && e ? .bg ? .color.includes("{"))
                        if (_tpt.gradient && _tpt.gsap) e.bg.color = _tpt.gradient.convert(e.bg.color);
                        else try {
                            let t = JSON.parse(e.bg.color);
                            (t ? .orig || t ? .string) && (e.bg.color = JSON.parse(e.bg.color))
                        } catch (t) {
                            return
                        }
                    let r = "string" == typeof e ? .bg ? .color ? e ? .bg ? .color || "transparent" : e ? .bg ?
                        .color ? .string ? ? e ? .bg ? .color ? .orig ? ? e ? .bg ? .color ? .color ? ?
                        "transparent";
                    if (t.style["background" + (String(r).includes("grad") ? "" : "Color")] = r, (
                            "transparent" !== r || i) && (o = !0), l.offsetPrepared && (t.style.visibility =
                            "hidden"), e ? .bg ? .image ? .src && (t.style.backgroundImage =
                            `url(${e?.bg?.image.src})`, t.style.backgroundSize = "" == (e.bg.image ? .size ? ?
                                "") ? "cover" : e.bg.image.size, t.style.backgroundPosition = e.bg.image
                            .position, t.style.backgroundRepeat = "" == e.bg.image.repeat || null == e.bg.image
                            .repeat ? "no-repeat" : e.bg.image.repeat, o = !0), !o) return;
                    l.c.bgcanvas = t, e.size.fullWidth ? t.style.width = _tpt.winW - (s && _tpt.winH < document
                            .body.offsetHeight ? _tpt.scrollBarW : 0) + "px" : n && (t.style.width = l.c.module
                            .offsetWidth + "px"), e.sbt ? .use ? l.c.content.appendChild(l.c.bgcanvas) : l.c
                        .module.appendChild(l.c.bgcanvas)
                }
                l.c.bgcanvas.style.height = void 0 !== e.newh ? e.newh + "px" : ("carousel" == e.type ? l.dims
                        .module.h : l.dims.content.h) + "px", l.c.bgcanvas.style.left = !s && e.sbt ? .use || l
                    .c.bgcanvas.closest("SR7-CONTENT") ? "0px" : "-" + (l ? .dims ? .moduleRect ? .left ? ? 0) +
                    "px"
            }, _tpt.updateSlideBg = function(t, e) {
                const s = SR7.M[t];
                let n = s.settings;
                s ? .c ? .bgcanvas && (n.size.fullWidth ? s.c.bgcanvas.style.width = _tpt.winW - (e && _tpt
                    .winH < document.body.offsetHeight ? _tpt.scrollBarW : 0) + "px" : preparing && (s.c
                    .bgcanvas.style.width = s.c.module.offsetWidth + "px"))
            }, _tpt.moduleDefaults = (t, e) => {
                let s = SR7.M[t];
                null != s && null != s.c && null != s.c.module && (s.dims ? ? = {}, s.dims.moduleRect = s.c
                    .module.getBoundingClientRect(), s.c.content.style.left = "-" + s.dims.moduleRect.left +
                    "px", s.c.content.style.width = _tpt.winW - _tpt.scrollBarW + "px", "carousel" == e
                    .type && (s.c.module.style.overflow = "visible"), _tpt.bgStyle(t, e, window
                        .innerWidth == _tpt.winW))
            }, _tpt.getOffset = t => {
                var e = t.getBoundingClientRect(),
                    s = window.pageXOffset || document.documentElement.scrollLeft,
                    n = window.pageYOffset || document.documentElement.scrollTop;
                return {
                    top: e.top + n,
                    left: e.left + s
                }
            }, _tpt.fillArray = function(t, e) {
                let s, n;
                t = Array.isArray(t) ? t : [t];
                let i = Array(e),
                    l = t.length;
                for (n = 0; n < t.length; n++) i[n + (e - l)] = t[n], null == s && "#" !== t[n] && (s = t[n]);
                for (let t = 0; t < e; t++) void 0 !== i[t] && "#" != i[t] || (i[t] = s), s = i[t];
                return i
            }, _tpt.closestGE = function(t, e) {
                let s = Number.MAX_VALUE,
                    n = -1;
                for (let i = 0; i < t.length; i++) t[i] - 1 >= e && t[i] - 1 - e < s && (s = t[i] - 1 - e, n =
                    i);
                return ++n
            }
        }();
    </script>
    <style type="text/css" id="wp-custom-css">
        .prelements-heading .title-inner .sub-text svg rect {
            fill: var(--e-global-color-primary);
        }

        .prelements-heading .title-inner .sub-text svg line {
            stroke: var(--e-global-color-primary);
        }

        .bs-sidebar .widget_nav_menu.widget_nav_menu ul li:hover,
        .bs-sidebar .widget_nav_menu#categories-2 ul li:hover,
        .bs-sidebar #categories-2.widget_nav_menu ul li:hover,
        .bs-sidebar #categories-2#categories-2 ul li:hover {
            background: $primaryColor;
            border-color: $primaryColor;
        }

        .bs-sidebar.dark-style .widget_text .rs-button .rs-btn:hover {
            background: $primaryColor;
        }

        .rs-blog-details blockquote cite::before,
        .bs-sidebar .widget_medvillsocialiconwi_widget .footer_social li a {
            color: #fff !important;
        }

        .bs-sidebar.dark-style .widget_custom_html .custom-html-widget .rs-contact-box .address-item:hover .address-icon {
            background: $primaryColor;
        }

        .bs-sidebar.dark-style .widget_custom_html .custom-html-widget .rs-contact-box .address-item .address-text a:hover {
            color: $primaryColor;
        }
    </style>

</head>


<body
    class="home page-template page-template-elementor_header_footer page page-id-10844 ehf-header ehf-footer ehf-template-abuild ehf-stylesheet-abuild rs-smoother-yes elementor-default elementor-template-full-width elementor-kit-10911 elementor-page elementor-page-10844">

    <!--Preloader start here-->
    <div id="pre-load">
        <button class="cancel-loader" type="button">Cancel Loader</button>
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="{{ asset('logo.png') }}" alt="Abuild Construction WordPress Theme">
                </div>
            </div>
        </div>
    </div>

    @include('partials.nav')
    <div id="page" class="hfeed site is-page gsap-enable">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>


    <!-- #page -->
    <div id="scrollUp">
        <svg class="arrowup" viewBox="0 0 24 24" width="18" height="18">
            <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"
                fill="#fff"></path>
        </svg>
        <svg class="scrollprogress" width="40" height="40">
            <circle class="progress-circle" cx="20" cy="20" r="18" stroke-width="2" fill="none"
                stroke="#fff" stroke-dasharray="113.1" stroke-dashoffset="113.1"></circle>
        </svg>
    </div>
    <!-- Custom Cursor Start -->
    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>


    <!-- Custom Cursor End -->
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>

    <script type="text/javascript" src="{{ asset('js/frontend.js') }}?ver=1754278226"
        id="rselements-frontend-editor-js-js"></script>
    <script type="text/javascript" src="{{ asset('js/hooks.min.js') }}?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{ asset('js/i18n.min.js') }}?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('js/swn-index.js') }}?ver=6.0.3" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.rstheme.com\/wordpress\/abuild\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('js/contact-form-7.js') }}?ver=6.0.3" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}?ver=201513434" id="popper-js"></script>
    <script type="text/javascript" src="{{ asset('js/headding-title.js') }}?ver=201513434" id="headding-title-js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}?ver=201513434" id="slick-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquerry/tilt.jquery.min.js') }}?ver=201513434" id="js-tilt-view-js">
    </script>
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery-ui.js') }}?ver=201513434" id="jquery-ui-js"></script>
    <script type="text/javascript" src="{{ asset('js/parallax-effect.min.js') }}?ver=201513434" id="parallax-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquerry/jQuery-plugin-progressbar.js') }}?ver=201513434"
        id="jquery-plugin-progressbar-js"></script>
    <script type="text/javascript" src="{{ asset('js/ddbeforeandafter.js') }}?ver=201513434" id="ddbefore-and-after-js">
    </script>
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery.marquee.min.js') }}?ver=201513434"
        id="rsaddons-marquee-js-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery.marquee.min.js') }}?ver=201513434"
        id="rsaddons-music-player-js-js"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr-2.8.3.min.js') }}?ver=2.8.3" id="modernizr-js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}?ver=5.0.2" id="bootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}?ver=2.2.1" id="owl-carousel-js"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}?ver=1.0.0" id="classie-js"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}?ver=8.4.5" id="swiper-js"></script>
    <script type="text/javascript" src="{{ asset('js/chart.umd.min.js') }}?ver=8.1.4" id="chart-umd-min-js"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}?ver=2.0.3" id="waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints-sticky.min.js') }}?ver=2.0.5" id="waypoints-sticky-js">
    </script>
    <script type="text/javascript" src="{{ asset('js/jquerry/jquery.lettering.js') }}?ver=2.0.3" id="lettering-js">
    </script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.min.js') }}?ver=5.0.0" id="imagesloaded-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/isotope.js?ver=3.0.4"
        id="isotope-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/jquery.magnific-popup.min.js?ver=1.1.0"
        id="jquery-magnific-popup-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/odometer.min.js?ver=1.0.0"
        id="odometer-js-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/jquery.appear.min.js?ver=1.0.0"
        id="appear-min-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/lenis.min.js?ver=1.0.0"
        id="lenis-min-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/interactions/gsap.min.js?ver=1.1.0"
        id="gsap-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/interactions/rs-splitText.min.js?ver=1.1.0"
        id="splittext-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/interactions/rs-scroll-trigger.min.js?ver=1.1.0"
        id="scroll-trigger-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/interactions/rs-anim-int.js?ver=1.1.0"
        id="gsap-int-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/themes/abuild/assets/js/main.js?ver=1.0.1"
        id="abuild-main-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/abuild-header-footer/inc/js/frontend.js?ver=1.0.1"
        id="hfe-frontend-js-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/abuild-addons/assets/js/custom.js?ver=201513434"
        id="rsaddons-offcanvas-js-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/abuild-addons/assets/js/jquery.countdownTimer.js?ver=201513434"
        id="rsaddons-countdowntimer-js-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.27.5"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.27.5"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": true
            },
            "version": "3.27.5",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "e_onboarding": true,
                "home_screen": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true,
                "launchpad-checklist": true
            },
            "urls": {
                "assets": "https:\/\/demo.rstheme.com\/wordpress\/abuild\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/demo.rstheme.com\/wordpress\/abuild\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/demo.rstheme.com\/wordpress\/abuild\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "45d0b1ebb8"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 10844,
                "title": "Abuild%20Construction%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.rstheme.com/wordpress/abuild/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.27.5"
        id="elementor-frontend-js"></script>

</body>

</html>
