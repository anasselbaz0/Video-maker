<?php

/* C:\xampp\htdocs\video\vendor\cakephp\bake\src\Template\Bake\Template\login.twig */
class __TwigTemplate_ba1a89a73cafb77e30e56e0981ba4b4706ff54e0b74e08e5d2ac553667e59e1a extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\video\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\login.twig"));

        // line 16
        echo "<?php
/**
 * @var \\";
        // line 18
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\View\\AppView \$this
 */
?>
<div class=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " form\">
<?= \$this->Flash->render('auth') ?>
    <?= \$this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= \$this->Form->control('username') ?>
        <?= \$this->Form->control('password') ?>
    </fieldset>
    <?= \$this->Form->button(__('Login')); ?>
    <?= \$this->Form->end() ?>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\video\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 21,  26 => 18,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
/**
 * @var \\{{ namespace }}\\View\\AppView \$this
 */
?>
<div class=\"{{ pluralVar }} form\">
<?= \$this->Flash->render('auth') ?>
    <?= \$this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= \$this->Form->control('username') ?>
        <?= \$this->Form->control('password') ?>
    </fieldset>
    <?= \$this->Form->button(__('Login')); ?>
    <?= \$this->Form->end() ?>
</div>
", "C:\\xampp\\htdocs\\video\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\login.twig", "C:\\xampp\\htdocs\\video\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\login.twig");
    }
}
