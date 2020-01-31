<?php

/**
 * Funções auxiliares lara-html.
 */

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

if (!function_exists('lhtml')) {
    /**
     * Retorna o HTML.
     *
     * @param string $customScreen
     * @param null|mixed $data
     * @return string
     * @throws Exception
     */
    function lhtml(string $customScreen, array $data = [])
    {
        $customScreenName = $customScreen;
        if ($data)
            $customScreen = resolve($customScreen, $data);
        else
            $customScreen = resolve($customScreen);
        if (!($customScreen instanceof CustomScreenAbstract))
            throw new \Exception("{$customScreenName} is not an instance of CustomScreenAbstract!");
        $screen = new ScreenFinal; // CRIANDO NOVA TELA
        $screen->setScreen($screen); // ADICIONANDO AUTO-REFERÊNCIA PARA OS PLUGINS FILHOS
        $customScreen->setScreenFinal($screen);
        if (file_exists(config_path('larahtml/config.php')))
            $screen->setTemplate($customScreen->template ?: config('larahtml.config.default'));
        else
            throw new \Exception('Please run "php artisan vendor:publish --tag=lhtmlcfg"');
        $screen->setExtendedBlade($customScreen->extendedBlade ?: config('larahtml.config.extend_blade'));

        /*==============================================================================================================
         *             VERIFICANDO SE A FUNÇÃO PARA POPULAR A TELA ESTÁ PRESENTE NA TELA CUSTOMIZADA
         *==============================================================================================================
         * Se houver uma função com o nome do template ela terá precedência em relação a função run para montar a tela.
         */
        if (in_array($screen->getTemplate(), get_class_methods($customScreen)))
            $customScreen->{$screen->getTemplate()}($screen); // POPULANDO TELA COM PLUGINS DEFINIDOS PELO DEV
        elseif (in_array('run', get_class_methods($customScreen)))
            $customScreen->run($screen); // POPULANDO TELA COM PLUGINS DEFINIDOS PELO DEV
        else
            throw new Exception("'Run' or {$screen->getTemplate()} function not found!");

        return $customScreen->getScreenFinal()->getHtml(); // RETORNANDO HTML DA TELA
    }
}
