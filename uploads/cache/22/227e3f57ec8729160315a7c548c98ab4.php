<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig.html */
class __TwigTemplate_b5ad85570b6e6425db9a343130e00ed7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'beforePage' => [$this, 'block_beforePage'],
            'sidebar' => [$this, 'block_sidebar'],
            'page' => [$this, 'block_page'],
            'afterPage' => [$this, 'block_afterPage'],
            'footer' => [$this, 'block_footer'],
            'privacy' => [$this, 'block_privacy'],
            'foot' => [$this, 'block_foot'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lang"] ?? null), "html", null, true);
        yield "\" dir=\"";
        yield ((($context["rightToLeft"] ?? null)) ? ("rtl") : ("ltr"));
        yield "\" style=\"scroll-behavior: smooth;\">
    <head>
        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 19
        yield "    </head>
    <body x-data=\"{ modalOpen: false, modalType: 'none', globalShowHide: false }\"
        class=\"h-full flex flex-col font-sans ";
        // line 21
        ((($context["bodyBackground"] ?? null)) ? (yield "") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("body-gradient-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["themeColour"] ?? null))), "html", null, true)));
        yield "\" style=\"";
        ((($context["bodyBackground"] ?? null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bodyBackground"] ?? null), "html", null, true)) : (yield ""));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["themeColour"] ?? null))) ? ("background: linear-gradient(to left top, #402568 2%, #935ee1 65%, #a871ec) no-repeat fixed") : (""));
        yield "\">
        <a id=\"top\"></a>
        ";
        // line 23
        $context["sidebarPos"] = ((($context["isLoggedIn"] ?? null)) ? ("left") : ("right"));
        // line 24
        yield "
        <div class=\"px-4 sm:px-6 lg:px-12 pb-24\">

            ";
        // line 27
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 89
        yield "        </div>
        <div id=\"wrapOuter\" class=\"flex-1 pt-24 bg-transparent-100\">
            <div id=\"wrap\" class=\"px-0 sm:px-6 lg:px-12 -mt-48\">
                ";
        // line 92
        yield from $this->unwrap()->yieldBlock('beforePage', $context, $blocks);
        // line 94
        yield "
                <div class=\"block lg:hidden mx-4 sm:mx-0 mb-4\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 97
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 98
                yield "                        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">";
                yield $context["text"];
                yield "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                </div>

                <div id=\"content-wrap\" class=\"relative w-full min-h-1/2 flex content-start ";
        // line 103
        yield ((($context["sidebar"] ?? null)) ? ("gap-4 lg:gap-6 flex flex-col") : ("flex-col"));
        yield " ";
        yield (((($context["sidebarPos"] ?? null) == "left")) ? ("lg:flex-row") : ("lg:flex-row-reverse"));
        yield " ";
        yield ((( !($context["isHomePage"] ?? null) &&  !($context["isLoggedIn"] ?? null))) ? ("flex-col-reverse") : (""));
        yield " clearfix\">

                    ";
        // line 105
        if ((($context["sidebar"] ?? null) && (($context["sidebarContents"] ?? null) || ($context["menuModule"] ?? null)))) {
            // line 106
            yield "                        <div id=\"sidebar\" class=\"w-full lg:w-sidebar lg:min-w-72 lg:max-w-xs \">
                            ";
            // line 107
            yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
            // line 110
            yield "                        </div>

                    ";
        } else {
            // line 113
            yield "                        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "navigation.twig.html");
            yield "
                    ";
        }
        // line 115
        yield "
                    <div id=\"content\" class=\"";
        // line 116
        ((($context["contentClass"] ?? null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contentClass"] ?? null), "html", null, true)) : (yield "max-w-full"));
        yield " ";
        yield (((($context["isHomePage"] ?? null) && ($context["isLoggedIn"] ?? null))) ? ("bg-gray-100") : ("bg-white pb-6"));
        yield " w-full shadow  sm:rounded lg:flex-1 px-4 sm:px-8\">

                        <div id=\"content-inner\" class=\"h-full\">

                            ";
        // line 120
        yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
        // line 127
        yield "                        </div>
                    </div>

                </div>

                ";
        // line 132
        if (($context["isLoggedIn"] ?? null)) {
            // line 133
            yield "                    <div class=\"text-right mt-2 text-xs pr-1\">
                        <a class='text-";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
            yield "-800' href='#top'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Return to top"), "html", null, true);
            yield "</a>
                    </div>
                ";
        }
        // line 137
        yield "
                ";
        // line 138
        yield from $this->unwrap()->yieldBlock('afterPage', $context, $blocks);
        // line 140
        yield "            </div>

            

            ";
        // line 144
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 151
        yield "
        </div>

        ";
        // line 154
        yield from $this->unwrap()->yieldBlock('privacy', $context, $blocks);
        // line 157
        yield "
        ";
        // line 158
        yield from $this->unwrap()->yieldBlock('foot', $context, $blocks);
        // line 161
        yield "    </body>
</html>
";
        return; yield '';
    }

    // line 16
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "head.twig.html");
        yield "
        ";
        return; yield '';
    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "                <div id=\"header\" class=\"relative flex justify-between items-center\">

                    <a id=\"header-logo\" class=\"block my-4 max-w-xs sm:max-w-full leading-none\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
        yield "\">
                        <img class=\"block max-w-full ";
        // line 31
        yield ((($context["isLoggedIn"] ?? null)) ? ("h-12") : ("h-20 mt-4 mb-4"));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["organisationName"] ?? null), "html", null, true);
        yield " Logo\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((array_key_exists("organisationLogo", $context)) ? (Twig\Extension\CoreExtension::default(($context["organisationLogo"] ?? null), "themes/Default/img/logo.png")) : ("themes/Default/img/logo.png")), "/", "left"), "html", null, true);
        yield "\" style=\"max-height:100px;\" />
                    </a>

                    <div class=\"flex-grow flex items-center justify-end text-right text-sm text-";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-200\">
                        ";
        // line 35
        if ((($context["isLoggedIn"] ?? null) && ($context["currentUser"] ?? null))) {
            // line 36
            yield "
                        <a href=\"";
            // line 37
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 37)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 37), "html", null, true)) : (yield "./index.php?q=/preferences.phpe"));
            yield "\" class=\"hidden sm:block text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
            yield "-200 hover:text-white\">
                            ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "
                        </a>

                        <div class=\"relative px-4 py-4 ";
            // line 41
            yield ((($context["rightToLeft"] ?? null)) ? ("-ml-3") : ("-mr-3"));
            yield "\" x-data=\"{menuOpen: false}\" @mouseleave=\"menuOpen = false\" @click.outside=\"menuOpen = false\">

                            <a @mouseenter=\"menuOpen = true\" @click=\"menuOpen = !menuOpen\" :class=\"{'ring-opacity-75': menuOpen, 'ring-opacity-25': !menuOpen}\" hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" href=\"";
            // line 43
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 43)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 43), "html", null, true)) : (yield "#"));
            yield "\" class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 43)) ? ("flex-none") : ("flex items-center justify-center"));
            yield " block overflow-hidden w-10 h-10 rounded-full bg-gray-200 ring-white ring-2 cursor-pointer\">
                            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 44)) {
                // line 45
                yield "                                <img class=\"w-full -mt-1\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 45), "html", null, true);
                yield "\" />
                            ";
            } else {
                // line 47
                yield "                                <img class=\"w-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/themes/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gibbonThemeName"] ?? null), "html", null, true);
                yield "/img/anonymous_75.jpg\" />
                            ";
            }
            // line 49
            yield "                            </a>

                            <ul x-cloak x-show=\"menuOpen\" x-transition:enter.duration.250ms x-transition:leave.duration.100ms class=\"list-none m-0 bg-black bg-opacity-75 backdrop-blur-lg backdrop-contrast-125 backdrop-saturate-150 absolute rounded-md w-48 mt-1 p-1 sm:p-1.5 z-50 cursor-pointer ";
            // line 51
            yield ((($context["rightToLeft"] ?? null)) ? ("left-0") : ("right-0"));
            yield "\">
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["minorLinks"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 53
                yield "                                <li class=\"hover:bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
                yield "-700 rounded\">
                                    <a @click=\"menuOpen = false\" href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 54), "html", null, true);
                yield "\" class=\"flex justify-between items-center text-sm text-white focus:text-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
                yield "-200 no-underline px-1 py-2 md:py-1 leading-normal ";
                yield ((($context["rightToLeft"] ?? null)) ? ("text-right") : ("text-left"));
                yield "\" target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 54), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 54) == "_blank")) ? ("rel=\"noopener noreferrer\"") : (""));
                yield ">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 55);
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 57) == "_blank")) {
                    // line 58
                    yield "                                            ";
                    yield $this->env->getFunction('icon')->getCallable()("basic", "external-link", "size-4 text-white text-opacity-50 pointer-events-none");
                    yield "
                                        ";
                }
                // line 60
                yield "                                    </a>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                            </ul>

                        </div>
                        ";
        } else {
            // line 67
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["minorLinks"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 68
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "prepend", [], "any", false, false, false, 68), "html", null, true);
                yield "&nbsp;
                                <a href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 69), "html", null, true);
                yield "\" class=\"text-white ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "count", [], "any", false, false, false, 69) > 3)) ? ("hidden sm:block") : (""));
                yield "\" target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 69), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 69) == "_blank")) ? ("rel=\"noopener noreferrer\"") : (""));
                yield ">";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 70);
                // line 71
                yield "</a>
                                ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "append", [], "any", false, false, false, 72), "html", null, true);
                yield "
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                        ";
        }
        // line 75
        yield "
                        ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseName", [], "any", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseLogo", [], "any", false, false, false, 76))) {
            // line 77
            yield "                            <img class=\"ml-3 -mt-2 w-12 h-12\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseName", [], "any", false, false, false, 77), "html", null, true);
            yield "\" style=\"vertical-align: -75%;\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseLogo", [], "any", false, false, false, 77), "html", null, true);
            yield "\"/>
                        ";
        }
        // line 79
        yield "                    </div>
                </div>

                ";
        // line 82
        if (($context["isLoggedIn"] ?? null)) {
            // line 83
            yield "                <nav id=\"header-menu\" class=\"flex-1 justify-between\">
                    ";
            // line 84
            yield Twig\Extension\CoreExtension::include($this->env, $context, "menu.twig.html");
            yield "
                </nav>
                ";
        }
        // line 87
        yield "
            ";
        return; yield '';
    }

    // line 92
    public function block_beforePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                ";
        return; yield '';
    }

    // line 107
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        yield "                            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "navigation.twig.html");
        yield "
                            ";
        return; yield '';
    }

    // line 120
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        yield "
                                ";
        // line 122
        yield Twig\Extension\CoreExtension::include($this->env, $context, "page.twig.html");
        yield "

                                ";
        // line 124
        yield Twig\Extension\CoreExtension::join(($context["content"] ?? null), "
");
        yield "
                                
                            ";
        return; yield '';
    }

    // line 138
    public function block_afterPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                ";
        return; yield '';
    }

    // line 144
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        yield "                <div class=\"relative text-sm text-gray-700 px-6 lg:px-12 mt-4 pt-2 pb-6 leading-normal border-t border-gray-300 ";
        yield ((($context["rightToLeft"] ?? null)) ? ("text-right") : ("text-left"));
        yield "\">
                    ";
        // line 146
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.twig.html");
        yield "

                    <img class=\"absolute top-0 -mt-1 hidden sm:block w-32 ";
        // line 148
        yield ((($context["rightToLeft"] ?? null)) ? ("left-0 sm:ml-0 md:ml-16") : ("right-0 sm:mr-0 md:mr-16"));
        yield "\" alt=\"Logo text-xs\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
        yield "/themes/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("gibbonThemeName", $context)) ? (Twig\Extension\CoreExtension::default(($context["gibbonThemeName"] ?? null), "Default")) : ("Default")), "html", null, true);
        yield "/img/gibbon-white.svg\"/>
                </div>
            ";
        return; yield '';
    }

    // line 154
    public function block_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "privacy.twig.html");
        yield "
        ";
        return; yield '';
    }

    // line 158
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "foot.twig.html");
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  538 => 159,  534 => 158,  526 => 155,  522 => 154,  510 => 148,  505 => 146,  500 => 145,  496 => 144,  488 => 138,  479 => 124,  474 => 122,  471 => 121,  467 => 120,  459 => 108,  455 => 107,  447 => 92,  441 => 87,  435 => 84,  432 => 83,  430 => 82,  425 => 79,  415 => 77,  413 => 76,  410 => 75,  407 => 74,  391 => 72,  388 => 71,  386 => 70,  377 => 69,  372 => 68,  354 => 67,  348 => 63,  340 => 60,  334 => 58,  332 => 57,  330 => 55,  319 => 54,  314 => 53,  310 => 52,  306 => 51,  302 => 49,  294 => 47,  286 => 45,  284 => 44,  278 => 43,  273 => 41,  267 => 38,  261 => 37,  258 => 36,  256 => 35,  252 => 34,  240 => 31,  236 => 30,  232 => 28,  228 => 27,  220 => 17,  216 => 16,  209 => 161,  207 => 158,  204 => 157,  202 => 154,  197 => 151,  195 => 144,  189 => 140,  187 => 138,  184 => 137,  176 => 134,  173 => 133,  171 => 132,  164 => 127,  162 => 120,  153 => 116,  150 => 115,  144 => 113,  139 => 110,  137 => 107,  134 => 106,  132 => 105,  123 => 103,  119 => 101,  113 => 100,  102 => 98,  97 => 97,  93 => 96,  89 => 94,  87 => 92,  82 => 89,  80 => 27,  75 => 24,  73 => 23,  64 => 21,  60 => 19,  58 => 16,  51 => 14,  47 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/

