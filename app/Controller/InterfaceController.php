<?php

    namespace App\Controller;

    interface InterfaceController {
        /**
         * Responsável por padronizar todas as views, sendo obrigatório
         * a implementação de, no mínimo, este método
         */
        public function processaRota();
    }