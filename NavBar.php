<?php
namespace intelligent\uikit;

use yii\helpers\Html;

/**
 * NavBar renders a navbar HTML component.
 *
 * Any content enclosed between the [[begin()]] and [[end()]] calls of NavBar
 * is treated as the content of the navbar. You may use widgets such as [[Nav]]
 * or [[\yii\widgets\Menu]] to build up such content. For example,
 *
 * ```php
 * use intelligent\uikit\NavBar;
 * use intelligent\uikit\Nav;
 *
 * NavBar::begin();
 * echo Nav::widget([
 *     'items' => [
 *         ['label' => 'Home', 'url' => ['/site/index']],
 *         ['label' => 'About', 'url' => ['/site/about']],
 *     ],
 * ]);
 * NavBar::end();
 * ```
 *
 * @see http://www.getuikit.com/docs/navbar.html
 * @author Oleg Martemjanov <demogorgorn@gmail.com> 
 * @author Nikolay Kostyurin <nikolay@artkost.ru>
 * @since 2.0
 */
class NavBar extends Widget
{
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, 'uk-navbar');

        if (empty($this->options['role'])) {
            $this->options['role'] = 'navigation';
        }

        echo Html::beginTag('nav', $this->options);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('nav');

        $this->registerAsset();
    }
}