TODO: add template variable details.
-->#}

<!DOCTYPE html>
<html lang=\"{{ lang }}\" dir=\"{{ rightToLeft ? 'rtl' : 'ltr' }}\" style=\"scroll-behavior: smooth;\">
    <head>
        {% block head %}
        {{ include('head.twig.html') }}
        {% endblock head %}
    </head>
    <body x-data=\"{ modalOpen: false, modalType: 'none', globalShowHide: false }\"
        class=\"h-full flex flex-col font-sans {{ bodyBackground  ? '' : 'body-gradient-' ~ themeColour|lower }}\" style=\"{{ bodyBackground  ? bodyBackground : '' }} {{ themeColour is empty ? 'background: linear-gradient(to left top, #402568 2%, #935ee1 65%, #a871ec) no-repeat fixed' : '' }}\">
        <a id=\"top\"></a>
        {% set sidebarPos = isLoggedIn ? 'left' : 'right' %}

        <div class=\"px-4 sm:px-6 lg:px-12 pb-24\">

            {% block header %}
                <div id=\"header\" class=\"relative flex justify-between items-center\">

                    <a id=\"header-logo\" class=\"block my-4 max-w-xs sm:max-w-full leading-none\" href=\"{{ absoluteURL }}\">
                        <img class=\"block max-w-full {{ isLoggedIn ? 'h-12' : 'h-20 mt-4 mb-4' }}\" alt=\"{{ organisationName }} Logo\" src=\"{{ absoluteURL }}/{{ organisationLogo|default(\"themes/Default/img/logo.png\")|trim('/', 'left') }}\" style=\"max-height:100px;\" />
                    </a>

                    <div class=\"flex-grow flex items-center justify-end text-right text-sm text-{{ themeColour }}-200\">
                        {% if isLoggedIn and currentUser %}

                        <a href=\"{{ currentUser.url ?? './index.php?q=/preferences.phpe' }}\" class=\"hidden sm:block text-{{ themeColour }}-200 hover:text-white\">
                            {{ currentUser.name }}
                        </a>

                        <div class=\"relative px-4 py-4 {{ rightToLeft ? '-ml-3' : '-mr-3' }}\" x-data=\"{menuOpen: false}\" @mouseleave=\"menuOpen = false\" @click.outside=\"menuOpen = false\">

                            <a @mouseenter=\"menuOpen = true\" @click=\"menuOpen = !menuOpen\" :class=\"{'ring-opacity-75': menuOpen, 'ring-opacity-25': !menuOpen}\" hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" href=\"{{ currentUser.url ?? '#' }}\" class=\"{{ currentUser.image_240 ? 'flex-none' : 'flex items-center justify-center' }} block overflow-hidden w-10 h-10 rounded-full bg-gray-200 ring-white ring-2 cursor-pointer\">
                            {% if currentUser.image_240 %}
                                <img class=\"w-full -mt-1\" src=\"{{ absoluteURL }}/{{ currentUser.image_240 }}\" />
                            {% else %}
                                <img class=\"w-full\" src=\"{{ absoluteURL }}/themes/{{ gibbonThemeName }}/img/anonymous_75.jpg\" />
                            {% endif %}
                            </a>

                            <ul x-cloak x-show=\"menuOpen\" x-transition:enter.duration.250ms x-transition:leave.duration.100ms class=\"list-none m-0 bg-black bg-opacity-75 backdrop-blur-lg backdrop-contrast-125 backdrop-saturate-150 absolute rounded-md w-48 mt-1 p-1 sm:p-1.5 z-50 cursor-pointer {{ rightToLeft ? 'left-0' : 'right-0' }}\">
                                {% for link in minorLinks|reverse %}
                                <li class=\"hover:bg-{{ themeColour }}-700 rounded\">
                                    <a @click=\"menuOpen = false\" href=\"{{ link.url }}\" class=\"flex justify-between items-center text-sm text-white focus:text-{{ themeColour }}-200 no-underline px-1 py-2 md:py-1 leading-normal {{ rightToLeft ? 'text-right' : 'text-left' }}\" target=\"{{ link.target }}\" {{ link.target == '_blank' ? 'rel=\"noopener noreferrer\"' : '' }}>
                                        {{- link.name|raw -}}

                                        {% if link.target == '_blank' %}
                                            {{ icon('basic', 'external-link', 'size-4 text-white text-opacity-50 pointer-events-none') }}
                                        {% endif %}
                                    </a>
                                </li>
                                {% endfor %}
                            </ul>

                        </div>
                        {% else %}
                            {% for link in minorLinks %}
                                {{ link.prepend }}&nbsp;
                                <a href=\"{{ link.url }}\" class=\"text-white {{ loop.count > 3 ? 'hidden sm:block' }}\" target=\"{{ link.target }}\" {{ link.target == '_blank' ? 'rel=\"noopener noreferrer\"' : '' }}>
                                    {{- link.name|raw -}}
                                </a>
                                {{ link.append }}
                            {% endfor %}
                        {% endif %}

                        {% if currentUser.houseName and currentUser.houseLogo %}
                            <img class=\"ml-3 -mt-2 w-12 h-12\" title=\"{{ currentUser.houseName }}\" style=\"vertical-align: -75%;\" src=\"{{ absoluteURL }}/{{ currentUser.houseLogo }}\"/>
                        {% endif %}
                    </div>
                </div>

                {% if isLoggedIn %}
                <nav id=\"header-menu\" class=\"flex-1 justify-between\">
                    {{ include('menu.twig.html') }}
                </nav>
                {% endif %}

            {% endblock %}
        </div>
        <div id=\"wrapOuter\" class=\"flex-1 pt-24 bg-transparent-100\">
            <div id=\"wrap\" class=\"px-0 sm:px-6 lg:px-12 -mt-48\">
                {% block beforePage %}
                {% endblock beforePage %}

                <div class=\"block lg:hidden mx-4 sm:mx-0 mb-4\">
                {% for type, alerts in page.alerts %}
                    {% for text in alerts %}
                        <div class=\"{{ type }}\">{{ text|raw }}</div>
                    {% endfor %}
                {% endfor %}
                </div>

                <div id=\"content-wrap\" class=\"relative w-full min-h-1/2 flex content-start {{ sidebar ? 'gap-4 lg:gap-6 flex flex-col' : 'flex-col' }} {{ sidebarPos == 'left' ? 'lg:flex-row' : 'lg:flex-row-reverse' }} {{ not isHomePage and not isLoggedIn ? 'flex-col-reverse'}} clearfix\">

                    {% if sidebar and (sidebarContents or menuModule) %}
                        <div id=\"sidebar\" class=\"w-full lg:w-sidebar lg:min-w-72 lg:max-w-xs \">
                            {% block sidebar %}
                            {{ include('navigation.twig.html') }}
                            {% endblock sidebar %}
                        </div>

                    {% else %}
                        {{ include('navigation.twig.html') }}
                    {% endif %}

                    <div id=\"content\" class=\"{{ contentClass ? contentClass : 'max-w-full' }} {{ isHomePage and isLoggedIn ? 'bg-gray-100' : 'bg-white pb-6'}} w-full shadow  sm:rounded lg:flex-1 px-4 sm:px-8\">

                        <div id=\"content-inner\" class=\"h-full\">

                            {% block page %}

                                {{ include('page.twig.html') }}

                                {{ content|join(\"\\n\")|raw }}
                                
                            {% endblock %}
                        </div>
                    </div>

                </div>

                {% if isLoggedIn %}
                    <div class=\"text-right mt-2 text-xs pr-1\">
                        <a class='text-{{ themeColour }}-800' href='#top'>{{ __('Return to top') }}</a>
                    </div>
                {% endif %}

                {% block afterPage %}
                {% endblock afterPage %}
            </div>

            

            {% block footer %}
                <div class=\"relative text-sm text-gray-700 px-6 lg:px-12 mt-4 pt-2 pb-6 leading-normal border-t border-gray-300 {{ rightToLeft ? 'text-right' : 'text-left' }}\">
                    {{ include('footer.twig.html') }}

                    <img class=\"absolute top-0 -mt-1 hidden sm:block w-32 {{ rightToLeft ? 'left-0 sm:ml-0 md:ml-16' : 'right-0 sm:mr-0 md:mr-16' }}\" alt=\"Logo text-xs\" src=\"{{ absoluteURL }}/themes/{{ gibbonThemeName|default(\"Default\") }}/img/gibbon-white.svg\"/>
                </div>
            {% endblock %}

        </div>

        {% block privacy %}
        {{ include('privacy.twig.html') }}
        {% endblock privacy %}

        {% block foot %}
        {{ include('foot.twig.html') }}
        {% endblock foot %}
    </body>
</html>
", "index.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\index.twig.html");
    }
}
