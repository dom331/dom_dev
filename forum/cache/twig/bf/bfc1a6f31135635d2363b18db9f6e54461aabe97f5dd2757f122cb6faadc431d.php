<?php

/* overall_footer.html */
class __TwigTemplate_cb9c319614f51468cfc0932f9c3a27ea1395bfa623b64e7ca9ea3b1f847297ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 12
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 15
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 36
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 37
        echo "</div>

<script src=\"";
        // line 39
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 40
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 41
        echo "
<script src=\"";
        // line 42
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 43
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 45
        echo "
";
        // line 46
        $asset_file = "jquery.collapse.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 47
        $asset_file = "jquery.collapse_storage.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 48
        echo "
<script>
jQuery(function(\$) {
\t'use strict';

\t/* Anchor jump offset for top-bar */
\tfunction scroll_if_anchor(href) {
\t\thref = typeof(href) == \"string\" ? href : \$(this).attr(\"href\");

\t\tif(!href) return;
\t\tvar fromTop = \$topBarHeight + 4;
\t\tvar \$target = \$(href);

\t\t// Older browsers without pushState might flicker here, as they momentarily jump to the wrong position (IE < 10)
\t\tif(\$target.length) {
\t\t\t\$('html, body').scrollTop(\$target.offset().top - fromTop);
\t\t\tif(history && \"pushState\" in history) {
\t\t\t\thistory.pushState({}, document.title, window.location.href.split(\"#\")[0] + href);
\t\t\t\t//window.location.hash = href;
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t}

\tvar \$topBar = \$('#top-bar');
\tvar \$topBarHeight = 0;

\tif (\$topBar.length) {
\t\t\$topBarHeight = \$topBar.outerHeight();

\t\t\$(\"body\").on(\"click\", \"a[href^='#']\", scroll_if_anchor);

\t\tscroll_if_anchor(window.location.hash);
\t}

\t/* Collapse boxes */
\t\$('.stat-block.online-list').attr('id', 'online-list');
\t\$('.stat-block.birthday-list').attr('id', 'birthday-list');
\t\$('.stat-block.statistics').attr('id', 'statistics');

\t\$('.collapse-box > h2, .stat-block > h3').addClass(\"open\").find('a').contents().unwrap();

\t\$('.collapse-box, .stat-block').collapse({
\t\tpersist: true,
\t\topen: function() {
\t\t\tthis.stop(true,true);
\t\t\tthis.addClass(\"open\");
\t\t\tthis.slideDown(400);
\t\t},
\t\tclose: function() {
\t\t\tthis.stop(true,true);
\t\t\tthis.slideUp(400);
\t\t\tthis.removeClass(\"open\");
\t\t}
\t});

\t";
        // line 104
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 105
            echo "\t/* Mini-profile context drop-down menus */
\tphpbb.dropdownVisibleContainers += ', .profile-context';

\t\$('.postprofile').each(function() {
\t\tvar \$this = \$(this),
\t\t\t\$trigger = \$this.find('dt a'),
\t\t\t\$contents = \$this.siblings('.profile-context').children('.dropdown'),
\t\t\toptions = {
\t\t\t\tdirection: 'auto',
\t\t\t\tverticalDirection: 'auto'
\t\t\t},
\t\t\tdata;

\t\tif (!\$trigger.length) {
\t\t\tdata = \$this.attr('data-dropdown-trigger');
\t\t\t\$trigger = data ? \$this.children(data) : \$this.children('a:first');
\t\t}

\t\tif (!\$contents.length) {
\t\t\tdata = \$this.attr('data-dropdown-contents');
\t\t\t\$contents = data ? \$this.children(data) : \$this.children('div:first');
\t\t}

\t\tif (!\$trigger.length || !\$contents.length) return;

\t\tif (\$this.hasClass('dropdown-up')) options.verticalDirection = 'up';
\t\tif (\$this.hasClass('dropdown-down')) options.verticalDirection = 'down';
\t\tif (\$this.hasClass('dropdown-left')) options.direction = 'left';
\t\tif (\$this.hasClass('dropdown-right')) options.direction = 'right';

\t\tphpbb.registerDropdown(\$trigger, \$contents, options);
\t});
\t";
        }
        // line 138
        echo "});
</script>

";
        // line 141
        // line 142
        echo "
";
        // line 143
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 143)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 144
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 146
        // line 147
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 147,  327 => 146,  322 => 144,  308 => 143,  305 => 142,  304 => 141,  299 => 138,  264 => 105,  262 => 104,  204 => 48,  189 => 47,  174 => 46,  171 => 45,  156 => 44,  141 => 43,  135 => 42,  132 => 41,  124 => 40,  120 => 39,  116 => 37,  112 => 36,  93 => 22,  78 => 18,  74 => 16,  65 => 15,  59 => 14,  57 => 13,  52 => 12,  47 => 11,  46 => 10,  42 => 8,  30 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* 		<!-- EVENT overall_footer_content_after -->*/
/* 	</div>*/
/* */
/* <!-- EVENT overall_footer_page_body_after -->*/
/* */
/* <div id="page-footer" role="contentinfo">*/
/* 	<!-- INCLUDE navbar_footer.html -->*/
/* */
/* 	<div class="copyright">*/
/* 		<!-- EVENT overall_footer_copyright_prepend -->*/
/* 		{CREDIT_LINE}*/
/* 		<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_copyright_append -->*/
/* 		<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 		<!-- IF U_ACP --><br /><strong><a href="{U_ACP}">{L_ACP}</a></strong><!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 		<div id="darken">&nbsp;</div>*/
/* 	</div>*/
/* */
/* 	<div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>*/
/* 	</div>*/
/* 	<div id="phpbb_confirm" class="phpbb_alert">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<div class="alert_text"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* </div>*/
/* */
/* <div>*/
/* 	<a id="bottom" class="anchor" accesskey="z"></a>*/
/* 	<!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* </div>*/
/* */
/* <script src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* */
/* <script src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* */
/* <!-- INCLUDEJS jquery.collapse.js -->*/
/* <!-- INCLUDEJS jquery.collapse_storage.js -->*/
/* */
/* <script>*/
/* jQuery(function($) {*/
/* 	'use strict';*/
/* */
/* 	/* Anchor jump offset for top-bar *//* */
/* 	function scroll_if_anchor(href) {*/
/* 		href = typeof(href) == "string" ? href : $(this).attr("href");*/
/* */
/* 		if(!href) return;*/
/* 		var fromTop = $topBarHeight + 4;*/
/* 		var $target = $(href);*/
/* */
/* 		// Older browsers without pushState might flicker here, as they momentarily jump to the wrong position (IE < 10)*/
/* 		if($target.length) {*/
/* 			$('html, body').scrollTop($target.offset().top - fromTop);*/
/* 			if(history && "pushState" in history) {*/
/* 				history.pushState({}, document.title, window.location.href.split("#")[0] + href);*/
/* 				//window.location.hash = href;*/
/* 				return false;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	var $topBar = $('#top-bar');*/
/* 	var $topBarHeight = 0;*/
/* */
/* 	if ($topBar.length) {*/
/* 		$topBarHeight = $topBar.outerHeight();*/
/* */
/* 		$("body").on("click", "a[href^='#']", scroll_if_anchor);*/
/* */
/* 		scroll_if_anchor(window.location.hash);*/
/* 	}*/
/* */
/* 	/* Collapse boxes *//* */
/* 	$('.stat-block.online-list').attr('id', 'online-list');*/
/* 	$('.stat-block.birthday-list').attr('id', 'birthday-list');*/
/* 	$('.stat-block.statistics').attr('id', 'statistics');*/
/* */
/* 	$('.collapse-box > h2, .stat-block > h3').addClass("open").find('a').contents().unwrap();*/
/* */
/* 	$('.collapse-box, .stat-block').collapse({*/
/* 		persist: true,*/
/* 		open: function() {*/
/* 			this.stop(true,true);*/
/* 			this.addClass("open");*/
/* 			this.slideDown(400);*/
/* 		},*/
/* 		close: function() {*/
/* 			this.stop(true,true);*/
/* 			this.slideUp(400);*/
/* 			this.removeClass("open");*/
/* 		}*/
/* 	});*/
/* */
/* 	<!-- IF S_VIEWTOPIC -->*/
/* 	/* Mini-profile context drop-down menus *//* */
/* 	phpbb.dropdownVisibleContainers += ', .profile-context';*/
/* */
/* 	$('.postprofile').each(function() {*/
/* 		var $this = $(this),*/
/* 			$trigger = $this.find('dt a'),*/
/* 			$contents = $this.siblings('.profile-context').children('.dropdown'),*/
/* 			options = {*/
/* 				direction: 'auto',*/
/* 				verticalDirection: 'auto'*/
/* 			},*/
/* 			data;*/
/* */
/* 		if (!$trigger.length) {*/
/* 			data = $this.attr('data-dropdown-trigger');*/
/* 			$trigger = data ? $this.children(data) : $this.children('a:first');*/
/* 		}*/
/* */
/* 		if (!$contents.length) {*/
/* 			data = $this.attr('data-dropdown-contents');*/
/* 			$contents = data ? $this.children(data) : $this.children('div:first');*/
/* 		}*/
/* */
/* 		if (!$trigger.length || !$contents.length) return;*/
/* */
/* 		if ($this.hasClass('dropdown-up')) options.verticalDirection = 'up';*/
/* 		if ($this.hasClass('dropdown-down')) options.verticalDirection = 'down';*/
/* 		if ($this.hasClass('dropdown-left')) options.direction = 'left';*/
/* 		if ($this.hasClass('dropdown-right')) options.direction = 'right';*/
/* */
/* 		phpbb.registerDropdown($trigger, $contents, options);*/
/* 	});*/
/* 	<!-- ENDIF -->*/
/* });*/
/* </script>*/
/* */
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* {$SCRIPTS}*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* </body>*/
/* </html>*/
/* */
