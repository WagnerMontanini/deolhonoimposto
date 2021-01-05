<?php

namespace WagnerMontanini\DeOlhoNoImposto;

/**
 * Class Service
 * @package WagnerMontanini\DeOlhoNoImposto
 */
class Service extends DeOlhoNoImposto
{

    /**
     * Service constructor.
     * @param string $versao
     * @param string $token
     */
    public function __construct(string $versao, string $token)
    {
        parent::__construct($versao, $token);
    }

    /**
     * @param array $fields
     * @return Service
     */
    public function service(array $fields): Service
    {
        $this->request(
            "GET",
            "/servicos",
            $fields
        );

        return $this;
    }
}